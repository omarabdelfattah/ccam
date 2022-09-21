@include('dashboard.includes.header')
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a>{{ env('APP_NAME')  }} Dashboard</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">{{__('auth.signin')}}</p>

      <form action="{{ Route('login_check') }}" method="POST">
        @csrf
        @error('login_failed')
                <div class="form-group row">
                    <div class="col-sm-12">
                      <h6 class="text-danger text-center">
                      {{ trans($message) }}
                      </h6>
                    </div>
                  </div>
                @enderror
        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <input type="username"  name="username" class="form-control" placeholder="{{__('auth.usernameField')}}">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <input type="password"  name="password" class="form-control" placeholder="{{__('auth.passwordField')}}">
        </div>
        <div class="row">
          <div class="col-6 mx-auto">
            <button type="submit" class="btn btn-primary btn-block btn-flat">{{__('auth.signin_btn')}}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('dashboard/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<!-- <script src="{{asset('dashboard/plugins/jquery-ui/jquery-ui.min.js') }}"></script> -->
<!-- Bootstrap 4 -->
<script src="{{asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>