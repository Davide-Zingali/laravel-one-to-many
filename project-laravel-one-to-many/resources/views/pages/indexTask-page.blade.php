@extends('layouts.main-layout')
@section('content')

    <main>
        <h2>
            <a class="home" href="{{route('home')}}">HOME</a>
        </h2>
        <h2>
            Index Incarichi
        </h2>
        <div>
            <ul>
                @foreach ($arrayIncarichi as $element)
                <li>
                    <a href="{{route('show-task', $element -> id)}}">
                        Id: {{$element -> id}} - 
                        Titolo: {{$element -> title}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </main>
    
@endsection