<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {

        // Validacion
        $this->validate($request, [
            "name" => "required",
            "username" => "required|unique:users|min:3|max:20|alpha_dash",
            "email" => "required|unique:users|email|max:60",
            "password" => "required|confirmed",
        ]);

        User::create([
            "name" => $request->name,
            "username" => Str::slug( $request->username),
            "email" => $request->email,
            "password" => $request->password


        ]);

        // Autenticar
        auth()->attempt($request->only("email","password"));

        // Redireccionar
        return redirect()->route("posts.index");
    }
}
