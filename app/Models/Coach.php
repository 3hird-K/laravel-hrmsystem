<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Coach extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'position',
        'Supervisor',
        'contact',
        'department_id',
        'address',
        'image',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
