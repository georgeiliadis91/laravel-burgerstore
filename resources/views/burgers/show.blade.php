@extends('layouts.app')

@section('content')
<div class="wrapper burger-details">
  <h1>Order for {{$burger->name}}</h1>
  <p class="type">Type is - {{$burger->patty}}</p>
  <p class="base">base is - {{$burger->base}}</p>
  <p class="toppings">Extra toppings
  <ul>
  @foreach($burger->toppings as $topping)
  <li>{{$topping}}</li>
  @endforeach
  
  </ul>
 
  </p>
</div>
<a href="/burgers" class="back">
  <- Back to all burgers </a> 

  <form action="/burgers/{{$burger->id}}" method="POST">
  @csrf
  @method('DELETE')
  <button >Complete Order</button>
  </form>

  @endsection