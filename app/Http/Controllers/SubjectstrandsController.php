<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subjectstrand;


class SubjectstrandsController extends Controller
{
    public function index()
    {
    	$subjectstrands = Subjectstrand::all();
    	return view('subject-strands.index')->with('subjectstrands', $subjectstrands);
    }
    public function create()
    {
    	return view('subject-strands.create');
    }
     public function store()
    {
        request()->validate([
            'name' => 'required',
            'is_active' => 'required',
            
        ]);
        
    	$subjectstrand = new Subjectstrand;
    	$subjectstrand->name = request()->name;
        $subjectstrand->is_active = request()->is_active;
    	$subjectstrand->save();

    	return redirect('/subject-strands');
    }
    
   
    public function edit(Subjectstrand $subjectstrand)
    {
        return view('subject-strands.edit')->with('subjectstrand', $subjectstrands);
    }

    public function update(Subjectstrand $subjectstrand)
    {
        $subjectstrand->name = request()->name;
        $subjectstrand->save();
        return redirect('/subject-strands');
    }


}
