@extends('admin.layouts.master.master')


@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Sub Category Management</h2>
        
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Add Sub Category</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="post" id="meta_form" action="{{ url('admin/sub-category/store') }}" enctype="multipart/form-data">
                        
                        @csrf
                        <div class="row" style="display: flex; justify-content: center">
                            <div class="form-group col-md-6 custom-option">
                                <label>Category <span style="color:red">*</span></label>
                                <select name="category_id" id="category_id" class="form-control banner-input" data-validation-engine="validate[required]" data-errormessage-value-missing="category name is required" data-prompt-position="bottomLeft">
                                    <option selected disabled>Select category</option>
                                    @foreach($category_data as $key => $category)
                                    <option value="<?=$category->id?>"><?=$category->category_name?></option>
                                    @endforeach
                                </select>
                                @if($errors->has('category_id'))
                                <div class="error">{!! $errors->first('category_id') !!}</div>
                                @endif
                               
                            </div>
                        </div>

                        <div class="row" style="display: flex; justify-content: center">
                            <div class="form-group col-md-6">
                                <label>Sub Categoty Name <span style="color:red">*</span></label>
                                <input type="text" class="form-control banner-input only_character" id="category_name" placeholder="Enter sub category name" name="sub_category_name" value="{{ old('sub_category_name') }}" data-validation-engine=" validate[required]" data-errormessage-value-missing="Sub category name is required" data-prompt-position="topLeft" maxlength="30">
                                @if($errors->has('sub_category_name'))
                                <div class="error">{!! $errors->first('sub_category_name') !!}</div>
                                @endif
                                
                            </div>
                        </div>

                        

                        <div class="row" style="display: flex; justify-content: center">
                            <div class="form-group col-md-12" style="display: flex; justify-content: center">
                                <a class="btn btn-info-back float-right mr-1" href="{{url('admin/sub-category/list')}}">Back to List</a>
                                <button class="btn btn-info btn-banner float-right" type="submit"></i>Save</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() 
    {
        $("#meta_form").validationEngine();
    })
    
</script>
@endsection
