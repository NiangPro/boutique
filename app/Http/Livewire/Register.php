<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $title ="register";

    public $form = [
        "prenom",
        "nom",
        "tel",
        "adresse",
        "email",
        "password",
        "password_confirmation",
    ];

    protected $rules = [
        'form.prenom' => 'required|string',
        'form.nom' => 'required|string',
        'form.adresse' => 'required|string',
        'form.email' => ['required', 'email', 'unique:users,email'],
        'form.password' => 'required|confirmed',
        'form.tel' => ['required', 'min:9', 'max:9', 'regex:/^[33|70|75|76|77|78]+[0-9]{7}$/'],
        
    ];

    protected $messages = [
        'form.prenom.required' => 'Le prenom est requis',
        'form.nom.required' => 'Le nom est requis',
        'form.adresse.required' => 'L\'adresse est requise',
        'form.tel.required' => 'Le telephone est requis',
        'form.tel.regex' => 'Le n° de telephone est invalide',
        'form.tel.min' => 'Le n° de telephone doit avoir au minimum 9 chiffres',
        'form.tel.max' => 'Le n° de telephone doit avoir au maximum 9 chiffres',
        'form.email.required' => "L'email est requis",
        'form.email.unique' => "L'email existe deja",
        'form.password.required' => "Le mot de passe est requis",
        'form.password.confirmed' => "Les deux mots de passe sont differents",
    ];

    public function store()
    {
        $this->validate();

        User::create([
            "prenom" => $this->form["prenom"],
            "nom" => $this->form["nom"],
            "tel" => $this->form["tel"],
            "adresse" => $this->form["adresse"],
            "email" => $this->form["email"],
            "password" => Hash::make($this->form["password"]),
            "role" => "client",
        ]);

        return redirect(route("login"));
    }

    public function render()
    {
        return view('livewire.register',[
            "categories" => Categorie::orderBy("name", "ASC")->get()
        ])->layout("layouts.app");
    }
}
