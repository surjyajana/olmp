@extends('user.layouts.master.master')
@section('content')

@include('user/layouts/navigation/dashboardLeftmenu')




  
            <div class="col-sm-12 col-md-8 col-lg-9">
            <div class="row page-content">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
            <div class="inner-box">
            <div class="dashboard-box">
            <h2 class="dashbord-title">Post your Ad</h2>
            </div>
            <div class="dashboard-wrapper">

            <form action="{{url('submit-ads')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3 tg-inputwithicon">
            <label class="control-label">Categories</label>
            <div class="tg-select form-control">
            <select name="category_id" id="category" onchange="get_sub_category()" required>
            <option value="">Select Categories</option>
            @foreach ($categoryList as $cList)
                <option value="{{$cList->id}}">{{$cList->category_name}}</option>
            @endforeach
            </select>
            </div>
            </div>
            <div class="form-group mb-3 tg-inputwithicon">
            <label class="control-label">Sub Categories</label>
            <div class="tg-select form-control">
            <select name="sub_category_id" id="sub_category" required onchange="get_form()">
                
           
            </select>
            </div>
            </div>

           
            <div class="form-group mb-3">
            <label class="control-label">Ad title *</label>
            <input class="form-control input-md" name="ad_title" placeholder="Ad title" type="text" required>
            </div>

            <div class="form-group md-3">
            <label class="control-label">Description</label>
            <textarea class = "form-control" name="description" rows = "3" placeholder = "Description" required></textarea>
            </div>
            
            <div class="form-group mb-3">
            <label class="control-label">Price</label>
            <input class="form-control input-md" name="price" placeholder="Ad your Price" type="text" required>
            </div>

            <div class="form-group mb-3">
            <div class="tg-selectgroup">
            <span class="tg-radio">
            <input id="tg-sameuser" type="radio" name="ad_type" value="1" checked>
            <label for="tg-sameuser">Sell</label>
            </span>
            <span class="tg-radio">
            <input id="tg-someoneelse" type="radio" name="ad_type" value="2">
            <label for="tg-someoneelse">Rent</label>
            </span>
            </div>
            </div>

            <span id="extra_fields"></span>

            <div class="form-group mb-3">
            <label class="control-label">Upload up to 4 photos</label>
            <input class="form-control input-md" name="photo[]"  type="file" required>
            </div>
            <div class="form-group mb-3">
            <label class="control-label"></label>
            <input class="form-control input-md" name="photo[]"  type="file">
            </div>
            <!-- <div class="form-group mb-3">
            <label class="control-label"></label>
            <input class="form-control input-md" name="photo[]"  type="file">
            </div>
            <div class="form-group mb-3">
            <label class="control-label"></label>
            <input class="form-control input-md" name="photo[]"  type="file">
            </div> -->



            </div>
            </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
            <div class="inner-box">
            <div class="tg-contactdetail">
            <div class="dashboard-box">
            <h2 class="dashbord-title">Contact Detail</h2>
            </div>
            <div class="dashboard-wrapper">
            
            <div class="form-group mb-3">
            <label class="control-label">Name*</label>
            <input class="form-control input-md" name="customer_name" value="{{$userDetails->first_name}} {{$userDetails->last_name}}" type="text" required>
            </div>
            <!-- <div class="form-group mb-3">
            <label class="control-label">Last Name*</label>
            <input class="form-control input-md" name="last_name" type="text" value="{{$userDetails->last_name}}" required>
            </div> -->
            <div class="form-group mb-3">
            <label class="control-label">Phone*</label>
            <input class="form-control input-md" name="phone" type="text" value="{{$userDetails->country_code}}{{$userDetails->mobile}}" readonly>
            </div>
            
        
            <div class="form-group mb-3 tg-inputwithicon">
            <label class="control-label">State</label>
            <div class="tg-select form-control">
            <select name="state" required>
            <option value="">--Select State--</option>
            @foreach ($allState as $stateVal)
                <option value="{{$stateVal->name}}" {{ ( $stateVal->name == $userDetails->state) ? 'selected' : '' }}>{{$stateVal->name}}</option>
            @endforeach    
            </select>
            </div>
            </div>
            <div class="form-group mb-3">
            <label class="control-label">Enter City/Vill</label>
            <input class="form-control input-md" name="city" type="text" value="{{$userDetails->city}}">
            </div>

            <div class="tg-checkbox">
            <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="tg-agreetermsandrules" required>
            <label class="custom-control-label" for="tg-agreetermsandrules">I agree to all <a href="javascript:void(0);">Terms of Use &amp; Posting Rules</a></label>
            </div>
            </div>
            <button class="btn btn-common" type="submit">Post Ad</button>
            </form>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
       



@endsection
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    get_sub_category();
});

function get_sub_category()
    {
        var category_id=$("#category").val();
        $.ajax({
            url: "<?php echo url('get-sub-category'); ?>",
            type: "get",
            data: {
                category_id:category_id
            } ,
           
            success: function (response) 
            {
                $("#sub_category").html(response);
            },
            error: function(jqXHR, textStatus, errorThrown) 
            {
                console.log(textStatus, errorThrown);
            }
        });
    }
</script> 

<script> 
function get_form()
    {
        var sub_category=$("#sub_category").val();
        if(sub_category==2){
            $.ajax({
                url: "<?php echo url('get-form'); ?>",
                type: "get",
                data: {
                    sub_category:sub_category
                } ,
            
                success: function (response) 
                {
                    $("#extra_fields").html(response);
                },
                error: function(jqXHR, textStatus, errorThrown) 
                {
                    console.log(textStatus, errorThrown);
                }
            });
        }else{
            $("#extra_fields").html('');
        }
    }
</script> 