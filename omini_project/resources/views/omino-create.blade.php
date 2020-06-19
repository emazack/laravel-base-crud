@extends('layouts.main')

@section('content')

  <div class="">

    <form action="{{ route('store') }}" method="post">
      @csrf
      @method('POST')

      <label for="name"> <b>Name</b> </label>
      <input type="text" name="name" value="">
      <br>
      <br>
      <label for="lastname"> <b>lastname</b> </label>
      <input type="text" name="lastname" value="">
      <br>
      <br>
      <label for="address"> <b>address</b> </label>
      <input type="text" name="address" value="">
      <br>
      <br>
      <label for="code"> <b>code</b> </label>
      <input type="text" name="code" value="">
      <br>
      <br>
      <label for="state"> <b>state</b> </label>
      <input type="text" name="state" value="">
      <br>
      <br>
      <label for="phone"> <b>phone</b> </label>
      <input type="text" name="phone" value="">
      <br>
      <br>
      <label for="role"> <b>role</b> </label>
      <input type="text" name="role" value="">
      <br>
      <br>

      <input type="submit" name="submit" value="CREATE">
    </form>

  </div>
@endsection
