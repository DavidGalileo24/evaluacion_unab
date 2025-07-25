<?php

namespace App\Livewire;

use Livewire\Component;

class RegistrationComponent extends Component
{
    public function render()
    {
        return view('livewire.registration-component');
    }

    
    public $id_card = '';
    public $code = '';
    public function save()
    {
        //Stored here
        session()->flash('status', 'Se ha matrículado satisfactoriamente');
        return $this->redirect('/dashboard');
    }
}
