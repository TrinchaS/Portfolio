<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    //este ya no haria falta
    public function login(){
        return view('admin.login');
    }

    public function loguear(LoginRequest $request){
        if(Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
            ])
        ){
            return Redirect::action([AdminController::class,'index']);
        }
        //en este si dejo el login tengo que re dirijirlo a AdminController::class login
        return Redirect::action([AdminController::class,'login'])->withErrors(['login'=>'usuario o cantraseña invalida']);
    }

    public function logout(){
        Auth::logout();
        return Redirect::action([HomeController::class,'index']);
    }

    public function creandoUsuario(){
        return view('admin.creandoUsuario');
    }

    public function creaUsuario(Request $request){
        $nuevo = new User();
        $nuevo->name = $request->input('name');
        $nuevo->email = $request->input('email');
        $pass = $request->input('password');
        $nuevo->password = Hash::make($pass);
        $nuevo->save();
    }
}
