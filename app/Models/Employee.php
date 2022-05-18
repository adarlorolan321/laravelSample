<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Department;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'birthdate',
        'age',
        'sex',
        'address',
        'employedDate',
        'department_id',
        'position_id'
    ];

    public function department()
    {
        return $this->hasOne(Department::class,'id');
    }

    public function position(){
        return $this->hasOne(Position::class,'id');
    }
}
