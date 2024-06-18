<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'position',
        'Supervisor',
        'contact',
        'address',
        'image',
    ];
}
