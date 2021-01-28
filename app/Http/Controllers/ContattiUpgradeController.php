<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ContattiUpgrade;

class ContattiUpgradeController extends Controller
{
  public function index()
  {
    $users_special = ContattiUpgrade::all();

    return view('contatti-upgrade', compact('users_special'));
  }

  public function show($id)
  {
    $user_special = ContattiUpgrade::find($id);

    return view('contatto-upgrade', compact('user_special'));
  }
}
