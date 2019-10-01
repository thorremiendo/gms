@extends('layouts.master')
@section('content')
    <div class="container">
        @include('layouts.errors')
        <form method="POST" action="/teachers/store">
            @csrf
          <div class="form-group">
            <label for="title">Name</label>
            <input type="text" class="form-control" name='name' aria-describedby="emailHelp" placeholder="Name">
            <label for="title">Advisory Section</label>
            <input type="text" class="form-control" name='advisory_section' aria-describedby="emailHelp" placeholder="Advisory Section">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection