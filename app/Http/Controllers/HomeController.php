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
        return view(
            'customer.users.dashboard',
            [
                'users' => $users
            ]
        );
    }

    public function support_ticket()
    {
        return view('customer.users.support_ticket');
    }

    public function user_profile(Request $request)
    {
        $ipAddress = $request->ip();
        return view('customer.users.user_profile', compact('ipAddress'));
    }

    public function update_profile(Request $request)
    {
        return view('customer.users.update_profile');
    }
}
