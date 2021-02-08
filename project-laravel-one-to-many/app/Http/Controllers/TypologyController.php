<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Typology;

use App\Task;

use App\Employee;

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
}
