@extends('layouts.main-layout')
@section('content')

    <main>
        <h3>Show Tipologia:</h3>
        <div>
            <strong>Nome: </strong>{{$arrayTipologia -> name}} <br>
            <strong>Descrizione: </strong>{{$arrayTipologia -> description}}
        </div>
        <h3>Incarico:</h3>
        <div>
            <ul>
                @foreach ($arrayTipologia -> tasks as $item)
                    <li>
                        Titolo: {{$item -> title}} <br>
                        Descrizione: {{$item -> description}} <br>
        
                        {{-- @foreach ($item -> employee as $element)
                            {{$element -> name}}
                        @endforeach --}}

                    </li>
                <br>
                @endforeach
            </ul>

            {{-- <strong>Nome: </strong>{{$arrayTipologia -> tasks[0] -> title}} --}}
            {{-- si puó fare ma prenderebbe solo il primo elemento dell'task, quindi meglio automatizzare con foreach --}}
        </div>
    </main>
    
@endsection