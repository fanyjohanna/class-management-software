
@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="container-fluid bg-2 text-center">
    <h3 class="margin">Class Management Software</h3>
    <div class="btn-group">
        <a type="button" href="/teachers" class="btn btn-primary">Teacher</a>
        <a type="button" href="/classrooms" class="btn btn-primary">Class</a>
        <a type="button" href="/students" class="btn btn-primary">Students</a>
        <a type="button" href="/generatePDF" class="btn btn-primary">Download</a>
    </div>
</div>
<div class="container-fluid bg-2 text-center"></div>
<div class="container-fluid bg-2 text-center"></div>
@endsection
