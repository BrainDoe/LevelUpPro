<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PragmaRX\Countries\Package\Countries;


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
        $allUsers = User::all();
        $ipAddress = $request->ip();
        return view('customer.users.user_profile', [
            'ipAddress' => $ipAddress,
            'allUsers' => $allUsers
        ]);
    }

    public function edit_profile($id)
    {
        $editprofile = User::find($id);

        $countries = new Countries();

        $allCountry =  $countries->all()->pluck('name.common')->toArray();
        return view('customer.users.edit_profile',[
            'editprofile' => $editprofile,
            'allCountry' => $allCountry
        ]);
    }

    public function update_profile(Request $request)
    {
        $reg_number = Auth::user()->reg_number;
        $user_editprofile = User::find($reg_number);

        return view('customer.users.edit_profile',[
            'user_editprofile' => $user_editprofile
        ]);
    }

    public function registers()
    {
        return view('auth.registers');
    }
    public function referral_link()
    {
        return view('customer.users.referral_link');
    }
}
