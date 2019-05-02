<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitsController extends Controller
{
    public function unitView($id=null)
    {
        return view('unit/unitView');
    }
    public function units()
    {
        return view('unit/units');
    }
}
