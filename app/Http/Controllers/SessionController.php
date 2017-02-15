<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['except'=>'destroy']);
    }

    public function create(){
        return view('session.create');
    }

    public function store(){
        //Получить данные и авторизироваться
       // dd(auth()->login());
        //Если ок, авторизация

        if(! auth()->attempt(request(['email','password']))){
            //Если не вышло, вернуть на прошлую страницу
            return back()->withErrors([
                'message'=>'Check email and password'
            ]);
        }

        //Редирект на главную
        return redirect()->home();
    }

    public function destroy() {
        auth()->logout();
        return redirect()->home();
    }
}
