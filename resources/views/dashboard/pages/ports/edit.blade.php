@extends('dashboard.layout.default')

@section('page_title',$page_title)

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{Route('dashboard')}}">{{ __("pages.home") }}</a></li>
            <li class="breadcrumb-item"><a>{{ __("names.edit") }} {{__('pages.profile')}}</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="card card-info">
        <div class="card-header">
        <h3 class="card-title">{{$page_title}}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{ Route('ports.update') }}">
        @csrf
        @method('patch')        
        <div class="card-body">

            <div class="form-group">
                <label for="url">{{__('names.urlField')}}</label>
                <input type="text" name="url" class="form-control" id="url"  value="{{ $port? $port->url : '' }}">
            </div>

      

            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">{{__('pages.submit')}}</button>
        </div>
        </form>
    </div>
    <!-- /.card -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('js_scripts')
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2({
            theme: 'bootstrap4'
        });
    })
</script>
@endsection