@extends('admin.master')

@section('title')
{{ Auth::user()->surname }}{{__(' ')}}Home
@endsection

@section('body')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <!--row-->
        <div class="row">
        <!--HALF-->
        <div class="col-md-4">
        <!-- USers card -->
        <div class="card p-0 mx-1">
            <div class="card-header bg-gradient-success border-0">
              <h3 class="card-title">
                <i class="fas fa-map-marker-alt mr-1"></i>
                Users
              </h3>
              <!-- card tools -->
              <div class="card-tools">
                <button type="button"
                        class="btn btn-success btn-sm"
                        data-card-widget="collapse"
                        data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <div class="card-body p-0 px-2 pt-2 p-0 px-2 pt-2">
                <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12 col-12">
              <!-- small box -->
              <div class="small-box text-success border border-success">
                <div class="inner">
                  <h1 class="display-4">{{ session()->get('userscount', 'N/A') }}</h1>

                  <p><h6>Registered Users</h6></p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
            </div>
            <!-- /.card-body p-0 px-2 pt-2-->
            </div>

            <!-- Todays Tickets card -->
        <div class="card p-0 mx-1">
            <div class="card-header bg-gradient-success border-0">
              <h3 class="card-title">
                <i class="fas fa-map-marker-alt mr-1"></i>
                Total Ticket
              </h3>
              <!-- card tools -->
              <div class="card-tools">
                <button type="button"
                        class="btn btn-success btn-sm"
                        data-card-widget="collapse"
                        data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <div class="card-body p-0 px-2 pt-2">
                <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-6 col-6">
              <!-- small box -->
              <div class="small-box text-success border border-success">
                <div class="inner">
                  <h1 class="h3">{{ session()->get('paidticket', 'N/A') }}</h1>

                  <p><h6>Purchased Tickets<h6></p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-6">
              <!-- small box -->
              <div class="small-box text-success border border-success">
                <div class="inner">
                  <h1 class="display-4">{{ session()->get('genticket', 'N/A') }}</h1>

                  <p><h6>Generated Tickets<h6></p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
            </div>
            <!-- /.card-body p-0 px-2 pt-2-->
            </div>

        </div>
        <!--HALF END-->

        <!--HALF-->
        <div class="col-md-4">

        <!-- Staffs card -->
        <div class="card p-0 mx-1">
            <div class="card-header bg-gradient-success border-0">
              <h3 class="card-title">
                <i class="fas fa-map-marker-alt mr-1"></i>
                Staff
              </h3>
              <!-- card tools -->
              <div class="card-tools">
                <button type="button"
                        class="btn btn-success btn-sm"
                        data-card-widget="collapse"
                        data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <div class="card-body p-0 px-2 pt-2">
                <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-6 col-6">
              <!-- small box -->
              <div class="small-box text-success border border-success">
                <div class="inner">
                  <h1 class="h3">{{ session()->get('admincount', 'N/A') }}</h1>

                  <p><h6>Admins<h6></p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-6">
              <!-- small box -->
              <div class="small-box text-success border border-success">
                <div class="inner">
                  <h1 class="h3">{{ session()->get('nonadmincount', 'N/A') }}</h1>

                  <p><h6>Non-Admins<h6></p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
            </div>
            <!-- /.card-body p-0 px-2 pt-2-->
            </div>

            <!-- Total Tickets card -->
        <div class="card p-0 mx-1">
            <div class="card-header bg-gradient-success border-0">
              <h3 class="card-title">
                <i class="fas fa-map-marker-alt mr-1"></i>
                Today's Ticket
              </h3>
              <!-- card tools -->
              <div class="card-tools">
                <button type="button"
                        class="btn btn-success btn-sm"
                        data-card-widget="collapse"
                        data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <div class="card-body p-0 px-2 pt-2">
                <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-6 col-6">
              <!-- small box -->
              <div class="small-box text-success border border-success">
                <div class="inner">
                  <h1 class="h3">N/A</h1>

                  <p><h6>Purchased Tickets<h6></p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-6">
              <!-- small box -->
              <div class="small-box text-success border border-success">
                <div class="inner">
                  <h1 class="h3">N/A</h1>

                  <p><h6>Generated Tickets<h6></p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
            </div>
            <!-- /.card-body p-0 px-2 pt-2-->
            </div>

        </div>
        <!--HALF END-->

        <!--HALF-->
        <div class="col-md-4">

            <!-- Active users card -->
        <div class="card p-0 mx-1">
            <div class="card-header bg-gradient-success border-0">
              <h3 class="card-title">
                <i class="fas fa-map-marker-alt mr-1"></i>
                Active Users/Staffs
              </h3>
              <!-- card tools -->
              <div class="card-tools">
                <button type="button"
                        class="btn btn-success btn-sm"
                        data-card-widget="collapse"
                        data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <div class="card-body p-0 px-2 pt-2">
                <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-6 col-6">
              <!-- small box -->
              <div class="small-box text-success border border-success">
                <div class="inner">
                  <h1 class="h3">{{ session()->get('activeuser', 'N/A') }}</h1>

                  <p><h6>Users<h6></p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-6">
              <!-- small box -->
              <div class="small-box text-success border border-success">
                <div class="inner">
                  <h1 class="h3">{{ session()->get('activestaff', 'N/A') }}</h1>

                  <p><h6>Staffs<h6></p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
            </div>
            <!-- /.card-body p-0 px-2 pt-2-->
            </div>

        </div>
        <!--HALF END-->

        </div>
        <!-- END ROW -->

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
