@extends('layouts.main-layout')
@section('content')

    <main>
        <h2>
            <a href="{{route('create-typology')}}">Add Typology</a>
        </h2>
        <h2>
            <a class="home" href="{{route('home')}}">HOME</a>
        </h2>
        <h2>Typologyes</h2>
        <div>
            <ul>
                @foreach ($arrayTipologiee as $item)
                    <li>
                        <a href="{{route('show-typology', $item -> id)}}">
                            Nome: {{$item -> name}}                           
                        </a>
                    </li>
                    <br>
                @endforeach

            </ul>
        </div>
    </main>
    
@endsection