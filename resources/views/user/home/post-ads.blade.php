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

            <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group mb-3 tg-inputwithicon">
            <label class="control-label">Categories</label>
            <div class="tg-select form-control">
            <select name="category" id="category" onchange="get_sub_category()" required>
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
            <select name="sub_category" id="sub_category" required>
                
           
            </select>
            </div>
            </div>

            <div id="extra_fields"></div>

           

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
<script> 
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