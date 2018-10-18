<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Student;
use Illuminate\Http\Request;
use PDF;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students= Student::latest()->paginate(10);
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classrooms = Classroom::orderBy('class_name')->get();
        return view('students.create', compact('classrooms'));
        // return $classrooms;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create([
            'nim' => $request->get('nim'),
            'student_name' => $request->get('student_name'),
            'classroom_id' => $request->get('classroom_id')
        ]);
        return redirect('/students');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.view', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $classrooms = Classroom::orderBy('class_name')->get();
        return view('students.edit', compact('student','classrooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return redirect('/students')->with('success', 'You have updated students successfully ! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/students')->with('success', 'You have success delete student ! ');
    }

    public function getPdf()
    {
        $pdf=PDF::loadView('document');
        return $pdf->download('management_class.pdf');
    }
}
