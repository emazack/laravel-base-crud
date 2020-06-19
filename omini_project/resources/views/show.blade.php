@extends('layouts.main')

@section('content')

  <div class="omini">

    <h1>OMINIDE {{ $id }}</h1>
    <hr>
    <br>
    first_name : {{ $omino['first_name'] }} <br>
    last_name : {{ $omino['last_name'] }} <br>
    address : {{ $omino['address'] }} <br>
    code : {{ $omino['code'] }} <br>
    state : {{ $omino['state'] }} <br>
    phone_number : {{ $omino['phone_number'] }} <br>
    role : {{ $omino['role'] }} <br>

    <a href={{ route("home")}}>
      <br>
      <hr>

      Torna indietro
    </a>
    <a href={{ route("destroy", $omino['id'])}}>
      <br>
      <hr>

      CANCELLA STO BASTARDO
    </a>
    <a href={{ route("edit", $omino['id'])}}>
      <br>
      <hr>

      MODIFICA I DATI
    </a>


  </div>


@endsection
