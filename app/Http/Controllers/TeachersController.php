<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Requests\teacherValidate;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $teachers;

    public function index()
    {
        $teachers= Teacher::latest()->paginate(10);
        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, teacherValidate $validate)
    {
          $teacher = new Teacher([
            'nip' => $request->get('nip'),
            'name'=> $request->get('name'),
            'course'=> $request->get('course')
          ]);
          $teacher->save();
          return redirect('/teachers')->with('success', 'New Teacher has been added!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('teachers.view', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($request->all());
        return redirect('/teachers')->with('success', 'You have updated Teacher successfully ! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect('/teachers')->with('success', 'You have success delete Teacher');
    }
}
