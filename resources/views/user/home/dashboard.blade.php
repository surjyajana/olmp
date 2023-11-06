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
    <h2 class="dashbord-title">Dashboard</h2>
    </div>
    <div class="dashboard-wrapper">
    <div class="dashboard-sections">
    <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <div class="dashboardbox">
    <div class="icon"><i class="lni-write"></i></div>
    <div class="contentbox">
    <h2><a href="#">Total Ad Posted</a></h2>
    <h3>0 Add Posted</h3>
    </div>
    </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <div class="dashboardbox">
    <div class="icon"><i class="lni-add-files"></i></div>
    <div class="contentbox">
    <h2><a href="#">Featured Ads</a></h2>
    <h3>0 Add Posted</h3>
    </div>
    </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <div class="dashboardbox">
    <div class="icon"><i class="lni-support"></i></div>
    <div class="contentbox">
    <h2><a href="#">Offers / Messages</a></h2>
    <h3>0 Messages</h3>
    </div>
    </div>
    </div>
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
