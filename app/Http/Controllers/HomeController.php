<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PragmaRX\Countries\Package\Countries;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;


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

    public function update_profile(Request $request, $id)
    {
        $updateUser = User::find($id);

       $image = $request->file('user_image');

       $name_gen = hexdec(uniqid());
       $img_ext = strtolower($image->getClientOriginalExtension());
       $image_name = $name_gen.'.'.$img_ext;
       $up_location = 'images/profile/';
       $last_img = $up_location.$image_name;

       $image->move($up_location, $image_name);

        $updateUser->firstname = $request->firstname;
        $updateUser->lastname = $request->lastname;
        $updateUser->email = $request->email;
        $updateUser->country = $request->country;
        $updateUser->user_image = $last_img;

        $updateUser->update();

        $notification = array(
         'message' => 'User Info Updated Successfully',
         'alert-type' => 'success'
         );

        return redirect()->route('user_profile')
            ->with($notification);

    }

    public function view_password(){

        return view('customer.users.view_password');



    }

    public function update_password(Request $request){

         $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->oldpassword, $hashedPassword)){
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();

                $notification = array(
                   'message' => 'User password Updated Successfully',
                   'alert-type' => 'info'
                 );
                return redirect()->route('dashboard')
                        ->with($notification);
        } else {
            return redirect()->back();
        }

    }

    public function email_setting(){
        return view('customer.users.email_setting');
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
