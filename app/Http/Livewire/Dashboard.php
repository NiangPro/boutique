<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard')->layout('layouts.admin',[
            'title' => 'Tableau de bord',
            "page" => "dashboard",
            "icon" => "fa fa-home",
        ]);
    }
}
