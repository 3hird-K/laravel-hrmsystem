<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Coach;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'position',
        'contact',
        'address',
        'status',
        'supervisor_id',
        'date_hired',
        'image',
        'description',
    ];
    public function supervisor()
    {
        return $this->belongsTo(Coach::class, 'supervisor_id');
    }
}
