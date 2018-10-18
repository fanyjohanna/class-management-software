@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Update Teacher</h1>
        <a href="{{route('teachers.index')}}" class="btn btn-primary pull-right">Back</a>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form method="post" action="{{ route('teachers.update', $teacher->id) }}">
                    @csrf
                    <div class="form-group {{$errors->has('nip') ? 'has-error:': ''}}">
                        <label for="nip">NIP : </label>
                        <input type="text" class="form-control" name="nip" value="{{$teacher->nip}}">
                        <span class="help-block"> 
                            @if($errors->has('nip'))
                                {{$errors->first('nip')}}
                            @endif
                        </span>
                    </div>
                    <div class="form-group {{$errors->has('name') ? 'has-error:': ''}}">
                        <label for="name">Nama : </label>
                        <input type="text" class="form-control" name="name" value="{{$teacher->name}}">
                        <span class="help-block"> 
                            @if($errors->has('name'))
                                {{$errors->first('name')}}
                            @endif
                        </span>
                    </div>
                    <div class="form-group {{$errors->has('course') ? 'has-error:': ''}}">
                        <label for="course">Course : </label>
                        <input type="text" class="form-control" name="course" value="{{$teacher->course}}">
                        <span class="help-block"> 
                            @if($errors->has('course'))
                                {{$errors->first('course')}}
                            @endif
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update</a>
                    @csrf
                    @method('PATCH')
                </form>
            </div>
        </div>
    </div>
@endsection
