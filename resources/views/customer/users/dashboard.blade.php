@extends('layouts.dashboard.app')

@section('content')
     <div class="row py-3">
        <div class="col-md-6">
            <h3 class="text-white ">Dashboard</h3>
        </div>
        <div class="col-md-6">
            <nav aria-label="breadcrumb" style="background-color:transparent">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/customer/users/dashboard">Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Library</li>
                </ol>
            </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
           <div class="alert alert-danger bg-danger">
             <strong class="text-white">Your account has been expired</strong>
           </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
           <div class="callout-info">
              <h5 class="text-success">Important Notice</h5>
              <p>Your Free membership expires in 1 day. <a href="" class="text-success">Upgrade</a> before time runs out or your account will be deleted.</p>
           </div>
        </div>
        <div class="col-md-6">
           <div class="card" style="background-color: #07097f;">
              <div class="card-body">
                <div class="countdown-display is-countdown" id="demo">
                    <span class="countdown-row countdown-show4 pl-3">E X P I R E D </span>
                </div>
              </div>
           </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 mb-3">
            <div class="card card card-outline" style="background-color: #07097f;">
               <div class="card-body">
                   <div class="text-center">
                        <h3 class="profile-username text-center text-white">Current Level :  0</h3>
                        <p class="text-muted text-center text-white">Level Price : ₦ ***</p>
                        <p class="text-muted text-center text-white">Level Income : ₦ ***</p>
                        <a href="/customer/users/upgrade text-white" class="btn btn-success btn-sm text-center"><strong>LEVEL UP</strong></a>
                    </div>
               </div>
            </div>
        </div>
        <div class="col-md-9 mx-auto">
           <div class="box">
                <div class="box-body">
                    <a class="btn btn-app mb-3">
                        1 LEVEL <br>  <i class="fa fa-user"></i>
                        <br>
                        0 Members
                    </a>
                    <a class="btn btn-app mb-3">
                    2 LEVEL <br> <i class="fa fa-user"></i>
                    <br>
                        0 Members
                    </a>

                    <a class="btn btn-app mb-3">
                        3 LEVEL <br>  <i class="fa fa-user"></i>
                        <br>
                        0 Members
                    </a>
                    <a class="btn btn-app mb-3">
                    4 LEVEL <br> <i class="fa fa-user"></i>
                    <br>
                        0 Members
                    </a>

                    <a class="btn btn-app mb-3">
                        5 LEVEL <br>  <i class="fa fa-user"></i><br>
                        0 Members
                    </a>
                    <a class="btn btn-app mb-3">
                    6 LEVEL <br> <i class="fa fa-user"></i><br>
                        0 Members
                    </a>

                    <a class="btn btn-app mb-3">
                        7 LEVEL <br>  <i class="fa fa-user"></i>
                        <br>
                        0 Members
                    </a>
                    <a class="btn btn-app mb-3">
                    8 LEVEL <br> <i class="fa fa-user"></i>
                    <br>
                        0 Members
                    </a>
                </div>
           </div>
        </div>
      </div>
  </div>
@endsection
