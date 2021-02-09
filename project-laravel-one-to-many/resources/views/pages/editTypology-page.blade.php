@extends('layouts.main-layout')
@section('content')

    <main>
        <h2>
            Edit Typology
        </h2>
        <div>
            <form action="{{route('update-typology', $editTypo -> id)}}" method="post">

                @csrf
                @method('post')

                <label for="name">Nome Tipologia</label>
                <input type="text" name='name' value="{{$editTypo -> name}}">

                <br>

                <label for="description">Descrizione Tipologia</label>
                <input type="text" name='description' value="{{$editTypo -> description}}">

                <br>
                <br>

                <label for="tasks[]">Elenco Incarico:</label>

                @foreach ($arrayTasks as $item)
                    <br>
                    <input name="tasksArray[]" type="checkbox" value="{{$item -> id}}"
                        
                        @if ($editTypo -> tasks -> contains($item -> id))
                            checked 
                        @endif

                    > {{$item -> title}}

                @endforeach
                <br>
                <br>

                <input type="submit" value="Salva">

            </form>
        </div>
    </main>
    
@endsection