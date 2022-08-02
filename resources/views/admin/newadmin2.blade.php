@extends('admin.master')

@section('title')
{{ Auth::user()->surname }}{{__(' ')}}Confirm details
@endsection

@section('body')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Add Staff - Confirm User Details</h1>
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
        <div class="row mt-4">

            <div class="col-2 py-2 text-right">
               UID:
            </div>
            <div class="col-4 py-2 rounded" style="color:black; background-color:khaki;">
                {{ Session()->get('uniqueid') }}
            </div>
            <div class="col-2 py-2 text-right">
                Email:
             </div>
             <div class="col-4 py-2 rounded" style="color:black; background-color:khaki;">
                {{ Session()->get('email')}}
             </div>
        </div>
        <div class="row mt-4">
            <div class="col-2 py-2 text-right">
               Name:
            </div>
            <div class="col-4 py-2 rounded" style="color:black; background-color:khaki;">
                {{ Session()->get('title')}} {{__(' ')}}{{__(' ')}} {{ Session()->get('surname')}} {{__(' ')}}{{__(' ')}} {{ Session()->get('firstname')}} {{__(' ')}}{{__(' ')}} {{ Session()->get('othername')}}
            </div>
            <div class="col-2 py-2 text-right">
                Sex:
             </div>
             <div class="col-4 py-2 rounded" style="color:black; background-color:khaki;">
                {{ Session()->get('sex')}}
             </div>
        </div>
        <div class="row mt-4">
            <div class="col-2 py-2 text-right">
               Mobile number:
            </div>
            <div class="col-4 py-2 rounded" style="color:black; background-color:khaki;">
                {{ Session()->get('phonenumber')}}
            </div>
            <div class="col-2 py-2 text-right">
                State of Origin:
             </div>
             <div class="col-4 py-2 rounded" style="color:black; background-color:khaki;">
                {{ Session()->get('soo')}}
             </div>
        </div>
        <div class="row mt-4">
            <div class="col-2 py-2 text-right">
               Local Government:
            </div>
            <div class="col-4 py-2 rounded" style="color:black; background-color:khaki;">
                {{ Session()->get('locgov')}}
            </div>
            <div class="col-2 py-2 text-right">
                State of Residence:
            </div>
            <div class="col-4 py-2 rounded" style="color:black; background-color:khaki;">
                {{ Session()->get('sor')}}
            </div>
        </div>
        <div class="row mt-4">

            <div class="col-2 py-2 text-right">
                Loc. govt of Residence
             </div>
             <div class="col-4 py-2 rounded" style="color:black; background-color:khaki;">
                {{ Session()->get('lor')}}
             </div>
             <div class="col-2 py-2 text-right">
                Address:
            </div>
            <div class="col-4 py-2 rounded" style="color:black; background-color:khaki;">
                {{ Session()->get('address')}}
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-2 py-2 text-right">
                Date of Birth:
            </div>
            <div class="col-4 py-2 rounded" style="color:black; background-color:khaki;">
                {{ Session()->get('dob')}}
            </div>
        </div>
        <div class="row mt-n4">
            <form action="addstaff" method="GET" class="offset-8">
                @csrf
                <button type="submit" class="btn btn-md btn-default mt-4 mx-1">
                    Cancel
                </button>
            </form>
            {{-- <form action="" method="POST">
                @csrf
                <button type="submit" class="btn btn-md btn-danger mt-4 mx-1">
                    Edit
                </button>
            </form> --}}
            <form action="detailsconfirmed" method="POST">
                @csrf
                <button type="submit" class="btn btn-md btn-success mt-4 mx-1">
                    Confirm
                </button>
            </form>
        </div>

    <!-- /.content -->
  </div>
    </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
@endsection
