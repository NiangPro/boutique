<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use Livewire\Component;

class Contact extends Component
{
    public $title ="contact";

    public function render()
    {
        return view('livewire.contact',[
            "categories" => Categorie::orderBy("name", "ASC")->get()
        ])->layout("layouts.app");
    }
}
