@extends('admin.layouts.master.master')


@section('content')

<div class="row">
    <div class="col-lg-3">
        <div class="ibox float-e-margins border ">
            <div class="ibox-title dash-title dashboard-ibox-title">
                <span class="textsize">Total User</span>
            </div>
            <div class="ibox-content inboxsize">
                <h2 class="dashboard_count">{{ $total_user }}</h2>
                
                <div class="top-1">
                    <a href="{{ url('admin/user/list')}}" class="btn btn-primary mr-right" type="submit">View</a>                                                        

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="ibox float-e-margins border ">
            <div class="ibox-title dash-title dashboard-ibox-title">
                <span class="textsize">Total User</span>
            </div>
            <div class="ibox-content inboxsize">
                <h2 class="dashboard_count">{{ $total_user }}</h2>
                
                <div class="top-1">
                    <a href="{{ url('admin/user/list')}}" class="btn btn-primary mr-right" type="submit">View</a>                                                        

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="ibox float-e-margins border ">
            <div class="ibox-title dash-title dashboard-ibox-title">
                <span class="textsize">Total User</span>
            </div>
            <div class="ibox-content inboxsize">
                <h2 class="dashboard_count">{{ $total_user }}</h2>
                
                <div class="top-1">
                    <a href="{{ url('admin/user/list')}}" class="btn btn-primary mr-right" type="submit">View</a>                                                        

                </div>
            </div>
        </div>
    </div>
    
</div>





@endsection