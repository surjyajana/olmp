@extends('user.layouts.master.master')
@section('content')

@include('user/layouts/navigation/dashboardLeftmenu')




        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
        <div class="inner-box">
        <div class="tg-contactdetail">
        <div class="dashboard-box">
        <h2 class="dashbord-title">Profile Detail</h2>
        </div>
        <div class="dashboard-wrapper">
        <form method="POST" action="{{url('update-profile')}}" enctype="multipart/form-data" class="login-form">
        @csrf
        <div class="form-group mb-3">
        <label class="control-label">First Name*</label>
        <input class="form-control input-md" name="first_name" value="{{$userDetails->first_name}}" type="text" required>
        </div>
        <div class="form-group mb-3">
        <label class="control-label">Last Name*</label>
        <input class="form-control input-md" name="last_name" type="text" value="{{$userDetails->last_name}}" required>
        </div>
        <div class="form-group mb-3">
        <label class="control-label">Phone*</label>
        <input class="form-control input-md"  type="text" value="{{$userDetails->country_code}}{{$userDetails->mobile}}" readonly>
        </div>
        <div class="form-group mb-3">
        <label class="control-label">Enter Address*</label>
        <input class="form-control input-md" name="location" type="text" value="{{$userDetails->location}}" required>
        </div>
       
        <!-- <div class="form-group mb-3 tg-inputwithicon">
        <label class="control-label">Country</label>
        <div class="tg-select form-control">
        <select>
        <option value="none">Select Country</option>
        <option value="none">New York</option>
        <option value="none">California</option>
        <option value="none">Washington</option>
        <option value="none">Birmingham</option>
        <option value="none">Chicago</option>
        <option value="none">Phoenix</option>
        </select>
        </div>
        </div> -->
        <div class="form-group mb-3 tg-inputwithicon">
        <label class="control-label">State*</label>
        <div class="tg-select form-control">
        <select name="state" required>
        <option value="">Select State</option>
        @foreach ($allState as $stateVal)
            <option value="{{$stateVal->name}}" {{ ( $stateVal->name == $userDetails->state) ? 'selected' : '' }}>{{$stateVal->name}}</option>
        @endforeach    
        </select>
        </div>
        </div>
        <div class="form-group mb-3 tg-inputwithicon">
        <label class="control-label">City/Vill*</label>
       
        <input class="form-control input-md" name="city" type="text" value="{{$userDetails->city}}" required>
        
        </div>

        <label class="tg-fileuploadlabel" for="tg-photogallery">
            <span>Drop files anywhere to upload profile image</span>
            <span>Or</span>
            <span class="btn btn-common">Select Files</span>
            <span>Maximum upload file size: 500 KB</span>
            <input id="tg-photogallery" class="tg-fileinput" type="file" name="image" >
        </label>


        <div class="tg-checkbox">
        <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="tg-agreetermsandrules">
        <label class="custom-control-label" for="tg-agreetermsandrules">I agree to all <a href="javascript:void(0);">Terms of Use &amp; Posting Rules</a></label>
        </div>
        </div>
        <button class="btn btn-common" type="submit">Profile Update</button>
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
