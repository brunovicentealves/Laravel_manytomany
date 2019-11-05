<?php

namespace App\Http\Controllers;


use App\Acesso;
use App\Usuario;
use Illuminate\Http\Request;

class ManyController extends Controller
{
    public function manyRoles()
    {
 
        $usuario = Usuario::find(1);
        $acesso = Acesso::find(3);
    
        return view('index',compact('usuario','acesso'));
       
    }
}
