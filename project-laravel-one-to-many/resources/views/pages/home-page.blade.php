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