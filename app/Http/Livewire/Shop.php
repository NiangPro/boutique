<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use App\Models\Produit;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Shop extends Component
{
    use WithFileUploads, WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $title ="shop";
    public $produitsCat = [];
    protected $produits;

    public function getProduits($slug){
        $cat = Categorie::where('slug', $slug)->first();

        dd($cat);
        $this->produitsCat = $cat->produits;
        $this->trouve = true;
    }

    public function render()
    {
        $this->produits= Produit::orderBy('id', 'DESC')->paginate(6);
        return view('livewire.shop',[
            "categories" => Categorie::orderBy("name", "ASC")->get(),
            "lastProducts" => Produit::orderBy('id', "DESC")->get(),
            "products" => $this->produits

        ])->layout("layouts.app");
    }
}
