@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Classroom List</h1>
        <h3 class="text-center">View Classroom</h3> 
        <div>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
        </div>
        <div class="row">
            <p>  <h3> Nip : {{$classroom->class_name}}</h3></p>
            <h3> Nama : {{$classroom->teacher->name}}</h3>
        </div>
    </div>
@endsection