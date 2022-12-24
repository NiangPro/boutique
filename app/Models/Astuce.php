<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Astuce extends Model
{
    use HasFactory;

    public function createFirstAdmin()
    {
        $user = User::first();

        if (!$user) {
           User::create([
            "prenom" => "fatou",
            "nom" => "ndiaye",
            "tel" => "778764636",
            "adresse" => "yoff",
            "role" => "admine",
            "email" => "fatou@gmail.com",
            "password" => Hash::make("admin@1")
           ]);
        }
    }
}
