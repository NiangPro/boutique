<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use Livewire\Component;

class Cart extends Component
{
    public $title ="cart";
    public function render()
    {
        return view('livewire.cart',[
            "categories" => Categorie::orderBy("name", "ASC")->get()
        ])->layout("layouts.app");
    }
}
