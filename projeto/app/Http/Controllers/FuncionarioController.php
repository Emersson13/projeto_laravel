<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function mostrarDados(){
        return "Estou na classe FuncionarioController";
    }
    public function show(){
        return view("funcionario",[
            "nome"=>"Operário Junior",
            "salario"=>2000
        ]);
    }
}
