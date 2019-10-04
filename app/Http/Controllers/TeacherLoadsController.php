<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TeacherLoad;


class TeacherLoadsController extends Controller
{
    public function index()
    {
    	$teacherloads = TeacherLoad::all();
    	return view('teacherloads.index')->with('teacherloads', $teacherloads);
    }
    public function create()
    {
    	return view('teacherloads.create');
    }
     public function store()
    {
        request()->validate([
            'name' => 'required',
            'subject_strand_id' => 'required',
            'section_id' => 'required',

            
        ]);
        
    	$teacher = new Teacher;
    	$teacher->name = request()->name;
    	$teacher->advisory_section = request()->advisory_section;
    	$teacher->save();

    	return redirect('/teacher-loads');
    }
    
   
    public function edit(Teacher $teacher)
    {
        return view('teacher-loads.edit')->with('teacher', $teacher);
    }

    public function update(Teacher $teacher)
    {
        $teacher->name = request()->name;
        $teacher->save();
        return redirect('/teacher-loads');
    }


}
