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

{{-- GOAL: definire migration, model, factory e seeder per le seguenti entita':
- employee: name, lastname, dateOfBirth
- task: title, description, priority (valore intero da 1 a 5)
Dopo aver creato tabelle, aggiunto relazioni, inserito dati fake, produrre le due index (per le due entita') come visto a lezione.
OPZIONALE: provare a fare le altre funzioni di CRUD sulle due entita', come visto in classe (evitando delete)
NOTA: la relazione e' tipo 1aN (uno-a-molti), ma dovete pensare autonomamente in che direzione e' la relazione e quindi dove sta la chiave esterna: un employee esegue piu' task, un task e' eseguito da un unico employee --}}