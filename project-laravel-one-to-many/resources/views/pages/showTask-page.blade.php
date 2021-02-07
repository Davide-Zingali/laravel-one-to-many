@extends('layouts.main-layout')
@section('content')

    <main>
        <h3>Show Incarico:</h3>
        <div>
            <strong>Prioritá: </strong>{{$arrayIncarico -> priority}} <br>
            <strong>Titolo: </strong>{{$arrayIncarico -> title}} <br>
            <strong>Descrizione: </strong>{{$arrayIncarico -> description}}
        </div>
        <h3>Dipendente:</h3>
        <div>
            <strong>Nome: </strong>{{$arrayIncarico -> employee -> name}} <br>
            <strong>Cognome: </strong>{{$arrayIncarico -> employee -> lastname}} <br>
            <strong>Data di nascita: </strong>{{$arrayIncarico -> employee -> dateOfBirth}}
        </div>
    </main>
    
@endsection