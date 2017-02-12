<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration.create');
    }

    public function store(){
        //Валидация
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);
        //Создать и сохранить
        $user = User::create(request([
            'name',
            'email',
            'password'
        ]));
        //Авторизировать полльзователя
        auth()->login($user);
        //Перенавправить на главную
        return redirect()->home();
    }


}
