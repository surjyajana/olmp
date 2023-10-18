@extends('user.layouts.master.master')
@section('content')




        <!-- <div class="page-header"></div> -->


        <section class="login section-padding">
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-5 col-md-12 col-xs-12">
        <div class="login-form login-area">
        <h3>
        Enter Your 4 Digit OTP ({{$userDetails->otp}})
        </h3>
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
        <form method="POST" action="{{url('check-otp')}}" class="login-form">
        @csrf
            <input type="hidden" name="user_id" value="{{$userDetails->id}}">
            <input type="hidden" name="mobile" value="{{$userDetails->mobile}}">
           
            <div class="form-group">
                <div class="input-icon">
                  
                    <input class="form-control input-md" placeholder="Enter Your OTP" name="otp" type="text" required>
                
                </div>
            </div>
        
       
        <div class="text-center">
        <button type ="submit" class="btn btn-common log-btn">Submit</button>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        </section>



@endsection 
