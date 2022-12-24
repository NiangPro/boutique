<?php

namespace App\Http\Livewire;

use App\Models\Astuce;
use Livewire\Component;

class Login extends Component
{
    public $astuce;
    public function render()
    {
        $this->astuce = new Astuce();
        return view('livewire.login')->layout("layouts.app");
    }

    public function mount()
    {
        $this->astuce = new Astuce();
        $this->astuce->createFirstAdmin();
    }
}
