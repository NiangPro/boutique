<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use App\Models\Produit;
use Livewire\Component;

class DetailsCategorie extends Component
{
    public $title ="detail";
    public $cats;

    public function render()
    {
        return view('livewire.details-categorie',[
            "categories" => Categorie::orderBy("name", "ASC")->get(),
            "lastProducts" => Produit::orderBy('id', "DESC")->get()
        ])->layout("layouts.theme");
    }

    public function mount($nom){
        $this->cats = Categorie::where("slug", $nom)->first();
    }
}
