<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Appointment;
use Illuminate\Support\Facades\Hash;

class AppointmentForm extends Component
{
    public $patient_type;
    public $name ;
    public $email;
    public $password;
    public $confirm_password;
    public $dob;
    public $phone;
    public $gender;
    public $address;
    public $doctor;
    public $appointment_date;
    public $description;
    public $treatment_type;
    
    public function save(){
            $this->validate([
                'treatment_type' =>'required',
                'email'=>'required',
                'doctor'=>'required',
                'name'=>'required',
                'password'=>'required',
                'confirm_password'=>'required',
                'dob'=>'required',
                'phone'=>'required',
                'gender'=>'required',
            ]);
            
        Appointment::create([
            'patient_type'=>'New Patient',
            'treatment_type' => $this->treatment_type,
            'email' => $this->email,
            'doctor_id' => $this->doctor,
            'address'=>$this->address,
            'name' => $this->name,
            'password' => Hash::make($this->password),
            'confirm_password' => Hash::make($this->confirm_password),
            'dob' => $this->dob,
            'phone' => $this->phone,
            'gender' => $this->gender,
            'appointment_date'=>$this->appointment_date,
            'description' => $this->description,
        ]);
        session()->flash('message', 'Your Appointment is successfully made !');
        $this->reset();
        return $this->redirect('/new/appointment',navigate:true);
    }

    public function render()
    {
        return view('livewire.appointment-form');
    }
}
