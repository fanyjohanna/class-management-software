@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Teacher List</h1>
        <h3 class="text-center">View Teacher</h3> 
        <div>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
        </div>
        <div class="row">
        <div class="col-lg-8 col-md-9">
            <h3 class="mt-20 mb-20">
                <p>
                Nama : {{$teacher->name}}
                </P> 
                <p>  
                    Nip : {{$teacher->nip}}
                </P>
                <p>
                    Course : {{$teacher->course}}
                </p>
            </h3>
		</div>
    </div>
@endsection
