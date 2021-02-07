@extends('layouts.main-layout')
@section('content')
    <h2>
        Add Task
    </h2>
    <div>
        <form action="{{route('store-task')}}" method="post">

            @csrf
            @method('post')

            <label for="title">Titolo</label>
            <input name="title" type="text">

            <br>

            <label for="description">Descrizione</label>
            <input name="description" type="text">

            <br>

            <label for="priority">Prioritá</label>
            <input name="priority" type="text">

            <br>

            <label for="employee_id">Dipendente</label>
            <select name="employee_id" type="text">

                @foreach ($arrayDipendenti as $item)
                    <option value="{{$item -> id}}">{{$item -> name}}</option>
                @endforeach

            </select>

            <br>

            <input type="submit" value="Salva">
        </form>
    </div>
@endsection