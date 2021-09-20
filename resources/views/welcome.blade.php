@extends('layouts.app')

@section('content')
  <div class="banner"></div>
  <div class="container">
      <section class="info py-5">
        <div class="row">
            <div class="col-md-12 mx-auto">
              <h5 class="heading-title">LeveUp</h5>
              <p class="heading-text text-center">The world Largest 100% certified instant Peer to Peer platform.</p>
            </div>
        </div>
        <div class="grid-item">
          <div class="item">
             <img  src={{ asset('images/image1.png') }} class="grid-image" height="120px" alt="Certified Globally">
             <p class="heading-text mt-3 text-center"> Certified Globally</p>
          </div>
          <div class="item">
             <img  src={{ asset('images/image2.png') }} class="grid-image" height="120px" alt="One Time Payment">
             <p class="heading-text mt-3"> One Time Payment</p>
          </div>
          <div class="item">
             <img  src={{ asset('images/image3.png') }} class="grid-image" height="120px" alt="No Hidden Fees">
             <p class="heading-text mt-3"> No Hidden Fees</p>
          </div>
          <div class="item">
             <img  src={{ asset('images/image4.png') }} class="grid-image" height="120px" alt="Reliable">
             <p class="heading-text mt-3"> Reliable</p>
          </div>
          <div class="item">
             <img  src={{ asset('images/image5.png') }} class="grid-image"  height="120px" alt="Instant Payout">
             <p class="heading-text mt-3"> Instant Payout.</p>
          </div>
        </div>
      </section>
      {{-- How it works --}}
      <section class="how-it-works py-5">
        <div class="row">
            <div class="col-md-12 mx-auto">
              <h5 class="heading-title">How It Works</h5>
              <p class="heading-text text-center">You must have a local bank account in your country of residence or an approved payment merchant.</p>
            </div>
        </div>


        <div class="wrapper">
            <div class="center-line">
      <a href="#" class="scroll-icon"><i class="fas fa-caret-up"></i></a>
    </div>
    <div class="row row-1">
      <section>
        <i class="icon fas fa-home"></i>
        <div class="details mb-3 float-right">
          <span class="title ">Step 1</span>
        </div>
        <p class="heading-text text-dark pt-5 text-primary">Sign Up by filling out the registration form, login using your username and password, add your beneficiary payment account. Activate Level One by sending your first payment of ₦10,000 to an approved upline. Send payment using ONLY the payment method listed by the receiver. The first person(s) who falls under your matrix will automatically bring back this fund to you.</p>
      </section>
    </div>
    <div class="row row-2">
      <section>
        <i class="icon fas fa-star"></i>
        <div class="details mb-3">
          <span class="title">Step 2</span>
        </div>
        <p class="heading-text text-dark  text-primary">Provide accurate proof of payment details using the form provided. Your account becomes active upon confirmation of your payment by the Receiver.</p>
      </section>
    </div>
    <div class="row row-1">
      <section>
        <i class="icon fas fa-rocket"></i>
         <div class="details mb-3 float-right">
          <span class="title">Step 3</span>
        </div>
        <p class="heading-text text-dark pt-5 text-primary">The receiver has up to 6 hours to confirm payment from the time payment proof has been submitted. If receiver fails to APPROVE or DECLINE the payment within 6 hours, the receiver account will be automatically blocked for breach of Betaprofitss terms & condition.</p>
      </section>
    </div>
    <div class="row row-2">
      <section>
        <i class="icon fas fa-globe"></i>
         <div class="details mb-3">
            <span class="title">Step 4</span>
        </div>
        <p class="heading-text text-dark text-primary">On every level you will be required to upgrade to the next Level once you have received amount equal to activation of your next level upgrade payment.</p>
      </section>
    </div>
    <div class="row row-1">
      <section>
        <i class="icon fas fa-paper-plane"></i>
        <div class="details">
          <span class="title">Step 5</span>
        </div>
        <p class="heading-text text-dark text-primary">All payments are voluntary and final. Refunds are not available. All disagreement(s) will be handled and resolved by the Resolution Center Team (RCT).</p>
      </section>
    </div>
    <div class="row row-2">
      <section>
        <i class="icon fas fa-map-marker-alt"></i>
         <div class="details mb-3 float-right">
          <span class="title">Getting Started</span>
        </div>
        <p class="heading-text text-dark pt-5 text-primary">All transaction notifications will be sent to the mobile number and email address as provided during your registration. Download training materials and marketing resources from the tutorial section in your member backoffice.</p>
      </section>
    </div>
        </div>
        <div class="py-5">
          <row>
             <col class="col-md-12">
                 <p class="text-center heading-text">
                   More details about every step
                   <a class="text-danger" href="#">
                    How it works
                    </a>
                 </p>
             </col>
         </row>
         </div>
      </section>
    <section class="income">
        <div class="row">
          <div class="col-md-12 mx-auto">
            <h5 class="heading-title">Income Table.</h5>
            <p class="heading-text text-center">Achieving this figure shown below will totally depend on the effort and activities of members on your team and 100% more likely when the force matrix is filled up on all levels.</p>
          </div>
      </div>
      <div class="card card-body bg-income py-4">
        <div class="row-card-income">
         <div class="col-card-income">
                <div class="income-style">
                    <h6>Level</h6>
                    <p>#1</p>
                </div>
                <div class="income-style">
                    <h6>Level</h6>
                    <p>#2</p>
                </div>
                <div class="income-style">
                    <h6>Level</h6>
                    <p>#3</p>
                </div>
                <div class="income-style">
                    <h6>Level</h6>
                    <p>#4</p>
                </div>
                <div class="income-style">
                    <h6>Level</h6>
                    <p>#5</p>
                </div>
                <div class="income-style">
                    <h6>Level</h6>
                    <p>#6</p>
                </div>
                <div class="income-style">
                    <h6>Level</h6>
                    <p>#7</p>
                </div>
                <div class="income-style">
                    <h6>Level 8</h6>
                    <p>#8</p>
                </div>
         </div>
         <div class="col-card-income">
                <div class="income-style">
                    <h6>Price</h6>
                    <p>₦ <span class="text-danger">10</span> K</p>
                </div>
                <div class="income-style">
                    <h6>Price</h6>
                    <p>₦ <span class="text-danger">20</span> K</p>
                </div>
                <div class="income-style">
                    <h6>Price</h6>
                    <p>₦ <span class="text-danger">40</span> K</p>
                </div>
                <div class="income-style">
                    <h6>Price</h6>
                     <p>₦ <span class="text-danger">80</span> K</p>
                </div>
                <div class="income-style">
                    <h6>Price</h6>
                    <p>₦ <span class="text-danger">160</span> K</p>
                </div>
                <div class="income-style">
                    <h6>Price</h6>
                    <p>₦ <span class="text-danger">320</span> K</p>
                </div>
                <div class="income-style">
                    <h6>Price</h6>
                    <p>₦ <span class="text-danger">640</span> K</p>
                </div>
                <div class="income-style">
                    <h6>Price</h6>
                    <p>₦ <span class="text-danger">1.28</span> M</p>
                </div>
         </div>
         <div class="col-card-income">
                <div class="income-style">
                    <h6>REFERRALS</h6>
                    <p>2</p>
                </div>
                <div class="income-style">
                    <h6>REFERRALS</h6>
                    <p>4</p>
                </div>
                <div class="income-style">
                    <h6>REFERRALS</h6>
                    <p>8</p>
                </div>
                <div class="income-style">
                    <h6>REFERRALS</h6>
                    <p>16</p>
                </div>
                <div class="income-style">
                    <h6>REFERRALS</h6>
                    <p>32</p>
                </div>
                <div class="income-style">
                    <h6>REFERRALS</h6>
                    <p>64</p>
                </div>
                <div class="income-style">
                    <h6>REFERRALS</h6>
                    <p>128</p>
                </div>
                <div class="income-style">
                    <h6>REFERRALS</h6>
                    <p>256</p>
                </div>
         </div>
         <div class="col-card-income">
                <div class="income-style">
                    <h6>INCOME</h6>
                    <p>₦ <span class="text-danger">20</span> K</p>
                </div>
                <div class="income-style">
                    <h6>INCOME</h6>
                    <p>₦ <span class="text-danger">80</span> K</p>
                </div>
                <div class="income-style">
                    <h6>INCOME</h6>
                    <p>₦ <span class="text-danger">320</span> K</p>
                </div>
                <div class="income-style">
                    <h6>INCOME</h6>
                    <p>₦ <span class="text-danger">1.28</span> M</p>
                </div>
                <div class="income-style">
                    <h6>INCOME</h6>
                    <p>₦ <span class="text-danger">5.12</span> M</p>
                </div>
                <div class="income-style">
                    <h6>INCOME</h6>
                    <p>₦ <span class="text-danger"> 20.48</span> M</p>
                </div>
                <div class="income-style">
                    <h6>INCOME</h6>
                    <p>₦ <span class="text-danger">81.92</span> M</p>
                </div>
                <div class="income-style">
                    <h6>INCOME</h6>
                    <p>₦ <span class="text-danger">327.68 </span> M</p>
                </div>
         </div>
      </div>
      <div class="card-income-text py-3">
        <p class="text-center heading-text2">Your Total Income: ₦436,900,000 every 60 days <br>
           Net Profit: ₦ 436,880,000 Per 60days <br>
          Net Profit: ₦ 2.6Billion Per year</p>
      </div>
      </div>
    </section>
    <section class="advantage mt-5">
        <div class="row">
           <div class="col-md- mx-auto">
               <span class="border-bottom heading-title py-3">Advantages</span>
           </div>
        </div>
    </section>
  </div>
@endsection
