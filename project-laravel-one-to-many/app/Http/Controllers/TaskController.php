<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

use App\Task;

class TaskController extends Controller
{
    
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

        $newDipendente = Employee::findOrFail($request -> get('employee_id'));

        $newIncarico -> employee() -> associate($newDipendente);

        $newIncarico -> save();

        return redirect() -> route('index-task');
    }
}
