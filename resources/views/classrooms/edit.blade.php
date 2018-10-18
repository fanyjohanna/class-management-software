@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Classroom List</h1>
        <a href="{{route('classrooms.index')}}" class="btn btn-primary pull-right">Back</a>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form method="POST" action="{{ route('classrooms.update', $classroom->id) }}">
                    @csrf
                    <div class="form-group {{$errors->has('class_name') ? 'has-error:': ''}}">
                        <label for="class_name">Class Name : </label>
                        <input type="text" class="form-control" name="class_name" value="{{$classroom->class_name}}">
                        <span class="help-block"> 
                            @if($errors->has('class_name'))
                                {{$errors->first('class_name')}}
                            @endif
                        </span>
                    </div> 
                    <div class="col-md-6">
                        <select name="teacher_id" class="form-control" required>
                            @foreach ($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                <!-- <option value="{{$teacher->id}}" @if($classroom->teacher_id == $teacher->id ) {{ 'selected' }} @endif>{{ $teacher->name }}</option> -->
                            @endforeach
                        </select>
                        @if ($errors->has('teacher_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('teacher_id') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update</a>
                    @csrf
                    @method('PATCH')
                </form>
            </div>
        </div>
    </div>
@endsection
