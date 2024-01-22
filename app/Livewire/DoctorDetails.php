<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;
use App\Models\Schedule;
use Livewire\Attributes\Validate;

class DoctorDetails extends Component
{
    
    public $doctor_id;
    #[Validate('required')]

    public $day;
    #[Validate('required|min:3')]

    public $to;
    #[Validate('required|min:3')]

    public $from;
   public function mount($doctor_id)
    {
        
        $this->doctor_id = $doctor_id;
    }
    public function store()
    {
        $this->validate();
        $schedule = new Schedule();
        $schedule->day = $this->day;
        $schedule->to = $this->to;
        $schedule->from = $this->from;
        $schedule->doctor_id = $this->doctor_id;
        $schedule->save();
        session()->flash('status', 'Schedule successfully added.');
        
        return $this->redirect('/admin/doctor/details/'.$this->doctor_id,navigate:true);
    }
    
    public function delete($id)
    {
        Schedule::where('id',$id)->delete();
        session()->flash('status', 'Schedule successfully deleted.');
        
        return $this->redirect('/admin/doctor/details/'.$this->doctor_id,navigate:true);    }
    
    public function render()
    {
        $doctor =Doctor::where('id',$this->doctor_id)->first();
        $schedules = Schedule::where('doctor_id',$this->doctor_id) ->get();
        return view('livewire.doctor-details')->with(compact('doctor','schedules'));
    }
}
