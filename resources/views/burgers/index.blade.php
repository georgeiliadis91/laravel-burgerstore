@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Burger List
        </div>

        <!-- @for($i=0;$i<5;$i++)
                   <p>the value of i is {{$i}}</p>
               @endfor

                @for($i=0;$i<count($burgers);$i++)
                    <p>{{$burgers[$i]['type']}}</p>
                    <p>{{$burgers[$i]['meat']}}</p>
                @endfor -->

        @foreach($burgers as $burger)
        <div>
            {{$loop->index}}
            {{$burger->name}}-{{$burger->base}}-{{$burger->patty}}
        </div>
        @endforeach

    </div>
</div>

@endsection