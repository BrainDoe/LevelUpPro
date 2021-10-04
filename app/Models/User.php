<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;



    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'email',
        'password',
        'phone',
        'country',
        'reg_number',
        'ref_id'
    ];

    protected $appends = ['referral_link'];

    public function getReferralLinkAttribute() {
        return $this->referral_link = route('register', ['ref' => $this->reg_number]);
    }



    // Get all Users Using Recursive Method
    public static function getUsers(){
        $allUsers = User::get();

        $rootUsers = $allUsers->whereNull('ref_id');

        self::formatUsers($rootUsers, $allUsers);

        return $rootUsers;
    }

    private static function formatUsers($rootUsers, $allUsers){
        foreach($rootUsers as $rootuser){
            $rootuser->children = $allUsers->where('ref_id', $rootuser->id);
            // $userCount = $rootuser->children->count();
            // dd($userCount);

            if($rootuser->children->isNotEmpty()){
                self::formatUsers($rootuser->children, $allUsers);
            }
        }
    }

    // Eager Loading with hasMany
    public function referrals(){
        return $this->hasMany(User::class, 'ref_id')
        ->with('referrals');
    }

    public function referrer(){
        return $this->belongsTo(User::class, 'ref_id');
    }


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
