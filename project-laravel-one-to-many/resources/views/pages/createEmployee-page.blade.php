@extends('layouts.main-layout')
@section('content')
    <h2>
        Add Employee
    </h2>
    <div>
        <form action="{{route('store-employee')}}" method="post">

            @csrf
            @method('post')

            <label for="name">Nome</label>
            <input name="name" type="text">

            <br>

            <label for="lastname">Cognome</label>
            <input name="lastname" type="text">

            <br>

            <label for="dateOfBirth">Data di nascita</label>
            <input name="dateOfBirth" type="text">

            <br>

            <input type="submit" value="Salva">
        </form>
    </div>
@endsection