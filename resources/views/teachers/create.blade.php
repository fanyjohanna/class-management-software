@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="text-center">Add Teacher</h3>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form method="post" action="{{ route('teachers.store') }}">
                    @csrf
                    <div class="form-group {{$errors->has('nip') ? 'has-error:': ''}}">
                        <label for="nip">NIP : </label>
                        <input type="text" class="form-control" name="nip">
                        <span class="help-block"> 
                        @if($errors->has('nip'))
                            {{$errors->first('nip')}}
                        @endif
                        </span>
                    </div>
                    <div class="form-group {{$errors->has('name') ? 'has-error:': ''}}">
                        <label for="name">Name : </label>
                        <input type="text" class="form-control" name="name" >
                        <span class="help-block"> 
                            @if($errors->has('name'))
                                {{$errors->first('name')}}
                            @endif
                        </span>
                    </div>
                    <div class="form-group {{$errors->has('course') ? 'has-error:': ''}}">
                        <label for="course">Course : </label>
                        <input type="text" class="form-control" name="course">
                        <span class="help-block"> 
                            @if($errors->has('course'))
                                {{$errors->first('course')}}
                            @endif
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Add</a>
                </form>
            </div>
        </div> 
    </div>

@endsection
