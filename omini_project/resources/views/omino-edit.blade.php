@extends('layouts.main')

@section('content')

  <div class="">

    <form action="{{ route('update', $omino['id']) }}" method="post">
      @csrf
      @method('POST')

      <label for="name"> <b>Name</b> </label>
      <input type="text" name="name" value="{{$omino['first_name']}}">
      <br>
      <br>
      <label for="lastname"> <b>lastname</b> </label>
      <input type="text" name="lastname" value="{{$omino['last_name']}}">
      <br>
      <br>
      <label for="address"> <b>address</b> </label>
      <input type="text" name="address" value="{{$omino['address']}}">
      <br>
      <br>
      <label for="code"> <b>code</b> </label>
      <input type="text" name="code" value="{{$omino['code']}}">
      <br>
      <br>
      <label for="state"> <b>state</b> </label>
      <input type="text" name="state" value="{{$omino['state']}}">
      <br>
      <br>
      <label for="phone"> <b>phone</b> </label>
      <input type="text" name="phone" value="{{$omino['phone_number']}}">
      <br>
      <br>
      <label for="role"> <b>role</b> </label>
      <input type="text" name="role" value="{{$omino['role']}}">
      <br>
      <br>

      <input type="submit" name="submit" value="UPDATE">
    </form>

  </div>
@endsection
