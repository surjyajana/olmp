<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class BrandController extends Controller
{
    private $viewFolder = 'admin/brand/';
    private $routePrefix = 'admin/brand';

    public function index()
    {
    	return view($this->viewFolder.'index');
    }

    public function getDataAjax(Request $request)
    {
        //echo DB::connection()->getDatabaseName(); die;

        $draw = $request->get('draw');
        //dd($draw);
        $start = $request->get("start");
        $rowperpage = $request->get("length");

        $columnIndex_arr = $request->get('order');
        //dd($columnIndex_arr);
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column'];
        $columnName = $columnName_arr[$columnIndex]['data'];
        $columnSortOrder = $order_arr[0]['dir'];
        //$searchValue = $search_arr['value'];
        $searchValue = $request->searchSearch;


        $recordsQuery=Brand::where('deleted_at',NULL);

        if($request->searchFdate!="" && $request->searchTdate!="")
        {
            $start_date=date("Y-m-d", strtotime($request->searchFdate));
            $end_date=date("Y-m-d", strtotime($request->searchTdate));
            $recordsQuery = $recordsQuery
            ->whereDate('created_at', '>=', $start_date)
            ->whereDate('created_at', '<=', $end_date);
        }
   
        $totalRecords = $recordsQuery->count();
        $records =$recordsQuery->skip($start)
        ->take($rowperpage)
        ->get();
        
        $totalRecordswithFilter = $totalRecords;

        $data_arr = array();
        $count=0;
        foreach($records as $k=> $record)
        {

            $sl=$k+1;
            $category_name=$record->brand_name;
            $brand_name=$record->brand_name;
            $created_at=date("d-M-Y", strtotime($record->created_at));

            $status_check='';
            if($record->status=="1")
            {
                $status_check='checked';
            }
            $status='<label class="switch">
                <input type="checkbox" value="'.$record->id.'" onchange="status_change(this.value)" '.$status_check.'>
          <span class="slider round"></span>
                </label>';
            $m="'Are you sure you want to delete?'";
            $action='<a href="'.url($this->routePrefix.'/edit/'.$record->id).'" class="waves-effect btn btn-warning" style="font-size: 15px;"><i class="fa fa-pencil-square-o"></i></a>
                                            
            <a href="'.url($this->routePrefix.'/delete/'.$record->id).'" style="font-size: 15px;" class="waves-effect btn btn-danger" onclick="return confirm('.$m.')"><i class="fa fa-trash"></i></a>';


            $data_arr[] = array(
            'sl'=>$sl,
            "category_name" =>$category_name,
            "brand_name" =>$brand_name,
            "status" =>$status,
            "created_at" =>$created_at,
            "action" =>$action,
            );

        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
        );
        //dd($response);
        echo json_encode($response);
    }

    public function add()
    {
        $category_data        = Categories::where('status',1)->where('deleted_at',NULL)->get();
    	return view($this->viewFolder.'add',compact('category_data'));
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
			'category_id' => 'required',
			'brand_name' => 'required',
		]);

        $input=$request->all();
       
		$count = DB::table('tb_brands')->where('brand_name', '=', $input['brand_name'])->count();
		
		if ($count == 0) 
		{
			$brand = new Brand;
            $brand->category_id = $input['category_id'];
            $brand->brand_name = $input['brand_name'];      
            $brand->save();
			return redirect($this->routePrefix.'/list')->with('success', 'Successfully Submitted');
		} 
		else 
		{
			$roleRecord = DB::table('tb_brands')->where('brand_name', '=', $input['brand_name'])->whereNull('deleted_at')->first();
			if (!empty($roleRecord)) 
			{
				return redirect($this->routePrefix.'/add')->with('error', 'Duplicate Data');
			} 
			else 
			{
                $brand = new Brand;
                $brand->category_id = $input['category_id'];
                $brand->brand_name = $input['brand_name'];      
                $brand->save();
				return redirect($this->routePrefix.'/list')->with('success', 'Successfully Submitted');
			}
		}
    }

    public function status(Request $request)
    {
        
        $input=$request->all();
		$brand = Brand::where('id', '=', $input['id'])->first();
		
        if($brand)
        {
            if ($brand->status == '0') 
            {
                $brand->status = '1';
            } 
            else 
            {
                $brand->status = '0';
            }
            $brand->save();
            return true;
        }
        else
        {
            return false;
        }
    }

    public function edit($id)
    {
		$brand             = Brand::where('id', '=', $id)->first();
        $category_data     = Categories::where('status',1)->where('deleted_at',NULL)->get();
    	return view($this->viewFolder.'edit',compact('brand','category_data'));
    }

    public function delete($id)
    {
       
		$brand = Brand::where('id', '=', $id)->first();
        $brand->deleted_at = date('Y-m-d');
        $brand->save();
    	return redirect()->back()->with('success', 'Deleted updated successfully');
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
			'category_id' => 'required',
			'brand_name' => 'required',
		]);
        $input=$request->all();
    
        $brand = Brand::where('id', $input['edit_id'])->first();
        $brand->category_id = $input['category_id'];
        $brand->brand_name = $input['brand_name'];      
        $brand->save();
        
        return redirect($this->routePrefix.'/list')->with('success', 'Updated successfully.');
    }
   
}
