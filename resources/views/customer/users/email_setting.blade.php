@extends('layouts.dashboard.app')

@section('content')
<div class="row py-3">
  <div class="col-md-6">
      <h3 class="text-white">Email Setting</h3>
  </div>
  <div class="col-md-6">
      <nav aria-label="breadcrumb" style="background-color:transparent">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/customer/users/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active text-white" aria-current="page">Email Setting</li>
          </ol>
      </nav>
  </div>
</div>
 <div class="row">
    <div class="col-6">
         <!-- /.card -->
        <div class="card card-primary card-body">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
            </div>
        </div>
            <!-- /.card -->
            <!-- /.card -->
    </div>
 </div><!-- /.row -->
@endsection
