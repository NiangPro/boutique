<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use App\Models\Produit;
use Livewire\Component;

class Home extends Component
{
    public $title ="home";

    public function render()
    {
        return view('livewire.home',[
            "categories" => Categorie::orderBy("name", "ASC")->get(),
            "lastProducts" => Produit::orderBy('id', "DESC")->get()
        ])->layout("layouts.app");
    }
}
