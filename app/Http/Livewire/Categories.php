<?php

namespace App\Http\Livewire;

use App\Models\Astuce;
use App\Models\Categorie;
use Livewire\Component;

class Categories extends Component
{
    public $status = "list";
    public $astuce; 
    public $idDeleting;
    public $current_categorie;
    protected $listeners = ['remove'];
    public $form = [
        "name" => "",
        "slug" => "",
        "id" => null
    ];

    protected $rules = [
        "form.name" => "required"  
    ];

    public function delete($id){
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

    // delete reunion
    public function remove(){
        $cat = Categorie::where("id", $this->idDeleting->id)->first();
        $cat->delete();

        /* Write Delete Logic */

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Catégorie',
            'text' => 'Suppression avec succéss!.'
        ]);
        $this->status="list";
    }

    public function changeStatus($status){
        $this->status = $status;
    }

    public function back(){
        $this->status = "list";
    }

    public function store(){
        $this->validate();
        $name = explode(" ", $this->form['name']);
        $this->form['slug'] = implode("_", $name);

        if ($this->form['id']) {
            $cat = Categorie::where('id', $this->form['id'])->first();

            $cat->name = $this->form['name'];
            $cat->slug = $this->form['slug'];

            $cat->save();
            $this->dispatchBrowserEvent("addSuccessful");
        }else{
            
        
            Categorie::create([
                "name" => $this->form['name'],
                "slug" => $this->form['slug'],
            ]);

            $this->dispatchBrowserEvent("addSuccessful");
        }
        $this->initForm();
        $this->status = "list";
    }

    public function getCategorie($id){
        $this->status="edit";

        $this->current_categorie = Categorie::where('id', $id)->first();
        $this->form['id'] = $this->current_categorie->id;
        $this->form['name'] = $this->current_categorie->name;
        $this->form['slug'] = $this->current_categorie->slug;
    }

    public function render()
    {
        $this->astuce = new Astuce();
        return view('livewire.categories', [
            "categories" => Categorie::orderBy("name", "ASC")->get()
        ])->layout('layouts.admin',[
            'title' => 'Catégories',
            "page" => "categorie",
            "icon" => "fa fa-tags",
            
        ]);
    }

    public function initForm(){
        $this->form['name'] = "";
        $this->form['slug'] = "";
        $this->form['id'] = null;
    }
}
