<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function index()
    {
        $component = components(1);
        $area = $component->areas;
        $faculty = $area->faculties;
        dd($faculty);
    }

}
