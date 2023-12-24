<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;

class DoctorDetails extends Component
{
    public $id;
    // public function mount($id)
    // {
    //     $this->id = $id;
    // }
    public function render()
    {
        
        return view('livewire.doctor-details');
    }
}
