<?php

namespace App\Http\Controllers;
use App\Models\Concept;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function admin()
{
    // $concepts = \App\Models\Concept::all();
    // $concept = new concept();
    $concepts = Concept::all();
    return view('admin.dashboard', compact('concepts'));
}

}
