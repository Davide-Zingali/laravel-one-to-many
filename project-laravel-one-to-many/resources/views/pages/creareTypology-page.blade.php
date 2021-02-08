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

                <label for="name">Nome</label>
                <input type="text" name='name'>

                <br>

                <label for="description">Descrizione</label>
                <input type="text" name='description'>

                <br>
                <br>

                <label for="task_id">Incarico</label>
                <select name="task_id">
                    @foreach ($arrayTasks as $item)
                        <option value="{{$item -> id}}">{{$item -> title}}</option>
                    @endforeach
                </select>

                <input type="submit" value="Salva">

            </form>
        </div>
    </main>
    
@endsection