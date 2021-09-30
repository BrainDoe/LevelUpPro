@extends('layouts.dashboard.app')

@section('content')
    <div class="row py-4">
        <div class="col-md-12">
        <div class="">
            <h2 class="text-white">Dashboard</h2>
            <h3 class="text-white"><a href="{{ url('/customer/users/dashboard') }}">Home</a>/Dashboard</h3>
        </div>
    </div>
  </div>
@endsection
