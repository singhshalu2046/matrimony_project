<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
	public $table="admin_tbl";
    use Notifiable;
    protected $fillable = ['id', 'name', 'user_name', 'password', 'mobile', 'type', 'status', 'email', 'address', 'img'];
}
