<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

use App\Task;

class MainController extends Controller
{

    // employee
    public function indexEmplo() {

        $arrayDipendenti = Employee::all();

        return view('pages.indexEmployee-page', compact('arrayDipendenti'));
    }

    public function showEmplo($id) {
        $arrayDipendenti = Employee::findOrFail($id);
        return view('pages.showEmployee-page', compact('arrayDipendenti'));
    }

    public function createEmplo() {

        $arrayDipendenti = Employee::all();

        return view('pages.createEmployee-page', compact('arrayDipendenti'));
    }
    public function storeEmplo(request $request) {
        // dd($request -> all());
        $newIncarico = Task::make($request -> all());

        $newDipendente = Employee::findOrFail($request -> employee_id);

        $newIncarico -> Tasks() -> associate($newDipendente);

        $newIncarico -> save();

        return redirect() -> route('index-employee');
    }

    // task
    public function indexTask() {
        $arrayIncarichi = Task::all();
        // dd($arrayIncarichi);
        return view('pages.indexTask-page', compact('arrayIncarichi'));
    }
}
