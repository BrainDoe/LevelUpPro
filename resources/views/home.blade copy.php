@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    <h2>{{ Auth::user()->name }}</h2>
                    <h5>{{ Auth::user()->email }}</h5>
                    <h5>{{ Auth::user()->email }}</h5>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <ul class="list-group mt-3">
                        <li class="list-group-item">Username: {{ Auth::user()->name }}</li>
                        <li class="list-group-item">Email: {{ Auth::user()->email }}</li>
                        <li class="list-group-item">Referral link: <a href="{{ Auth::user()->referral_link }}">{{ Auth::user()->referral_link }}</a></li>
                        <li class="list-group-item">Referrer: {{ Auth::user()->referrer->name ?? 'Not Specified' }}</li>
                        <li class="list-group-item">Refferal count: {{ count(Auth::user()->referrals)  ?? '0' }}</li>
                        {{-- @dd(Auth::user()->referrals) --}}

                        @foreach (Auth::user()->referrals as $ref)
                            {{-- @dd($ref) --}}
                            <li class="listg-group-item">{{ $ref->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
