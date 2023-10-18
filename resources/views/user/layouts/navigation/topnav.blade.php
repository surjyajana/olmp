<header id="header-wrap">

  <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
  <div class="container">
        <div class="theme-header clearfix">

        <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <span class="lni-menu"></span>
        <span class="lni-menu"></span>
        <span class="lni-menu"></span>
        </button>
        <a href="{{ url('') }}" class="navbar-brand"><img src="{{ URL::asset('assets/user') }}/img/logo.png" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
        <ul class="navbar-nav mr-auto w-100 justify-content-left">
        <li class="nav-item active">
        <a class="nav-link" href="{{ url('') }}">
        Home
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="category.html">
        Categories
        </a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Listings <i class="lni-chevron-down"></i>
        </a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="adlistinggrid.html">Ad Grid</a></li>
        <li><a class="dropdown-item" href="adlistinglist.html">Ad Listing</a></li>
        <li><a class="dropdown-item" href="ads-details.html">Listing Detail</a></li>
        </ul>
        </li>
       
        
        <li class="nav-item">
        <a class="nav-link" href="contact.html">
        Contact
        </a>
        </li>
        </ul>
        <div class="header-top-right float-right">
        @if (session('user_details'))
          <a href="{{ url('user-dashboard') }}" class="header-top-button"><i class="lni-dashboard"></i>Dashboard</a>
          
        @else
          <a href="{{ url('login') }}" class="header-top-button"><i class="lni-lock"></i> Log In</a> 
        @endif   
        <!-- |
        <a href="register.html" class="header-top-button"><i class="lni-pencil"></i> Register</a> -->
        </div>
        <div class="post-btn">
        <a class="btn btn-common" href="{{ url('post-ads') }}"><i class="lni-pencil-alt"></i> Post an Ad</a>
        </div>
        </div>
        </div>
        </div>
        <div class="mobile-menu" data-logo="{{ URL::asset('assets/user') }}/img/logo-mobile.png"></div>
        </nav>


    <!-- </div> -->

</header>
<div class="page-header"></div>