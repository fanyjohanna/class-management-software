@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Classes</h1>
        <div>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
        </div>
        <div class="row">
            <a href="{{route('classrooms.create')}}" class="btn btn-primary pull-right">Create</a>
            <table class="table table-striped">
                <thead>
                    <th>No</th>
                    <th>Class Name</th>
                    <th>Teacher</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach($classrooms as $index=>$classroom)
                        <tr>
                            <td>{{$index +1}}</td>
                            <td>{{$classroom->class_name}}</td>
                            <td>{{$classroom->teacher->name}}</td>
                            <td>
                                <form action="{{route('classrooms.destroy', $classroom->id)}}" 
                                method="POST">
                                    <a href="{{route('classrooms.show', $classroom->id)}}" class="btn btn-primary">Show</a>
                                    <a href="{{route('classrooms.edit', $classroom->id)}}" class="btn btn-info">Edit</a>
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
