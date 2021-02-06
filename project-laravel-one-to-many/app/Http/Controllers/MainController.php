<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class MainController extends Controller
{
    public function index() {

        $dipendente = Employee::all();

        return view('pages.index-page', compact('dipendente'));
    }
}
