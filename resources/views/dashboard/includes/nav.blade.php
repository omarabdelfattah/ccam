<body class="hold-transition sidebar-mini layout-fixed">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ Route('dashboard') }}" class="nav-link">Home</a>
      </li>

    </ul>

   

    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto-navbav">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="{{ Route('logout') }}">
          {{__('names.logout')}}  <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-language"></i>
        </a>
        <div class="dropdown-menu dropdown-menu dropdown-menu-right  ">
          <a href="{{Route('settings.change_language',['lang' => 'ar'])}}" class="dropdown-item py-2 {{ session()->get('lang_code')   == 'ar' ?  'active' : ''}}">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('temp/images/ar.png') }}" alt="User Avatar" width="20" class=" mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">العربية</h3>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{Route('settings.change_language',['lang' => 'en'])}}" class="dropdown-item  py-2 {{ session()->get('lang_code')   == 'en' ?  'active' : '' }}">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('temp/images/en.png')  }}" alt="User Avatar" width="20" class=" mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">English</h3>
              </div>
            </div>
            <!-- Message End -->
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->