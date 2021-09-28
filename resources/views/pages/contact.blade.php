@extends('layouts.app')

@section('content')
   <section class="py-5">
     <div class="container">
        <h6 class="heading-title pt-5">Contact Us</h6>
        <p class="text-white text-center">The world Largest 100% certified instant Peer to Peer platform.</p>
        <div class="row pt-5">
          <div class="col-md-6 mx-auto">
            <div class="card card-body bg-primary">
              <form action="">
                 <div class="form-group">
                    <input type="email" class="form-control " id="email" placeholder="Email">
                </div>
                <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option value="">Select category</option>
                        <option value="Company Business">Company Business</option>
                        <option value="General inquiry">General inquiry</option>
                        <option value="Website Support">Website Support</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option value="">Select Priority</option>
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                        </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control " id="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                </div>
                <div class="form-group text-center">
                   <button class="btn btn-success">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
     </div>
    @include('layouts.footer')
    </div>
   </section>
@endsection
