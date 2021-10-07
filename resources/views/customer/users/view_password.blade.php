@extends('layouts.dashboard.app')

@section('content')
<div class="row py-3">
  <div class="col-md-6">
      <h3 class="text-white">Change Password</h3>
  </div>
  <div class="col-md-6">
      <nav aria-label="breadcrumb" style="background-color:transparent">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/customer/users/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active text-white" aria-current="page">Change Password</li>
          </ol>
      </nav>
  </div>
</div>
 <div class="row">
    <div class="col-12">
           <div class="card card-info bg-primary">
              <div class="card-header bg-success">
                <h3 class="card-title text-white"> Change Password</h3>
              </div>
              <!-- /.card-header -->
              <form action="{{ route('update_password')}}" method="post">
                 @csrf
                <div class="card-body row bg-primary">
                 <div class="col-md-6">
                  <!-- text input -->
                  <div class="form-group">
                     <label class="text-white">Current Password</label>
                     <input name="oldpassword" required="required" placeholder="Current Passowrd"  class="form-control" type="password" id="UserOldPassword"/>
                      @error('oldpassword')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror   
                  </div>
                  <div class="form-group">
                      <label class="text-white">Password</label>
                      <input name="password" required="required" placeholder="New Passowrd" class="form-control" type="password" id="UserPassword"/>
                      @error('password')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror   
                  </div>
                   <div class="form-group">
                    <label class="text-white">Confirm New Password</label>
                      <input name="password_confirmation" required="required" placeholder="New Password" class="form-control" type="password" id="UserRepassword"/>
                       @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                       @enderror   
                    </div>               
                </div>
              </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
              </div>
             </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->  
    </div>
 </div><!-- /.row -->
@endsection
