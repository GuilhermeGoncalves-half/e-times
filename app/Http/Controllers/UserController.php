<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function store (Request $request){

        $request->validate([
            'name' => 'required|string|max:255', //nome obrigatório, deve ser uma string com no máximo 255 caractéres
            'email' => 'required|email|unique:users,email', //email obrigatório, deve ser um endereço de email unico no campo email na tabela users
            'password' => 'required|min:6|confirmed', //senha obrigatória com no mínimo 6 caractéres e deve ser confirmada
        ],[
            'required' => 'O campo :attribute é obrogatório.',
            'email' => 'Digite um :attribute válido.',
            'min' => 'O campo :attribute deve ter pelo menos :min caracteres. ',
            'confirmed' => 'As senhas não coincidem.',

        ],[
            'name' => 'nome',
            'email' => 'e-mail',
            'password' => 'senha',
        ]);
        //criando um objeto usuário no sistema
        $user = new User();
        
        //definindo seus atributos 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password  = $request->password;

        //salvando no BD
        $user->save();

        //redirecionar o usuário para a rota inicial
        return redirect("/");
    }//fim do store
}
