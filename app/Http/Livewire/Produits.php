<?php

namespace App\Http\Livewire;

use App\Models\Astuce;
use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Produits extends Component
{
    use WithFileUploads;
    protected $listeners = ['remove'];

    public $status = "listProduct";
    public $tva;
    public $astuce;
    public $current_produit;
    public $idDeleting;
    public $image_produit = null;

    public $form = [
        'nom' => '',
        'description' => '',
        'prix' => '',
        'categories' => [],
    ];

    protected $rules = [
        'form.nom' => 'required|string',
        'form.description' => 'required|string',
        'form.tarif' => 'required',
    ];

    protected $messages = [
        'form.nom.required' => 'Le nom est requis',
        'form.description.required' => 'La description est requise',
        'form.tarif.required' => 'Le tarif est requis',
    ];

    public function getProduct($id){
        $this->status="editProduct";
        $this->initForm();

        $this->current_produit = Produit::where('id', $id)->first();
        $this->form['id'] = $this->current_produit->id;
        $this->form['nom'] = $this->current_produit->nom;
        $this->form['description'] = $this->current_produit->description;
        $this->form['tarif'] = $this->current_produit->tarif;
        $this->form['categories'] = $this->current_produit->categories;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function deleteProduct($id){
        $this->idDeleting = $id;
        $this->alertConfirm();
    }

    public function alertConfirm()
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'message' => 'Êtes-vous sûr?',
            'text' => 'Vouliez-vous supprimer?'
        ]);
    }

    public function remove()
    {

        $produit = Produit::where('id', $this->idDeleting)->first();
        $produit->delete();
        $this->astuce->addHistorique('Suppression d\'un produit/service', "delete");
        /* Write Delete Logic */
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Produit/Service',
            'text' => 'Suppression avec succéss!.'
        ]);
        return redirect()->to('/produits');
        $this->status = "listProduct";
    }

    public function store(){
        
        $this->validate();
        if (count($this->form["categories"]) > 0) {
            
            if(isset($this->current_produit->id) && $this->current_produit->id !== null){
                $produit = Produit::where("id", $this->current_produit->id)->first();
    
                $produit->nom = $this->form['nom'];
                $produit->description = $this->form['description'];
                $produit->type = $this->form['type'];
                $produit->tarif = $this->form['tarif'];
                $produit->taxe = $this->form['taxe'];
    
                $produit->save();
                $this->dispatchBrowserEvent("updateSuccessful");
                return redirect()->to('/produits');
                $this->status =  "listProduct";
                $this->initForm();
    
            }else{
                
                if ($this->image_produit) {
                    $this->validate([
                        'image_produit' => 'image'
                    ]);
                     $produit = Produit::get();

                    $imageName = 'produit'.\md5(count($produit)).'jpg';
        
                    $this->image_produit->storeAs('public/images', $imageName);
        
                    $prod = new Produit();
                    $prod->nom = $this->form['nom'];
                    $prod->description = $this->form['description'];
                    $prod->image = $imageName;
                    $prod->prix = $this->form['tarif'];

                    $prod->save();

                    foreach ($this->form['categories'] as $slug) {
                       $cat = Categorie::where("slug", $slug)->first();
                        $prod->categories()->attach($cat);
                    }
            
                    $this->dispatchBrowserEvent("addSuccessful");
                    return redirect()->to('/produits');
                    $this->status =  "listProduct";
                    $this->initForm();
        
        
                    $this->image_produit = "";

                }else{
                    $this->dispatchBrowserEvent("noImage");
                }
                
            }
        }else{
            $this->dispatchBrowserEvent("noCategory");
        }
        
    }

    public function editImage()
    {
        if ($this->image_produit) {
            $this->validate([
                'image_produit' => 'image'
            ]);
            $imageName = 'produit'.\md5($this->current_produit->id).'jpg';

            $this->image_produit->storeAs('public/images', $imageName);

            $produit = Produit::where('id', $this->current_produit->id)->first();

            $produit->image_produit = $imageName;
            $produit->save();


            $this->image_produit = "";
            $this->dispatchBrowserEvent('imageEditSuccessful');
            $this->getProduct($this->current_produit->id);
        }
    }


    public function initForm(){
        $this->form['id']=null;
        $this->form['nom']='';
        $this->form['description']='';
        $this->form['type']='';
        $this->form['tarif']='';
        $this->form['taxe']='';
    }

    public function changeEtat($etat){
        $this->status = $etat;
        $this->initForm();
    }

    public function render()
    {
        $this->astuce = new Astuce();

        return view('livewire.produits', [
            "produits" => Produit::orderBy('id','DESC')->get(),
            "categories" => Categorie::orderBy("name", "ASC")->get()
        ])->layout('layouts.admin',[
            'title' => 'Produits',
            "page" => "produit",
            "icon" => "fab fa-product-hunt",

        ]);
    }

    public function mount(){
        if(!Auth::user()){
            return redirect(route('login'));
        }
    }
}
