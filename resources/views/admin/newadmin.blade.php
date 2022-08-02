@extends('admin.master')

@section('title')
{{ Auth::user()->surname }}{{__(' ')}}New Admin
@endsection

@section('body')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Add Staff - Input UID</h1>
            </div>

            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">General Form</li>
              </ol>
            </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @if(session('invalid'))
        <div class="col-10 bg-danger p-3 mt-3 text-white rounded">
            {{ session('invalid') }}
        </div>
    @endif
        <form method="POST" action="uidconfirmed" class="mt-5">
            @csrf

            <div class="form-group row">
                <div class="col-12 col-md-3">
                    <label for="confirmuid">Confirm UID of new Admin</label>
                    <input type="text" class="form-control @error('confirmuid') is-invalid @enderror" name="confirmuid" required autofocus>
                    @error('confirmuid')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12 col-md-3">
                    <button type="submit" class="btn btn-lg btn-success mt-4">Confirm UID</button>
                </div>
            </div>
        </form>
    <!-- /.content -->
  </div>
    </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
@endsection
