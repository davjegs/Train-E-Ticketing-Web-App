<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        /*'uniqueid', 'email', 'password', 'phonenumber', 'title',
        'surname', 'firstname',
        'othername', 'sex',
        'soo', 'locgov', 'sor', 'lor',
        'address',
        'dob', 'occupation', 'profileimg', 'role', 'admin_id', 'gen_tickets',
        'unpaid_ticket', 'active_ticket',*/'email', 'password', 'phonenumber','occupation'
    ];
    protected $attributes = [
        'phonenumber' => '',
        'title' => '',
        'surname' => 'Welcome',
        'firstname' => '',
        'othername' => '',
        'sex' => '',
        'soo' => '',
        'locgov' => '',
        'sor' => '',
        'lor' => '',
        'address' => '',
        'dob' => '',
        'occupation' => '',
        'profileimg' => '',
        'admin_id' => '',
        'gen_tickets' => '0',
        'unpaid_ticket'  => '0',
        'active_ticket' => '0',
];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
