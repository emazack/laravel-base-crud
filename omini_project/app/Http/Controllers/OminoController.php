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

    public function create() {

      return view('omino-create');
    }

    public function store(Request $request) {

      $data = $request -> all();

      $omino = new Omino;

      $omino -> first_name = $data['name'];
      $omino -> last_name = $data['lastname'];
      $omino -> address = $data['address'];
      $omino -> code = $data['code'];
      $omino -> state = $data['state'];
      $omino -> phone_number = $data['phone'];
      $omino -> role = $data['role'];

      $omino -> save();

      return redirect() -> route('home');
    }
    public function edit($id) {
      $omino = Omino::findOrFail($id);
      return view('omino-edit', compact('omino'));
    }

    public function update(Request $request, $id) {

      $data = $request -> all();
      $omino = Omino::findOrFail($id);

      $omino -> first_name = $data['name'];
      $omino -> last_name = $data['lastname'];
      $omino -> address = $data['address'];
      $omino -> code = $data['code'];
      $omino -> state = $data['state'];
      $omino -> phone_number = $data['phone'];
      $omino -> role = $data['role'];

      $omino -> save();

      return redirect() -> route('home');

    }

}
