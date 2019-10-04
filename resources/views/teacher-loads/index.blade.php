@extends('layouts.master')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Subject Strand</th>
                    <th scope="col">Section</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($teacherloads as $teacherload)
                    <tr>
                        <td>{{ $teacherload->id }}</td>
                        <td>{{ $teacherload->subject_strand_id }}</td>
                        <td>{{ $teacherload->section_id }}</td>

                        
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href='/teacher-loads/add'>Add New Teacher Load</a>
    </div>
@endsection