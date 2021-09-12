@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    <h2>{{ Auth::user()->name }}</h2>
                    <h5>{{ Auth::user()->email }}</h5>
                <div>


                @php
                    function userStructure($users) {
                        $output = '';
                        foreach($users as $user) {

                            $user->count();
                            // $output .= '<li>'. (!empty($user['children']) ? $user->name .'<br>'. $user->email . userStructure($user['children']) : $user) .'</li>';

                            if(!empty($user['children'])) {
                                $output .= '<li>'.$user->name .'<br>' . $user->email.'<br>' .$user->phone .'<br>'. $user->reg_number.$user->count().userStructure($user['children']).'</li>';
                            } else {
                                '<li>'.$user.'</li>';
                            }
                        }

                        return '<ul>'. $output .'</ul>';
                    }
                    
                    echo userStructure($users);
                    
                @endphp
                    {{-- <ul class="list-group mt-3">
                        @foreach ($users as $key => $user)
                            <p>{{ $key }}</p>
                            <ul>
                                <li> {{ $user->name }}</li>
                                <li>{{ $user->email }}</li>
                                <li>{{ $user->country }}</li>
                                <li>{{ $user->reg_number }}</li>


                                @foreach($user['children'] as $child )
                                <ul>
                                    <li>{{ $child->name }}</li>
                                    <li>{{ $child->email }}</li>
                                    <li>{{ $child->phone }}</li>
                                    <li>{{ $child->ref_id }}</li>
                                    @if(!empty($child['children']))
                                        @foreach($child['children'] as $c)
                                            <ul>
                                                <li>{{ $c->name }}</li>
                                                <li>{{ $c->email }}</li>
                                                <li>{{ $c->phone }}</li>
                                                <li>{{ $c->ref_id }}</li>
                                                @if(!empty($c['children']))
                                                    @foreach($c['children'] as $ach)
                                                        <ul>
                                                            <li>{{ $ach->name }}</li>
                                                            <li>{{ $ach->email }}</li>
                                                            <li>{{ $ach->phone }}</li>
                                                            <li>{{ $ach->ref_id }}</li>
                                                        </ul>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        @endforeach
                                    @else
                                        <h2>No child yet</h2>    
                                    @endif    
                                </ul>
                                @endforeach
                            </ul>   
                            <hr> 
                        <li class="list-group-item">
                           
                        </li>   
                        @endforeach 
                    </ul> --}}
                </div>
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
                {{-- <div>
                    <a href="{{ route('ref_link', Auth::user()->reg_number) }}">User ref_link</a>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
