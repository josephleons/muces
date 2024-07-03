<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\EvaluationForm;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ("evaluations.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        $courses = Course::with('programs')->get();
        return view('evaluations.create',compact('courses','students'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status ='Pending';
        $validatedData = $request->validate([
            'question' => 'required',
            'course' => 'required',
            'due_date' => 'required',
            // 'description' => 'required',
            // 'faculty_id' => 'required|exists:faculty,faculty_id',
        ]);
        // Retrieve Student information and Courses
        // $students = Student::findOrFail($request->input('student'));
        $courses = Course::findOrFail($request->input('course'));
        $evaluations = new EvaluationForm;
        $evaluations->question=$validatedData['question'];
        // $evaluations->student= $students->fullname;
        // $evaluations->student_id= $students->id;
        $evaluations->course=$courses->course_name;
        // $evaluations->course_id=$courses->id;
        $evaluations->due_date=$validatedData['due_date'];
        // $evaluations->description=$validatedData['description'];
        $evaluations->status=$status;
     
        $evaluations->save();
        // Attach the student to the evaluation in the junction table
        // $evaluations->students()->attach($students->id);

        return redirect('/admin')->with('Success', 'Evaluation Added Success.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
