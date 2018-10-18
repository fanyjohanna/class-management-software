@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Teacher List</h1>
        <div>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
        </div>
        <div class="row">
            <a href="{{route('teachers.create')}}" class="btn btn-primary pull-right">Create</a>
            <table class="table table-striped">
                <thead>
                    <th>No</th>
                    <th>Nip</th>
                    <th>Nama</th>
                    <th>Course</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach($teachers as $index=>$teacher)
                        <tr>
                            <td>{{ $index +1}}</td>
                            <td>{{$teacher->nip}}</td>
                            <td>{{$teacher->name}}</td>
                            <td>{{$teacher->course}}</td>
                            <td>
                                <form action="{{route('teachers.destroy', $teacher->id)}}" 
                                method="POST">
                                    <a href="{{route('teachers.show', $teacher->id)}}" class="btn btn-primary">Show</a>
                                    <a href="{{route('teachers.edit', $teacher->id)}}" class="btn btn-info">Edit</a>
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
