<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

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
        $new_user = request(['name','email','password']);
        $new_user['password'] = bcrypt($new_user['password']);
        //Создать и сохранить
        $user = User::create($new_user);
        //Авторизировать полльзователя
        auth()->login($user);
        //Перенавправить на главную
        return redirect()->home();
    }


}
