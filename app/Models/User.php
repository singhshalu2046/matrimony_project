<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use \DateTimeInterface;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $table="users";

    protected $fillable = [
      
        'id', 'user_name', 'profile_creator', 'email', 'password', 'gender', 'marital_status', 'children_number', 'children_living_status', 'contact_number', 'dob', 'height', 'religion', 'cast','birth_place', 'country', 'city', 'state', 'district', 'zipcode', 'subcast', 'income_range', 'mother_tongue', 'languages_known', 'gothra', 'star', 'raasi', 'manglik', 'eating_habits', 'smoking_habits', 'drinking_habits', 'about_me', 'physical_status', 'residence_type', 'citizenship', 'alt_mobile', 'last_login', 'status', 'created_at', 'deleted_at', 'updated_at'    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

}
