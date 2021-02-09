<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

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

        $newTasksUtente = $request -> all();

        Validator::make($newTasksUtente, [

            'name' => 'required|min:5|max:20',
            'description' => 'required',

        ]) -> validate();

        $newTypology = Typology::create($newTasksUtente);
        $newTask = Task::findOrFail($newTasksUtente['tasksArray']);

        $newTypology -> tasks() -> attach($newTask);

        return redirect() -> route('show-typology', $newTypology -> id);
    }

    public function editTypology($id) {

        $arrayTasks = Task::all();

        $editTypo = Typology::findOrFail($id);

        return view('pages.editTypology-page', compact('arrayTasks', 'editTypo'));
    }
    public function updateTypology(request $request, $id) {

        $typoUtente = $request -> all(); //array che contiene tutti i dati inseriti dall'utente

        Validator::make($typoUtente, [

            'name' => 'required|min:5|max:20',
            'description' => 'required',

        ]) -> validate();

        $updateTypo = Typology::findOrFail($id); //super array che prende i dati inseriti nel db riferenti tramite id a quello selezionato da utente senza relazione quindi senza tasks
        // dd($updateTypo); 
        
        $updateTypo -> update($typoUtente); //aggiorno il model Typology della modifica del dato proveniente dalla request e quindi dati inseriti da utene ($typoUtente)

        // associazione con task se la condizione esiste (array_key_exists condizione di php) ovvero quando non é stato selezionato nessun task
        if (array_key_exists('tasksArray', $typoUtente)) {
           
            $arrayTasksSelect = Task::findOrFail($typoUtente['tasksArray']); //taskArray proviene da view editTypology
        } else {
            $arrayTasksSelect = [];
        }

        $updateTypo -> tasks() -> sync($arrayTasksSelect);

        //riporto alla pagina show dell'elemento (grazie ad id proveniente da form utente) tramite rotta per far cambiare anche l'url
        return redirect() -> route('show-typology', $updateTypo -> id);
    }
}
