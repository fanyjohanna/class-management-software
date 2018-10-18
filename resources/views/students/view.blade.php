@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Student List</h1>
        <h3 class="text-center">View Student</h3> 
        <div>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
        </div>
        <div class="row">
            <p>  <h3> Nim : {{$student->nim}}</h3></p>
            <p>  <h3> Students Name : {{$student->student_name}}</h3></p>
            <h3> Class : {{$student->classroom->class_name}}</h3>
        </div>
    </div>
@endsection