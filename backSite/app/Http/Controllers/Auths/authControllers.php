<?php

namespace App\Http\Controllers\Auths;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authControllers extends Controller
{
    public function register(){
        return view("Front.register");
    }

    public function registerStore(Request $request){
        $validated = $request->validate(
            [
                'name' => ["required", "string", "min:4"],
                'username' => ["required", "string", "min:4"],
                'password' => ["required", "string", "min:4"],
            ]
            );
            User::query()->create($validated);
            return redirect()->route("login")->with("success", "Inscription réussi! Veuillez vous connectrer");
    }

    public function login(){
        return view("Front.login");
    }

    public function loginStore(Request $request){
        $validated = $request->validate([
            'username' => ["required", "string", "min:4"],
            'password' => ["required", "string", "min:4"],
        ]);
        if(Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect()->route("dashboard")->with("success", "Connexion réussi");
        }
        return redirect()->back()->with("error", "Connexion échoué");
    }
}
