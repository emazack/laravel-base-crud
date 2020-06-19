<?php

namespace App\Http\Controllers;

use App\Omino;

use Illuminate\Http\Request;

class OminoController extends Controller
{
    public function index() {

      $omini = Omino::all();
      return view('home', compact('omini'));
    }

    public function show($id) {

      $omino = Omino::findOrFail($id);
      return view('show', compact('omino', 'id'));

    }

    public function delete($id) {
      $omino = Omino::findOrFail($id);
      $omino ->delete();

      return redirect() -> route('home');
    }
}
