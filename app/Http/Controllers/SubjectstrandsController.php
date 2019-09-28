<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectstrandsController extends Controller
{
    public function index()
    {
    	return view('sections.index');
    }
     public function create()
    {
    	return view('sections.create');
    }
}
