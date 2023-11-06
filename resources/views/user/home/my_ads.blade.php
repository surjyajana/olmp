@extends('user.layouts.master.master')
@section('content')

@include('user/layouts/navigation/dashboardLeftmenu')



        <div class="col-sm-12 col-md-8 col-lg-9">
        <div class="page-content">
        <div class="inner-box">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
        <div class="dashboard-box">
        <h2 class="dashbord-title">My Ads</h2>
        </div>
        <div class="dashboard-wrapper">
        <!-- <nav class="nav-table">
        <ul>
        <li class="active"><a href="#">All Ads (42)</a></li>
        <li><a href="#">Published (88)</a></li>
        <li><a href="#">Featured (12)</a></li>
        <li><a href="#">Sold (02)</a></li>
        <li><a href="#">Active (42)</a></li>
        <li><a href="#">Expired (01)</a></li>
        </ul>
        </nav> -->
        <table class="table table-responsive dashboardtable tablemyads">
        <thead>
        <tr>
        <th>
        <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="checkedall">
        <label class="custom-control-label" for="checkedall"></label>
        </div>
        </th>
        <th>Photo</th>
        <th>Title</th>
        <th>Category</th>
        <th>Ad Status</th>
        <th>Price(INR)</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($myadList as $aList)
        <tr data-category="active">
        <td>
        <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="adone">
        <label class="custom-control-label" for="adone"></label>
        </div>
        </td>
        <td class="photo"><img class="img-fluid" src="{{ URL::asset('assets/user/ads_image/'.$aList->ad_photo_1) }}" alt=""></td>
        <td data-title="Title">
        <h3>{{$aList->ad_title}}</h3>
        <!-- <span>Ad ID: ng3D5hAMHPajQrM</span> -->
        </td>
        <td data-title="Category"><span class="adcategories">{{$aList->category_name}},{{$aList->sub_category_name}}</span></td>
        <td data-title="Ad Status"><span class="adstatus adstatusactive">
            @if($aList->admin_status =='1')    
                Approved
            @elseif($aList->admin_status =='2')
                Rejected
            @else
                Pending    
            @endif
        </span></td>
        <td data-title="Price">
        <h3>{{$aList->price}}</h3>
        </td>
        <td data-title="Action">
        <div class="btns-actions">
        <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
        <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
        <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
        </div>
        </td>
        </tr>
        @endforeach    
       
        </tbody>
        </table>
        </div>
        </div>
        </div>
        </div>


        </div>
        </div>
        </div>



@endsection 
