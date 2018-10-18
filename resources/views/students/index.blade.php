@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Student List</h1>
        <div>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
        </div>
        <div class="row">
            <a href="{{route('students.create')}}" class="btn btn-primary pull-right">Create</a>
            <table class="table table-striped">
                <thead>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Student Name</th>
                    <th>Class</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach($students as $index=>$student)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$student->nim}}</td>
                            <td>{{$student->student_name}}</td>
                            <td>{{$student->classroom->class_name}}</td>
                            <td>
                                <form action="{{route('students.destroy', $student->id)}}" 
                                method="POST">
                                    <a href="{{route('students.show', $student->id)}}" class="btn btn-primary">Show</a>
                                    <a href="{{route('students.edit', $student->id)}}" class="btn btn-info">Edit</a>
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
