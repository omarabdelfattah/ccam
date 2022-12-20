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
    
    </ul>
  </nav>
  <!-- /.navbar -->