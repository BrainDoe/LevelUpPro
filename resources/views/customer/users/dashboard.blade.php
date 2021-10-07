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
                    <li class="breadcrumb-item active text-white" aria-current="page">Dashboard</li>
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
        <div class="col-md-4 col-lg-3 mb-3">
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
        <div class="col-md-8 col-lg-9  mx-auto">
           <div class="box">
                <div class="box-body">
                    <p class="btn btn-app mb-3">
                        1 LEVEL <br>  <i class="bi bi-people-fill"></i>
                        <br>
                        0 Members
                    </p>
                    <p class="btn btn-app mb-3">
                    2 LEVEL <br> <i class="bi bi-people-fill"></i>
                    <br>
                        0 Members
                    </p>

                    <p class="btn btn-app mb-3">
                        3 LEVEL <br>  <i class="bi bi-people-fill"></i>
                        <br>
                        0 Members
                    </p>
                    <a class="btn btn-app mb-3">
                    4 LEVEL <br> <i class="bi bi-people-fill"></i>
                    <br>
                        0 Members
                    </a>

                    <a class="btn btn-app mb-3">
                        5 LEVEL <br>  <i class="bi bi-people-fill"></i><br>
                        0 Members
                    </a>
                    <a class="btn btn-app mb-3">
                    6 LEVEL <br> <i class="bi bi-people-fill"></i><br>
                        0 Members
                    </a>

                    <a class="btn btn-app mb-3">
                        7 LEVEL <br>  <i class="bi bi-people-fill"></i>
                        <br>
                        0 Members
                    </a>
                    <a class="btn btn-app mb-3">
                    8 LEVEL <br> <i class="bi bi-people-fill"></i>
                    <br>
                        0 Members
                    </a>
                </div>
           </div>


    <div class="row py-3">
       <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon elevation-1">
              <i class="bi bi-people-fill"></i>
              </span>
              <div class="info-box-content">
                <span class="info-box-text">Total Referrals</span>
                <h5 class="info-box-number">0</h5>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3 bg-primary">
              <span class="info-box-icon   elevation-1"><i class="bi bi-tree"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">My Payment</span>
                <h5 class="info-box-number">0</h5>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
           <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon  elevation-1"><i class="bi bi-people-fill"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Members</span>
                <h5 class="info-box-number">0</h5>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
      </div>
        </div>
      </div>
    <div class="row py-3">
      <div class="col-md-6 col-lg-3">
            <!-- small box -->
            <div class="small-box">
              <div class="inner">
                <h3 class="text-white">₦ 0</h3>
                <p  class="text-white">Provided Payment</p>
              </div>
              <div class="icon">
                <i class="bi bi-gift-fill"></i>
              </div>
                <a href="/customer/users/provided" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
          <!-- ./col -->
      <div class="col-lg-3 col-md-6">
            <!-- small box -->
            <div class="small-box ">
              <div class="inner">
                <h3  class="text-white">₦ 0</h3>
                <p class="text-white">Received Payment</p>
              </div>
              <div class="icon">
                <i class="bi bi-gift-fill"></i>
              </div>
                <a href="/customer/users/provided" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
          <!-- ./col -->
      <div class="col-lg-3 col-md-6">
            <!-- small box -->
            <div class="small-box ">
              <div class="inner">
                <h3 class="text-white">₦ 0</h3>
                <p class="text-white">Pending Payment Request</p>
              </div>
              <div class="icon">
                <i class="bi bi-gift-fill"></i>
              </div>
                <a href="/customer/users/provided" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
          <!-- ./col -->
      <div class="col-lg-3 col-md-6">
            <!-- small box -->
            <div class="small-box ">
              <div class="inner">
                <h3 class="text-white">₦ 0</h3>
                <p  class="text-white">Completed Payment Request</p>
              </div>
              <div class="icon">
                <i class="bi bi-gift-fill"></i>
              </div>
                <a href="/customer/users/provided" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
          <!-- ./col -->
  </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card card-outline" style="background-color: #07097f;color:#fff;">
            <div class="card-body card-profile">
             <div class="text-center">
             <h3 class="profile-username text-center"> Level 1</h3>
               <p class="text-muted text-center"> Price : &#8358; 10K  </p>

                <a href="/customer/users/upgrade"  class="btn btn-success btn-sm text-center"><b>EXTEND</b></a>
                </div>
                 <br>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item text-white">
                  <strong class="text-white">Referrals</strong class="text-white"> <a class="float-right text-white">2</a>
                </li>
                <li class="list-group-item">
                  <strong class="text-white">Income</strong class="text-white"> <a class="float-right text-white">&#8358;20K </a>
                </li>

              </ul>


            </div>
            <!-- /.box-body -->
          </div>
      </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card card-outline" style="background-color: #07097f;color:#fff;">
            <div class="card-body card-profile">
             <div class="text-center">
             <h3 class="profile-username text-center"> Level 2</h3>
               <p class="text-muted text-center"> Price : &#8358; 20K  </p>

                <a href="/customer/users/upgrade"  class="btn btn-success btn-sm text-center disabled"><b>EXTEND</b></a>
                </div>
                 <br>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <strong class="text-white">Referrals</strong class="text-white"> <a class="float-right text-white">4</a>
                </li>
                <li class="list-group-item">
                  <strong class="text-white">Income</strong class="text-white"> <a class="float-right text-white">&#8358;80K</a>
                </li>

              </ul>


            </div>
            <!-- /.box-body -->
          </div>
      </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card card-outline" style="background-color: #07097f;color:#fff;">
            <div class="card-body card-profile">
             <div class="text-center">
             <h3 class="profile-username text-center"> Level 3</h3>
               <p class="text-muted text-center"> Price : &#8358;40 </p>

                <a href="/customer/users/upgrade"  class="btn btn-success btn-sm text-center disabled"><b>EXTEND</b></a>
                </div>
                 <br>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <strong class="text-white">Referrals</strong class="text-white"> <a class="float-right text-white">8</a>
                </li>
                <li class="list-group-item">
                  <strong class="text-white">Income</strong class="text-white"> <a class="float-right text-white">&#8358;240K</a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card card-outline" style="background-color: #07097f;color:#fff;">
            <div class="card-body card-profile">
             <div class="text-center">
             <h3 class="profile-username text-center"> Level 4</h3>
               <p class="text-muted text-center"> Price : &#8358; 80K  </p>

                <a href="/customer/users/upgrade"  class="btn btn-success btn-sm text-center disabled"><b>EXTEND</b></a>
                </div>
                 <br>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <strong class="text-white">Referrals</strong class="text-white"> <a class="float-right text-white">16</a>
                </li>
                <li class="list-group-item">
                  <strong class="text-white">Income</strong class="text-white"> <a class="float-right text-white">&#8358;960K</a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-outline" style="background-color: #07097f;color:#fff;">
            <div class="card-body card-profile">
             <div class="text-center">
             <h3 class="profile-username text-center"> Level 5</h3>
               <p class="text-muted text-center"> Price : &#8358;160K  </p>

                <a href="/customer/users/upgrade"  class="btn btn-success btn-sm text-center disabled"><b>EXTEND</b></a>
                </div>
                 <br>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <strong class="text-white">Referrals</strong class="text-white"> <a class="float-right text-white">32</a>
                </li>
                <li class="list-group-item">
                  <strong class="text-white">Income</strong class="text-white"> <a class="float-right text-white">&#8358;3,840,000</a>
                </li>

              </ul>


            </div>
            <!-- /.box-body -->
          </div>
      </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-outline" style="background-color: #07097f;color:#fff;">
            <div class="card-body card-profile">
             <div class="text-center">
             <h3 class="profile-username text-center"> Level 6</h3>
               <p class="text-muted text-center"> Price : &#8358;320K  </p>

                <a href="/customer/users/upgrade"  class="btn btn-success btn-sm text-center disabled"><b>EXTEND</b></a>
                </div>
                 <br>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <strong class="text-white">Referrals</strong class="text-white"> <a class="float-right text-white">64</a>
                </li>
                <li class="list-group-item">
                  <strong class="text-white">Income</strong class="text-white"> <a class="float-right text-white">&#8358;15.36M</a>
                </li>

              </ul>


            </div>
            <!-- /.box-body -->
          </div>
      </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-outline" style="background-color: #07097f;color:#fff;">
            <div class="card-body card-profile">
             <div class="text-center">
             <h3 class="profile-username text-center"> Level 7</h3>
               <p class="text-muted text-center"> Price : &#8358;640K</p>

                <a href="/customer/users/upgrade"  class="btn btn-success btn-sm text-center disabled"><b>EXTEND</b></a>
                </div>
                 <br>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <strong class="text-white">Referrals</strong class="text-white"> <a class="float-right text-white">128</a>
                </li>
                <li class="list-group-item">
                  <strong class="text-white">Income</strong class="text-white"> <a class="float-right text-white">&#8358;61.44M</a>
                </li>

              </ul>


            </div>
            <!-- /.box-body -->
          </div>
      </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-outline" style="background-color: #07097f;color:#fff;">
            <div class="card-body card-profile">
             <div class="text-center">
             <h3 class="profile-username text-center"> Level 8</h3>
               <p class="text-muted text-center"> Price : &#8358; 1.28M  </p>

                <a href="/customer/users/upgrade"  class="btn btn-success btn-sm text-center disabled"><b>EXTEND</b></a>
                </div>
                 <br>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <strong class="text-white">Referrals</strong class="text-white"> <a class="float-right text-white">256</a>
                </li>
                <li class="list-group-item">
                  <strong class="text-white">Income</strong class="text-white"> <span class="float-right text-white">&#8358;245.76M</span>
                </li>

              </ul>


            </div>
            <!-- /.box-body -->
          </div>
      </div>
      </div>
  </div>
@endsection
