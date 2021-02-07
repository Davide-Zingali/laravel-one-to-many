@extends('layouts.main-layout')
@section('content')
    
    <main>
        <h2>
            <a class="home" href="{{route('home')}}">HOME</a>
        </h2>
        <h2>
            Index Employee
        </h2>

        <div>
            <button>
                <a href="{{route('create-employee')}}">
                    Add Element
                </a>
            </button>
            <ul>
                @foreach ($arrayDipendenti as $element)
                    <li>
                        <a href="{{route('show-employee', $element -> id)}}">
                            Dipendente: {{$element -> name}}
                        </a>
                        <ul>
                            @foreach ($element -> Tasks as $item)
                                <li>
                                    Incarico: {{$item -> title}} <br>
                                    Descrizione: {{$item -> description}} <br>
                                    Prioritá: {{$item -> priority}}
                                    (Nome: {{$item -> employee -> name}},
                                    Cognome: {{$item -> employee -> lastname}});
                                </li>
                            @endforeach
                            <br>
                        </ul>               
                    </li>
                @endforeach
            </ul>
        </div>
    </main>

@endsection