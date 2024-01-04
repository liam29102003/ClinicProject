<?php

namespace App\Models;

use App\Enums\StaffRoleEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    use HasFactory;
    protected $fillable=['userName','password','name','email','phone','address','role','dob','gender','image','qualification','from','to','note','salary'];

    // public function setRole($role)
    // {
    //     if (StaffRoleEnum::hasKey($role)) {
    //         $this->attributes['role'] = $role;
    //     }
    // }
}

