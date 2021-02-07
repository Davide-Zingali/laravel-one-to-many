<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

use App\Task;

class MainController extends Controller
{
    // home page
    public function home() {
        return view('pages.home-page');
    }

    // employee
    public function indexEmplo() {

        $arrayDipendenti = Employee::all();

        return view('pages.indexEmployee-page', compact('arrayDipendenti'));
    }

    public function showEmplo($id) {
        $arrayDipendente = Employee::findOrFail($id);
        return view('pages.showEmployee-page', compact('arrayDipendente'));
    }

    public function createEmplo() {

        $arrayDipendenti = Employee::all();

        // dd($arrayDipendenti);

        return view('pages.createEmployee-page', compact('arrayDipendenti'));
    }
    public function storeEmplo(request $request) {

        Employee::create($request -> all());

        return redirect() -> route('index-employee');
    }
    

    // task
    public function indexTask() {
        $arrayIncarichi = Task::all();
        // dd($arrayIncarichi);
        return view('pages.indexTask-page', compact('arrayIncarichi'));
    }

    public function showTask($id) {
        $arrayIncarico = Task::findOrFail($id);
        return view('pages.showTask-page', compact('arrayIncarico'));
    }

    public function createTask() {
        $arrayDipendenti = Employee::all();
        return view('pages.createTask-page', compact('arrayDipendenti'));
    }

    public function storeTask(request $request) {
        // dd($request -> all());
        $newIncarico = Task::make($request -> all());

        $newDipendente = Employee::findOrFail($request -> employee_id);

        $newIncarico -> employee() -> associate($newDipendente);

        $newIncarico -> save();

        return redirect() -> route('index-task');
    }
}
