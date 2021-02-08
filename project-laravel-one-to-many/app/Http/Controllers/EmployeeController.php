<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class EmployeeController extends Controller
{
    
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
}
