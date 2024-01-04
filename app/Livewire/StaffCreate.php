<?php

namespace App\Livewire;

use App\Models\Staff;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class StaffCreate extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $password  = "EverCareStaff";
    public $phone;
    public $address;
    public $gender;
    public $dob;
    public $image;
    public $role;
    public $qualification;
    public $from;
    public $to;
    public $note;
    public $salary;
  
    public function save()
    {
        
        // $validated = $this->validate();
        $hashedPassword = Hash::make($this->password);
        if($this->image)
        $path = $this->image->store('images', 'public');
    else {$path = 'images/default.png';}
        // dd($path);

        Staff::create(
            [
                'name' => $this->name,
                // 'speciality' => $this->speciality,
                'qualification' => $this->qualification,
                'gender' => $this->gender,
                'email' => $this->email,
                'phone' => $this->phone,
                'address' => $this->address,
                'role' => $this->role,
                'from' => $this->from,
                'to' => $this->to,  
                'note' => $this->note,
                'salary' => $this->salary,
                'userName' => $this->name . rand(1,100),
                'password' => $hashedPassword,
                'image' => $path,
                'dob' => $this->dob,
                'created_at' => now(),
                'updated_at' => now(),
                
                
            ]
        );
        session()->flash('status', 'Doctor successfully added.');
        $this->image='';
        // $this->reset('image', 'name','speciality', 'qualification', 'gender', 'bio', 'email', 'phone', 'password');

        $this->reset();
    }
    public function render()
    {
        return view('livewire.staff-create');
    }
}
