<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Log;
use App\Models\ContactForm;
use App\Models\AppRequest;
use App\Models\User;
use App\Models\State;
use App\Models\Categories;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\All_ads;

use Mail;
use App\Mail\TransactionsMail;

class HomeController extends Controller
{
    private $viewFolder = 'user/';

    public function index()
    {
        $alladList = All_ads::where('admin_status', '1')->whereNull('deleted_at')->orderBy('id','DESC')->limit(30)->get(); 
        
    	return view($this->viewFolder.'home.index',['alladList'=>$alladList]);
    }
    public function mobile_login()
    {
        
    	return view($this->viewFolder.'home.mobileLogin');
    }

    public function generate_otp(Request $Request)
    {
        $userDetails = User::where('mobile', $Request->phone)->first();
        $otp_no=substr(str_shuffle("0123456789"), 0, 4);
        if($userDetails){
                $update = [
                    'otp' => $otp_no,

                ];

                User::where('mobile', $Request->phone)
                ->update($update);
        }else{
                $insert = [
                    'otp' => $otp_no,
                    'role_id'=>2,
                    'mobile'=>$Request->phone,
                    'country_code'=>$Request->country_code
                ];
                $userDetails=User::create($insert);
        }

      
        return redirect()->route('login-otp',['user_id' => $userDetails->id])
        ->with('message',  "OTP has been sent on Your Mobile Number."); 
    	
    }

    public function login_otp($user_id)
    {
        $userDetails = User::where('id', $user_id)->first();
    	return view($this->viewFolder.'home.mobileOtp',['userDetails'=>$userDetails]);
    }
    public function check_otp(Request $Request)
    {
        
        $otpDetails = User::where('otp', $Request->otp)->where('mobile', $Request->mobile)->first();
    	if($otpDetails){
            
            $user_details = json_decode(json_encode($otpDetails),True);
            Session::put('user_details',$user_details);
            return redirect('user-dashboard');
        }else{
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('login-otp',['user_id' => $Request->user_id])
            ->with('message',  "Please enter currect OTP."); 
        }
    }
    public function user_dashboard()
    {
       
    	return view($this->viewFolder.'home.dashboard',['userDetails'=>'']);
    }


    public function user_logout()
    {
    	Session::forget('user_details');
    	return redirect('login');
    }
    public function profile_setting()
    {
        $userDetails = User::where('id', Session::get('user_details')['id'])->first();
        $allState = State::get();
    	return view($this->viewFolder.'home.profileSetting',['userDetails'=>$userDetails,'allState'=>$allState]);
    }

    public function update_profile(Request $Request)
    {
       

                $Request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                ]);
            
                $imageName = time().'.'.$Request->image->extension();  
            
                $Request->image->move(public_path('assets/user/profile_images'), $imageName);
  
       
                $update = [
                    'first_name' => $Request->first_name,
                    'last_name' => $Request->last_name,
                    'location' => $Request->location,
                    'state' => $Request->state,
                    'city' => $Request->city,
                    'image' => $imageName,
                ];

                User::where('id', Session::get('user_details')['id'])
                ->update($update);
       
        $userDetails = User::where('id', Session::get('user_details')['id'])->first(); 
        $user_details = json_decode(json_encode($userDetails),True);        
        Session::put('user_details',$user_details);
        Session::flash('message', 'Update successfully');
        return redirect('profile-setting');
    	
    }

    public function post_ads()
    {
        $userDetails = User::where('id', Session::get('user_details')['id'])->first();
        $allState = State::get();
        $categoryList = Categories::where('status', '1')->whereNull('deleted_at')->orderBy('id','DESC')->get(); 
       
    	return view($this->viewFolder.'home.post-ads',['categoryList'=>$categoryList,'userDetails'=>$userDetails,'allState'=>$allState]);
    }

    public function get_sub_category(Request $Request)
    {
        $category_id=$Request->category_id;
        $subcategoryList = SubCategory::where('status', '1')->where('category_id', $category_id)->whereNull('deleted_at')->orderBy('id','DESC')->get(); 
    	return view($this->viewFolder.'home.sub_category',['subcategoryList'=>$subcategoryList]);
    }


    public function get_form()
    {
        $brandList = Brand::where('status', '1')->whereNull('deleted_at')->orderBy('id','DESC')->get(); 
    	return view($this->viewFolder.'home.mobile_ads',['brandList'=>$brandList]);
    }
    
    public function submit_ads(Request $Request)
    {
        

        $categoryDetails = Categories::where('id', @$Request->category_id)->first(); 
        $subcategoryDetails = SubCategory::where('id', @$Request->sub_category_id)->first(); 
        $brandDetails = Brand::where('id', $Request->brand_id)->first(); 

       
    
        $imageName = time().'.'.$Request->photo[0]->extension();  
        $Request->photo[0]->move(public_path('assets/user/ads_image'), $imageName);

        if(isset($Request->photo[1]) && !empty($Request->photo[1])){
            $imageName1 = '1'.time().'.'.$Request->photo[1]->extension();  
            $Request->photo[1]->move(public_path('assets/user/ads_image'), $imageName1);
        }

        $insert = [
            'category_id' => $Request->category_id,
            'sub_category_id'=>$Request->sub_category_id,
            'ad_title'=>$Request->ad_title,
            'description'=>$Request->description,
            'price'=>$Request->price,
            'ad_type'=>$Request->ad_type,
            'customer_name'=>$Request->customer_name,
            'phone'=>$Request->phone,
            'state'=>$Request->state,
            'city'=>$Request->city,
            'category_name'=>$categoryDetails->category_name,
            'sub_category_name'=>$subcategoryDetails->sub_category_name,
            'customer_id'=>Session::get('user_details')['id'],
            'brand_id'=>@$Request->brand_id,
            'brand_name'=>@$brandDetails->brand_name,
            'ad_photo_1'=>$imageName,
            'ad_photo_2'=>@$imageName1,
        ];
        $adDetails=All_ads::create($insert);
        
        Session::flash('message', 'Ad added successfully');
        return redirect('my-ads');
    }


    public function my_ads()
    {
        $myadList = All_ads::where('customer_id',Session::get('user_details')['id'])->orderBy('id','DESC')->get(); 
    	return view($this->viewFolder.'home.my_ads',['myadList'=>$myadList]);
    }









    public function save_contact(Request $Request)
    {
		$insert = [
            'contact_name' => $Request->contact_name,
            'email' => $Request->email,
            'massage'=>$Request->massage,
            'subject'=>$Request->subject
		];
		if (ContactForm::create($insert)) {
            return '1';
           
        } else {
           return '2';
            
        }
	}
    public function save_app_request(Request $Request)
    {
		$insert = [
            'name' => $Request->name,
            'email' => $Request->email,
            'app_type'=>$Request->app_type,

		];
		if (AppRequest::create($insert)) {
            return '1';
           
        } else {
           return '2';
            
        }
	}
    public function save_subscriber(Request $Request)
    {
		$insert = [
           
            'email' => $Request->email,
            'app_type'=>'subscribe'
		];
		if (AppRequest::create($insert)) {
            return '1';
           
        } else {
           return '2';
            
        }
	}
    public function sendMail()
    {
        $mail = 'swapan@webgentechnologies.com';
        $mailData = array('name' => 'swapan kanrar', 'email' => 'swapan@webgentechnologies.com');
        Mail::to($mail)->send(new TransactionsMail($mailData));
    }

    public function sendEmail(){

       
        $to='surjyakanta1996@gmail.com';
        $otp_no='123';

        \Mail::raw('Hi, welcome user! Your otp is '.$otp_no, function ($message) use($to){
            $message->from('surjyakantajana1996@gmail.com','test');
            $message->to($to);
            $message->subject('Otp Verification');
        });

       


      
	}
    

}
