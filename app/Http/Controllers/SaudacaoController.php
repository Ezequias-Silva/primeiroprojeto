<?php

namespace App\Http\Controllers;   //define o nome completo da classe

use Illuminate\Http\Request;

class SaudacaoController extends Controller
{
  public function ola(){
    return view('saudacao.ola');  //saudacao é nome da classe .ola é o nome do arquivo
  }
}
