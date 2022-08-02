@extends('admin.master')

@section('title')
{{ Auth::user()->surname }}{{__(' ')}}Staff account created
@endsection

@section('body')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="addstaff" class="btn btn-sm btn-primary" role="button">
                    {{ __('Add new Staff') }}
                </a>
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
        @if(session('infosuccess'))
        <div class="col-10 text-success p-3 mt-3">
            <h1>{{ session('infosuccess') }}</h1>
        </div>
    @endif
    <a href="#" class="w-100" style="color:black; text-decoration:underline;">Email staff login details to new staff?</a>

    <!-- /.content -->
  </div>
    </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('scripts')
<script>
    function toggleInput(){
        var mySelect = document.getElementById('luggageweight');
        var displaySetting = mySelect.style.display;
        if(displaySetting == 'block'){
            mySelect.style.display = 'none';

        }else{
            mySelect.style.display = 'block';
            }
        }
</script>
@endsection
