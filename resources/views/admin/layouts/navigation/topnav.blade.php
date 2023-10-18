<nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header d-flex align-items-center">
        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        <h3 style="color: #fff; margin:0 0 0 20px">Welcome 
            {{ Session::get('admin_details')['first_name'] }} @if(Session::get('admin_details')['last_name'])
            {{ ' '.Session::get('admin_details')['last_name'] }}
            @endif
        </h3>
       
    </div>

    
    <ul class="nav navbar-top-links navbar-right">
       
        <li>
            <a href="{{ url('admin/logout') }}" class="dropdown-item ai-icon logout-btn">
                <i class="fa fa-sign-out" aria-hidden="true"></i>Logout
            </a>
        </li>
        <li>
            <a class="right-sidebar-toggle">
                <i class="fa fa-tasks"></i>
            </a>
        </li>
    </ul>

</nav>