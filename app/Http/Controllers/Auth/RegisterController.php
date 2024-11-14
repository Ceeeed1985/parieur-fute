<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //Afficher le formulaire d'inscription
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
}
