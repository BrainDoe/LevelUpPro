@extends('layouts.dashboard.app')

@section('content')
<div class="row py-3">
  <div class="col-md-6">
      <h3 class="text-white">Update Profiles</h3>
  </div>
  <div class="col-md-6">
      <nav aria-label="breadcrumb" style="background-color:transparent">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/customer/users/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active text-white" aria-current="page">Update Profile</li>
          </ol>
      </nav>
  </div>
</div>
<div class="row">
          <div class="col-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> Update Profile</h3>
              </div>
              <!-- /.card-header -->
              <form action="{{ route('update_profile', $editprofile->id) }}"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                    @method('POST')
              <div class="card-body row">
                 <div class="col-md-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Avatar </label><small style="float:right" class="text-danger"><em> Maximum size: 250x250 (500KB)</em></small>
                    <input type="file" name="user_image" class="form-control" id="UserPhoto"/>
                  </div>
                  <div class="form-group">
                    <label>First Name</label>
                    <div class="input text"><input name="firstname" required="required" placeholder="first name" class="form-control" maxlength="100" type="text" value="{{ $editprofile->firstname}}" id="firstname"/></div>

                  </div>
                   <div class="form-group">
                    <label>Last Name</label>
               <div class="input text">
               <input name="lastname" required="required" placeholder="last name" class="form-control" maxlength="200" type="text" value="{{ $editprofile->lastname}}" id="UserLName"/></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input name="email" class="form-control" placeholder="Enter Email" required="required" type="email" value="{{ $editprofile->email}}" id="email"/>
                  </div>
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Country</label>
                    <div class="input select">
                        <select name="country" class="form-control" required="required" id="UserCountry">
                            <option value="{{ $editprofile->country}}">{{ $editprofile->country}}</option>
                            @foreach ($allCountry as $country)
                                <option value="{{ $country }}">{{ $country }}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Phone</label>
                    <input name="phone" class="form-control" placeholder="Phone Number" required="required" type="number" value="{{ $editprofile->phone}}" id="UserMobile"/>
                  </div>
               </div>
              </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div><!-- /.row -->
@endsection
