@extends('layouts.main-layout')
@section('content')

    <main>
        <h2>
            Create Typology
        </h2>
        <div>
            <form action="{{route('store-typology')}}" method="post">

                @csrf
                @method('post')

                <label for="name">Nome Tipologia</label>
                <input type="text" name='name'>

                <br>

                <label for="description">Descrizione Tipologia</label>
                <input type="text" name='description'>

                <br>
                <br>

                <label for="tasks[]">Elenco Incarico:</label>

                @foreach ($arrayTasks as $item)
                    <br>
                    <input name="tasksArray[]" type="checkbox" value="{{$item -> id}}"> {{$item -> title}}
                @endforeach
                <br>
                <br>

                <input type="submit" value="Salva">

            </form>
        </div>
    </main>
    
@endsection