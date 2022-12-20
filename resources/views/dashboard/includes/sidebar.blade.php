
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ Route('dashboard') }}" class="brand-link">
      <img src="{{asset('temp/logo.png')}}" alt="{{env('APP_NAME')}}" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{ env('APP_NAME') != "Laravel" ?  env('APP_NAME')  : "Dashboard" }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{ __("messages.hello" , ['name' => auth()->user()->name]) }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

      
          <li class="nav-item">
            <a href="{{ Route('account.edit') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                {{__('pages.profile')}}
              </p>
            </a>
          </li>

             
          <li class="nav-item">
            <a href="{{ Route('ports.edit') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                {{__('pages.ports')}}
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->