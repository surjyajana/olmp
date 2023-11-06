
    <div id="content" class="section-padding">
    <div class="container">
    <div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
    <aside>
    <div class="sidebar-box">
    <div class="user">
    <figure>
    @if(Session::get('user_details')['image'])  
    <a><img src="{{ URL::asset('assets/user/profile_images/'.Session::get('user_details')['image']) }}" style="height:80px; width:80px;" alt=""></a>
    @else
    <a><img src="{{ URL::asset('assets/user') }}/profile_images/default_profile.png" alt=""></a>
    @endif
    </figure>
    <div class="usercontent">
    <h3>{{Session::get('user_details')['first_name']}} {{Session::get('user_details')['last_name']}}</h3>
    <h4>{{Session::get('user_details')['mobile']}}</h4>
    </div>
    </div>
    <nav class="navdashboard">
    <ul>
    <li>
    <a class="{{ request()->is('user-dashboard') ? 'active' : '' }}" href="{{ url('user-dashboard') }}">
    <i class="lni-dashboard"></i>
    <span>Dashboard</span>
    </a>
    </li>
    <li>
    <a class="{{ request()->is('profile-setting') ? 'active' : '' }}" href="{{ url('profile-setting') }}">
    <i class="lni-cog"></i>
    <span>Profile Settings</span>
    </a>
    </li>
    <li>
    <a class="{{ request()->is('my-ads') ? 'active' : '' }}" href="{{ url('my-ads') }}">
    <i class="lni-layers"></i>
    <span>My Ads</span>
    </a>
    </li>
    <!-- <li>
    <a href="offermessages.html">
    <i class="lni-envelope"></i>
    <span>Offers/Messages</span>
    </a>
    </li>
    <li>
    <a href="payments.html">
    <i class="lni-wallet"></i>
    <span>Payments</span>
    </a>
    </li>
    <li>
    <a href="account-favourite-ads.html">
    <i class="lni-heart"></i>
    <span>My Favourites</span>
    </a>
    </li>
    <li>
    <a href="privacy-setting.html">
    <i class="lni-star"></i>
    <span>Privacy Settings</span>
    </a>
    </li> -->
    <li>
    <a href="{{ url('user-logout') }}">
    <i class="lni-enter"></i>
    <span>Logout</span>
    </a>
    </li>
    </ul>
    </nav>
    </div>
    <div class="widget">    
    <h4 class="widget-title">Advertisement</h4>
    <div class="add-box">
        <!-- <img class="img-fluid" src="assets/img/img1.jpg" alt=""> -->
    </div>
    </div>
    </aside>
</div>
    