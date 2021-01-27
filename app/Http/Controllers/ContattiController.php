<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contatti;

class ContattiController extends Controller
{
  public function index()
  {
    $users = Contatti::all();

    return view('contatti', compact('users'));
  }
}
