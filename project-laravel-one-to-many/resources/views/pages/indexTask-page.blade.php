@extends('layouts.main-layout')
@section('content')

    <main>
        <h2>
            Index Incarichi
        </h2>
        <div>
            <ul>
                {{$arrayIncarichi[0] -> title}}
                {{$arrayIncarichi -> Employee -> name}}

                {{-- @foreach ($arrayIncarichi as $element)
                    Titolo: {{$element -> title}} <br>
                    Descrizione: {{$element -> description}} <br>
                    <br>
                    @foreach ($element -> Employee as $item)
                        Nome dipendente: {{$item -> name}}
                    @endforeach
                @endforeach --}}
            </ul>
        </div>
    </main>
    
@endsection