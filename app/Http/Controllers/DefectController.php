<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefectController extends Controller
{
    public function index()
    {
        return view('defect.index');
    }
}
