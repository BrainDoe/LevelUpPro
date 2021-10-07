@extends('layouts.dashboard.app')

@section('content')
<div class="row py-3">
  <div class="col-md-6">
      <h3 class="text-white">Member Profiles</h3>
  </div>
  <div class="col-md-6">
      <nav aria-label="breadcrumb" style="background-color:transparent">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/customer/users/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active text-white" aria-current="page">Member Profile</li>
          </ol>
      </nav>
  </div>
</div>
<div class="row">
        @php
           $user = DB::table('users')->where('id', Auth::user()->id)->first()
        @endphp
   <!-- left column -->
   <div class="col-md-6 mx-auto">
    <!-- general form elements -->
    <div class="card card-info bg-primary">
      <div class="card-header bg-success">
        <span class="card-title float-left text-white">REGISTRATION DETAILS</span>
        <div class="card-tools float-right">
          <a href="{{ route('edit_profile', $user->id) }}" class="btn btn-block btn-danger btn-sm">Change Details</a>
        </div>
      </div>
    <div class="card-body card-profile">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
        @endif
        
      <div class="text-center">
<img class="rounded-circle" src="{{ (!empty($user->user_image)) ? url($user->user_image):asset('images/avatar.jpg') }}" height="150px" width="150px" alt="User profile picture">
      </div>
      <h3 class="profile-username text-center text-white py-2">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h3>

      <ul class="list-group list-group-unbordered">
        <li class="list-group-item">
          <strong>Email:</strong> <a class="pull-right">{{ Auth::user()->email }}</a>
        </li>
        <li class="list-group-item">
          <strong>Joined:</strong> <a class="float-right">{{ Auth::user()->created_at }}</a>
        </li>
        <li class="list-group-item">
          <strong>IP Address:</strong> <a class="float-right">{{ $ipAddress }}</a>
        </li>
        <li class="list-group-item">
          <strong>Country:</strong> <a class="float-right">{{ Auth::user()->country }}</a>
        </li>
        <li class="list-group-item">
          <strong>Phone:</strong> <a class="float-right">{{ Auth::user()->phone }}</a>
        </li>
        <li class="list-group-item">
          <b>Invited By:</b> <span class="float-right">{{ Auth::user()->referrer->username ?? 'Not Specified' }} &nbsp; <a href="#" class="text-white">{{ Auth::user()->referrer->email ?? '' }}</a></span>
        </li>
      </ul>
    </div>
     </div>
   <!-- /.card -->
  </div>
</div>
@endsection
