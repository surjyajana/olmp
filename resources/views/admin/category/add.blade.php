@extends('admin.layouts.master.master')


@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Category Management</h2>
        
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Add Category</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="post" id="meta_form" action="{{ url('admin/category/store') }}" enctype="multipart/form-data">
                        
                        @csrf
                        <div class="row" style="display: flex; justify-content: center">
                            <div class="form-group col-md-6">
                                <label>Categoty Name <span style="color:red">*</span></label>
                                <input type="text" class="form-control banner-input only_character" id="category_name" placeholder="Enter category name" name="category_name" value="{{ old('category_name') }}" data-validation-engine=" validate[required]" data-errormessage-value-missing="Category name is required" data-prompt-position="topLeft" maxlength="30">
                                @if($errors->has('category_name'))
                                <div class="error">{!! $errors->first('category_name') !!}</div>
                                @endif
                                
                            </div>
                        </div>

                        <div class="row" style="display: flex; justify-content: center">
                            <div class="form-group col-md-6">
                                <label>Color <span style="color:red">*</span></label>
                                <input type="color" class="form-control banner-input" id="color" placeholder="Select color" name="color" value="{{ old('color') }}" data-validation-engine=" validate[required]" data-errormessage-value-missing="Color is required" data-prompt-position="topLeft" maxlength="30">
                                @if($errors->has('color'))
                                <div class="error">{!! $errors->first('color') !!}</div>
                                @endif
                                
                            </div>
                        </div>

                        <div class="row" style="display: flex; justify-content: center">
                            <div class="form-group col-md-6">
                                <label>Icon<span style="color:red">*</span></label>
                                <input type="text" class="form-control banner-input" id="icon" placeholder="Enter icon name" name="icon" value="{{ old('icon') }}" data-validation-engine=" validate[required]" data-errormessage-value-missing="CatIconegory name is required" data-prompt-position="topLeft" maxlength="30">
                                @if($errors->has('icon'))
                                <div class="error">{!! $errors->first('icon') !!}</div>
                                @endif
                                
                            </div>
                        </div>

                        <div class="row" style="display: flex; justify-content: center">
                            <div class="form-group col-md-12" style="display: flex; justify-content: center">
                                <a class="btn btn-info-back float-right mr-1" href="{{url('admin/category/list')}}">Back to List</a>
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
