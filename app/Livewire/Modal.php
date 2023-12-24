<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;
use App\Livewire\DoctorTable;
use Livewire\Attributes\Reactive;

class Modal extends Component
{
    
    public $text="";
    // #[Reactive]
    public $text2="";

  
    // public function mount($text,$text2)
    // {
    //     $this->text2 = $text2;
    //     $this->text = $text;

    // }
    // #[Reactive]
    public function delete()
    {
        // dd($this->text2);
        $post = Doctor::find($this->text2);

        if ($post) {
            $post->delete();
        }
        session()->flash('status', 'Successfully deletedd.');
        $this->redirect('/doctor/list');


        // You can add a confirmation message or redirect to another page if needed.
    }
    public function render()
    {
        
        return view('livewire.modal');
    }
}
