@extends('layouts.dashboard.app')

@section('content')
<div class="row py-3">
  <div class="col-md-6">
      <h3 class="text-white">Referral Link</h3>
  </div>
  <div class="col-md-6">
      <nav aria-label="breadcrumb" style="background-color:transparent">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/customer/users/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active text-white" aria-current="page">Referral Link</li>
          </ol>
      </nav>
  </div>
</div>
<div class="row">
        <div class="col-12">
            <div class="card card-primary border_outline bg-primary">
              <div class="card-header">
                <h3 class="card-title text-white"> Referral Link</h3>

              </div>
              <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                <div class="card-body">
                <div class="callout callout-info">
                  <h5>Hi, I am a beneficiary of LEVELUP. It has been a great experience. </h5>
                   <p>  Together we can change the world. One start-off donation of N10,000 NAIRA activates the opportunity of changing your life and that of others forever. Share this opportunity with the people that matter most to you & those in need of financial breakthrough. Never forget that we rise up by lifting up others.</p>
                <h6>"WE BUILD TOGETHER"</h6>
                <p><strong class="bg-success mr-2">Click Here to Join - </strong> <a href="{{ Auth::user()->referral_link }}" class="text-info">{{ Auth::user()->referral_link }}</a></p>
                <b class="text-warning">Thank You</b>
                <p class="text-warning">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</p>
                </div>

              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div><!-- /.row -->
@endsection
