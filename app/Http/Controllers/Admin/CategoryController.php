<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class CategoryController extends Controller
{
    private $viewFolder = 'admin/category/';
    private $routePrefix = 'admin/category';

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


        $recordsQuery=Categories::where('deleted_at',NULL);

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
            $name=$record->category_name;
            $color=$record->color;
            $icon=$record->icon;
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
            "name" =>$name,
            "color" =>$color,
            "icon" =>$icon,
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
    	return view($this->viewFolder.'add');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
			'category_name' => 'required',
			'color' => 'required',
			'icon' => 'required',
		]);

        $input=$request->all();
       
		$count = DB::table('tbl_categoriess')->where('category_name', '=', $input['category_name'])->count();
		
		if ($count == 0) 
		{
			$categorie = new Categories;
            $categorie->category_name = $input['category_name'];
            $categorie->color = $input['color'];
            $categorie->icon = $input['icon'];        
            $categorie->save();
			return redirect($this->routePrefix.'/list')->with('success', 'Successfully Submitted');
		} 
		else 
		{
			$roleRecord = DB::table('tbl_categoriess')->where('category_name', '=', $input['category_name'])->whereNull('deleted_at')->first();
			if (!empty($roleRecord)) 
			{
				return redirect($this->routePrefix.'/add')->with('error', 'Duplicate Data');
			} 
			else 
			{
                $categorie = new Categories;
                $categorie->category_name = $input['category_name'];
                $categorie->color = $input['color'];
                $categorie->icon = $input['icon'];        
                $categorie->save();
				return redirect($this->routePrefix.'/list')->with('success', 'Successfully Submitted');
			}
		}
    }

    public function status(Request $request)
    {
        
        $input=$request->all();
		$category = Categories::where('id', '=', $input['id'])->first();
		
        if($category)
        {
            if ($category->status == '0') 
            {
                $category->status = '1';
            } 
            else 
            {
                $category->status = '0';
            }
            $category->save();
            return true;
        }
        else
        {
            return false;
        }
    }

    public function edit($id)
    {
		$category             = Categories::where('id', '=', $id)->first();

    	return view($this->viewFolder.'edit',compact('category'));
    }

    public function delete($id)
    {
       
		$category = Categories::where('id', '=', $id)->first();
        $category->deleted_at = date('Y-m-d');
        $category->save();
    	return redirect()->back()->with('success', 'Deleted updated successfully');
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
			'category_name' => 'required',
			'color' => 'required',
			'icon' => 'required',
		]);
        $input=$request->all();

      

        $categorie        = Categories::where('id', $input['edit_id'])->first();
        $categorie->category_name = $input['category_name'];
        $categorie->color = $input['color'];
        $categorie->icon = $input['icon'];

        
        return redirect($this->routePrefix.'/list')->with('success', 'Updated successfully.');
    }
   
}
