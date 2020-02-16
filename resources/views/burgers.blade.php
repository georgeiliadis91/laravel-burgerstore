@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Burger List
        </div>
        {{$name}}
        {{$age}}

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
            {{$burger['type']}}
            {{$burger['meat']}}
            @if($loop->first)
            <span>-first in the loop-</span>
            @endif
            @if($loop->last)
            <span>-last in the loop-</span>
            @endif
        </div>
        @endforeach

    </div>
</div>

@endsection