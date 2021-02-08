@extends('layouts.main-layout')
@section('content')
    <main>

        <h1>Pagina da visualizzare:</h1>

        <h2>
            <a class='home' href="{{route('index-employee')}}">
                Employee
            </a>
        </h2>
        
        <h2>
            <a class='home' href="{{route('index-task')}}">
                Task
            </a>
        </h2>

    </main>
@endsection



{{-- GOAL: definire migration, model, factory e seeder per le seguenti entita':
- employee: name, lastname, dateOfBirth
- task: title, description, priority (valore intero da 1 a 5)
Dopo aver creato tabelle, aggiunto relazioni, inserito dati fake, produrre le due index (per le due entita') come visto a lezione.
OPZIONALE: provare a fare le altre funzioni di CRUD sulle due entita', come visto in classe (evitando delete)
NOTA: la relazione e' tipo 1aN (uno-a-molti), ma dovete pensare autonomamente in che direzione e' la relazione e quindi dove sta la chiave esterna: un employee esegue piu' task, un task e' eseguito da un unico employee --}}

{{-- GOAL: al progetto di ieri, aggiungere la tabella Typologies collegata NaM con la tabella Task:
- typologies\typology: name, description
NOTA: concentrarsi prevalentemente su quanto non siete riusciti a fare dell'esecizio di ieri e poi su migration, factory, seeder e model degli argomenti di oggi
OPZIONALE: creare index + show di ogni entita' --}}

{{-- aggiungere all'ultimo esercizio le rotte viste in classe (index, show, create, update) per i task e creare le stesse rotte anche per l'entita' Typology, con le stesse regole di inserimento --}}