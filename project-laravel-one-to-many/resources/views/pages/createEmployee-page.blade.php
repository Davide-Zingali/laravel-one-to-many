@extends('layouts.main-layout')
@section('content')
    <h2>
        Add Task
    </h2>
    <div>
        <form action="{{route('store-employee')}}" method="post">

            @csrf
            @method('post')

            <label for="'title'">Title</label>
            <input name="'title'" type="text">

            <br>

            <label for="'description'">Description</label>
            <input name="'description'" type="text">

            <br>

            <label for="'priority'">Priority</label>
            <input name="'priority'" type="text">

            <br>

            <label for="employee_id">Dipendente</label>
            <select name="employee_id" type="text">

                @foreach ($ArrayDipendenti as $item)
                    <option value="{{$item -> id}}">{{$item -> name}}</option>
                @endforeach

            </select>

            <br>

            <input type="submit" value="Salva">
        </form>
    </div>
@endsection