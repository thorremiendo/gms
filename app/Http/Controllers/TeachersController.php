<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;


class TeachersController extends Controller
{
    public function index()
    {
    	$teachers = Teacher::all();
    	return view('teachers.index')->with('teachers', $teachers);
    }
    public function create()
    {
    	return view('teachers.create');
    }
     public function store()
    {
        request()->validate([
            'name' => 'required',
            
        ]);
        
    	$teacher = new Teacher;
    	$teacher->name = request()->name;
    	$teacher->advisory_section = request()->advisory_section;
    	$teacher->save();

    	return redirect('/teachers');
    }
    
   
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit')->with('teacher', $teachers);
    }

    public function update(Teacher $teacher)
    {
        $teacher->name = request()->name;
        $teacher->save();
        return redirect('/teachers');
    }


}
