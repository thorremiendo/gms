<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TeacherLoad;


class TeacherLoadsController extends Controller
{
    public function index()
    {
    	$teacherloads = TeacherLoad::all();
    	return view('teacher-loads.index')->with('teacherloads', $teacherloads);
    }
    public function create()
    {
    	return view('teacher-loads.create');
    }
     public function store()
    {
        request()->validate([
            'subject_strand_id' => 'required',
            'section_id' => 'required',

            
        ]);
        
    	$teacherload = new TeacherLoad;
    	$teacherload->subject_strand_id = request()->subject_strand_id;
        $teacherload->section_id = request()->section_id;
    	$teacherload->save();

    	return redirect('/teacher-loads');
    }
    
   
    public function edit(TeacherLoad $teacherload)
    {
        return view('teacher-loads.edit')->with('teacherload', $teacherload);
    }

    public function update(Teacherload $teacherload)
    {
        $teacherload->name = request()->name;
        $teacherload->save();
        return redirect('/teacher-loads');
    }


}
