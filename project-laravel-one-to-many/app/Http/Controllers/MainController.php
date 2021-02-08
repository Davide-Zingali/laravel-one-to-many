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

}
