<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StrandsController extends Controller
{
    public function index()
    {
    	return view('strands.index');
    }
     public function create()
    {
    	return view('strands.create');
    }
}
