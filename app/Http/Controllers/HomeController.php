<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::getUsers('referrals');


        return view('home', [
            'users' => $users
        ]);
    }



    // public function getcountry(){
    //    $countries = new Countries();

    //    $allCountry =  $countries->all()->pluck('name.common')->toArray();

    //     return view('auth.register', [
    //         'allCountry' => $allCountry,
    //     ]);
    // }



}
