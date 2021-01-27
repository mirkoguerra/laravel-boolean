<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LezioneGratuitaController extends Controller
{
  public function index()
  {
    return view('lezione-gratuita');
  }
}
