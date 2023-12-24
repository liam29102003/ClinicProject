<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class DoctorTable extends Component
{  
    // #[Reactive]
     public $text2='';
    //  #[Reactive]
     public $text='';


     public function delete()
     {
         // dd($this->text2);
         $post = Doctor::find($this->text2);
 
         if ($post) {
             $post->delete();
         }
         session()->flash('status', 'Successfully deletedd.');
 
         // You can add a confirmation message or redirect to another page if needed.
     }
    public function show()
    {
        dd($this->text2);
    }
    public function changevalue($id, $text)
    {
        $this->text = $text;

        $this->text2 = $id;
    }
   
    public function render()
    {

        return view('livewire.doctor-table')
        ->with(
            [
                'doctors' => Doctor::all()
            ]
        );;
    }
}
