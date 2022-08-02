@extends('admin.master')

@section('title')
{{ Auth::user()->surname }}{{__(' ')}}Set Role_S-ID_A-ID
@endsection

@section('body')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Add Staff - Create Staff Details</h1>
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
            <form method="POST" action="role_updated" class="mt-4">
                @csrf
                <div class="form-group row">
                    <div class="form-group col-12 col-md-5">
                        <legend for="createrole" class="text-success">Staff role</legend>
                        <select id="createrole" class="form-control" name="createrole" value="{{ old('createrole') }}">
                            <option value = "admin" selected> Admin</option>
                            <option value = "non_admin"> Non Admin</option>
                        </select>
                    </div>
                <div class="form-group row w-100">
                    <div class="form-group col-12 col-md-5">
                        <legend for="createadminid" class="text-success">Create Admin ID</legend>
                        <input type="text" class="form-control @error('createadminid') is-invalid @enderror" name="createadminid" placeholder="For admins only" autofocus>
                        @error('createadminid')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-12 col-md-5">
                        <legend for="createstaffid" class="text-success">Create Staff ID</legend>
                        <input type="text" class="form-control @error('createstaffid') is-invalid @enderror" name="createstaffid" placeholder="For all staff" required>
                        @error('createstaffid')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row w-100">
                    <div class="form-group col-12 col-md-5">
                        <legend for="staffrank" class="text-success">Staff Rank</legend>
                        <select class="form-control" name="staffrank" id="staffrank">
                            <option value="Junior_IT" selected>Assistant IT staff</option>
                            <option value="Junior_IT">Associate IT staff</option>
                            <option value="Junior_IT">Junior IT staff</option>
                            <option value="Senior_IT">Senior IT staff</option>
                            <option value="Chief IT Staff">Chief IT Staff</option>
                            <option value="Computer Engineer">Computer Engineer</option>
                            <option value="Database Engineer">Database Engineer</option>
                            <option value="Data Analyst">Data Analyst</option>
                            <option value="Maintenance Technician">Maintenance Technician</option>
                            <option value="Assistant Maintenance staff">Assistant Maintenance staff</option>
                            <option value="Associate Maintenance staff">Associate Maintenance staff</option>
                            <option value="Junior Maintenance staff">Junior Maintenance staff</option>
                            <option value="Senior Maintenance staff">Senior Maintenance staff</option>
                            <option value="Chief Maintenance staff">Chief Maintenance staff</option>
                            <option value="First Accountant">First Accountant</option>
                        </select>
                    </div>
                    <div class="form-group col-12 col-md-5">
                        <legend for="clevel" class="text-success">Clearance level</legend>
                        <select class="form-control" name="clevel" id="clevel">
                            <option value="1" selected>Level 1</option>
                            <option value="2">Level 2</option>
                            <option value="3">Level 3</option>
                            <option value="4">Level 4</option>
                            <option value="5">Level 5</option>
                        </select>
                    </div>
                </div>
                <div class="col-3 ml-auto float-right">
                    <button type="button" class="btn btn-lg btn-success mt-3 mt-md-5" data-toggle="modal" data-target="#modal-default">
                        {{ __('Save') }}
                    </button>
                </div>
                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Save Information?</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <a href="addstaff" type="button" class="btn btn-danger" role="button">Don't save</a>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
            </form>
        </div>
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
