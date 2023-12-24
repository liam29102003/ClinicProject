<?php

namespace App\Http\Controllers\Admin;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function index()
    {
        return view('admin.doctor_table');
    }
    public function add()
    {
        return view('admin.doctor_create');
    }
    public function details(Doctor $doctor)
    
    {   

        return view('admin.doctor_details',compact('doctor'));
    }
}