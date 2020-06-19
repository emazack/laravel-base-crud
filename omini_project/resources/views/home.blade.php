@extends('layouts.main')

@section('content')

  <div class="omini">

    <h1>OMINIDI</h1>
    <hr>
    <br>
    <ul>
      @foreach ($omini as $omino)
        <li>
          <b>Nome: </b> <a href={{ route("show", $omino['id']) }}>{{ $omino['first_name'] }}</a>
        </li>
      @endforeach
    </ul>

  </div>

@endsection
