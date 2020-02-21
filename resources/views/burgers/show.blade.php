@extends('layouts.layout')

@section('content')
<div class="wrapper burger-details">
  <h1>Orger for {{$burger->name}}</h1>
  <p class="type">Type is - {{$burger->patty}}</p>
  <p class="base">base is - {{$burger->base}}</p>
</div>
<a href="/burgers" class="back">
  <- Back to all burgers </a> @endsection