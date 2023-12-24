<?php

namespace App\Livewire;

use App\Models\Room;
use App\Models\Doctor;
use Livewire\Component;
use App\Models\Schedule;
use GuzzleHttp\Psr7\Request;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;

class AddDoctor extends Component
{

    #[Validate('required|min:3')]

    public $name = '';
    #[Validate('required|min:3')]

    public $speciality = '';
    #[Validate('required|min:3')]

    public $qualification = '';
    #[Validate('required|min:3')]

    public $gender = '';
    #[Validate('required|min:3')]

    public $bio = '';
    #[Validate('required|min:3')]

    public $email = '';
    #[Validate('required|min:3')]

    public $phone = "";
    #[Validate('required|min:3')]

    public $password = 'EverCareDoctor';

    public function save()
    {
        $validated = $this->validate();
        $hashedPassword = Hash::make($this->password);

        Doctor::create(
            [
                'name' => $this->name,
                'speciality' => $this->speciality,
                'qualification' => $this->qualification,
                'gender' => $this->gender,
                'bio' => $this->bio,
                'email' => $this->email,
                'phone' => $this->phone,
                'password' => $hashedPassword,
                'created_at' => now(),
                'updated_at' => now(),
                
                
            ]
        );
        session()->flash('status', 'Doctor successfully added.');
        $this->reset();

    }
 
    public function render()
    {

        // $rooms = Room::whereNotIn(
        //     'id',
        //     Schedule::whereIn('day', $this->days)
        //         ->where(function ($query) {
        //             $query->whereBetween('to', [$this->from, $this->to])
        //                 ->orWhereBetween('from', [$this->from, $this->to]);
        //         })
        //         ->pluck('id')
        // )->get();
        return view('livewire.add-doctor');
    }
}
