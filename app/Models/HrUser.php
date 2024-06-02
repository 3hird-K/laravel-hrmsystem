<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class HrUser extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'table_hr_users';
    protected $fillable = [
        'name',
        'email',
        'username',
        'password'
    ];
}
