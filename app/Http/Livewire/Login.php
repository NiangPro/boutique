<?php

namespace App\Http\Livewire;

use App\Models\Astuce;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $astuce;
    public $title ="login";


    public $form = [
        "email" => "",
        "password" => "",
    ];

    protected $rules = [
        "form.email" => "required|email",
        "form.password" => "required",
    ];

    public function connecter(){
        $this->validate();
        if(Auth::attempt(['email' => $this->form['email'], 'password' => $this->form['password']]))
        {
            if (Auth::user()->role == "admin") {
                return redirect(route("dashboard"));
            }else{
                return redirect(route('shop'));
            }
        }
    }
    public function render()
    {
        $this->astuce = new Astuce();
        return view('livewire.login',[
            "categories" => Categorie::orderBy("name", "ASC")->get()
        ])->layout("layouts.app");
    }

    public function mount()
    {
        $this->astuce = new Astuce();
        $this->astuce->createFirstAdmin();
    }
}
