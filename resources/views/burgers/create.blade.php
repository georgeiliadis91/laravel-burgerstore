@extends('layouts.app')

@section('content')
<div class="wrapper create-burger">
  <h1>Create a new burger</h1>
  <form action="/burgers" method="post">
    @csrf
    <label for="name">Your name</label>
    <input type="text" id="name" name="name">
    <label for="patty">Choose burger patty:</label>
    <select name="patty" id="patty">
      <option value="beef">Beef</option>
      <option value="camel">Camel</option>
      <option value="buffalo">Buffalo</option>
    </select>
    <label for="base">Choose burger base:</label>
    <select name="base" id="base">
      <option value="whole grain">Whole grain</option>
      <option value="white bread">White bread</option>
      <option value="rice bread">Rice bread</option>
    </select>
    <fieldset>
    <label for="">Extra Topppings</label>
    </br>
    <input type="checkbox" name="toppings[]" value="pickles">Pickles</br>
    <input type="checkbox" name="toppings[]" value="tomato">Tomato</br>
    <input type="checkbox" name="toppings[]" value="peppers">Peppers</br>
    <input type="checkbox" name="toppings[]" value="olives">Olives</br>
    </fieldset>
    <input type="submit" value="Order Burger">
  </form>


</div>

@endsection