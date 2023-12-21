<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;

class DoctorList extends Component
{
    public function render()
    {
        return view('livewire.doctor-list')->with(
            [
                'doctors' => Doctor::all()
            ]
        );
    }
}
