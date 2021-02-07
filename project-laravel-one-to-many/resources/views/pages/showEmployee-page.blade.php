@extends('layouts.main-layout')
@section('content')

    <main>
        <h2>Show Dipendente:</h2>
        <div>
            <strong>Nome: </strong>{{$arrayDipendente -> name}} <br>
            <strong>Cognome: </strong>{{$arrayDipendente -> lastname}} <br>
            <strong>Data di nascita: </strong>{{$arrayDipendente -> dateOfBirth}} <br>

        </div>
        <ul>
            <h3>
                Incarico:
            </h3>
            <div>
                @foreach ($arrayDipendente -> tasks as $item)
                    <li>
                        <strong>Prioritá: </strong>{{$item -> priority}} <br>
                        <strong>Titolo: </strong>{{$item -> title}} <br>
                        <strong>Descrizione: </strong>{{$item -> description}}
                    </li>   
                    <br>
                @endforeach
            </div>
        </ul>
    </main>
    
@endsection