@extends('user.layouts.master.master')
@section('content')




        <!-- <div class="page-header"></div> -->


        <section class="login section-padding">
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-5 col-md-12 col-xs-12">
        <div class="login-form login-area">
        <h3>
        Register | Login Now
        </h3>
        <form  method="POST" action="{{url('generate-otp')}}" class="login-form">
        @csrf
            <!-- <div class="form-group">
              <label>Your Name <span>*</span></label>
                <div class="input-icon">
                <i class="lni-user"></i>
                    <input class="form-control input-md" placeholder="Enter Your Name" name="first_name" type="text" required>
                
                </div>
            </div> -->

                        <div class="form-group">
                                <label>Your Mobile no <span>*</span></label>
                                <div class="input-group">
                                  <div class="input-group-append">
                                    <select name="country_code" id="country_code" class="form-control" style="max-width:80px;">
                                      <option value="+91">+91</option>
                                    </select>
                                  </div>
                                  <input type="tel" placeholder="Enter Your Mobile no" name="phone" id="mobile_number" class="form-control" required/>
                                </div>
                              </div>

            <!-- <div class="form-group">
                <div class="input-icon">
                <i class="lni-phone-handset"></i>   
                    <input class="form-control input-md" placeholder="Enter Your Phone Number" name="phone" type="text" required>
                
                </div>
            </div> -->
        
        <!-- <div class="form-group mb-3">
        <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="checkedall">
        <label class="custom-control-label" for="checkedall">Keep me logged in</label>
        </div>
       
        </div> -->
        <div class="text-center">
        <button type ="submit" class="btn btn-common log-btn">Next</button>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        </section>



@endsection 
