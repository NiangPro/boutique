<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use App\Models\Produit;
use Livewire\Component;

class Details extends Component
{
    public $title ="detail";
    public $prod;

    public function render()
    {
        return view('livewire.details',[
            "categories" => Categorie::orderBy("name", "ASC")->get(),
            "lastProducts" => Produit::orderBy('id', "DESC")->get()
        ])->layout("layouts.app");
    }

    public function mount($slug){
        $this->prod = Produit::where("nom", $slug)->first();
    }
}
