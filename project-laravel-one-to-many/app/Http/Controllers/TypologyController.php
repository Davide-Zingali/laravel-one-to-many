<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Typology;

use App\Task;

class TypologyController extends Controller
{
    public function indexTypology() {

        $arrayTipologiee = Typology::all();

        return view('pages.indexTypology-page', compact('arrayTipologiee'));
    }

    public function showTypology($id) {
        $arrayTipologia = Typology::findOrFail($id);
        return view('pages.showTypology-page', compact('arrayTipologia'));
    }

    public function createTypology() {

        $arrayTasks = Task::all();

        return view('pages.creareTypology-page', compact('arrayTasks'));
    }
    public function storeTypology(request $request) {

        // dd($request -> all());
        $newTasksUtente = $request -> all();

        $newTypology = Typology::create($newTasksUtente);
        $newTask = Task::findOrFail($newTasksUtente['tasksArray']);

        $newTypology -> tasks() -> attach($newTask);

        return redirect() -> route('show-typology', $newTypology -> id);
        
    }
}
