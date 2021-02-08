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

        $newTypology = Typology::create($request -> all());

        $newTask = Task::findOrFail($request -> get('typology_id'));

        $newIncarico -> tasks() -> attach($newTypology);

        $newIncarico -> save();
        
    }
}
