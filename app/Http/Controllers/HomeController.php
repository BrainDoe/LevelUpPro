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

        // $users->referrals();
        // dd($users);
        // dd($users->auth()->user()->getUsers);
        // Auth::user()->getUsers();
        // $users->count();
        // dd($users->count());

        // dd($users->referrals);

        // dd($users);
        
        return view('home', [
            'users' => $users
        ]);
    }

}
