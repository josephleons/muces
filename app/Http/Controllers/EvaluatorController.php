<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\EvaluationForm;
use App\Models\ReportEvaluation;
use Spatie\FlareClient\Solutions\ReportSolution;

class EvaluatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $evaluations = ReportEvaluation::orderBy("created_at","desc")->paginate(10);
        return view ('evaluators.index');
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
        return view('evaluators.create',compact('courses','students'));
        // return view ('eveluators.create');
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
            'student' => 'required',
            'course' => 'required',
            'due_date' => 'required',
            'description' => 'required',
            // 'faculty_id' => 'required|exists:faculty,faculty_id',
        ]);
        // Retrieve Student information and Courses
        $students = Student::findOrFail($request->input('student'));
        $courses = Course::findOrFail($request->input('course'));

        $evaluations = new EvaluationForm;
        $evaluations->question=$validatedData['question'];
        $evaluations->student= $students->fullname;
        $evaluations->student_id= $students->id;
        $evaluations->course=$courses->course;
        $evaluations->course_id=$courses->id;
        $evaluations->due_date=$validatedData['due_date'];
        $evaluations->description=$validatedData['description'];
        $evaluations->status=$status;
     
        $evaluations->save();

        return redirect('/evaluators')->with('Success', 'Evaluation Added Success.');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evaluation = ReportEvaluation::findOrFail($id);
        return view ('/evaluator.index',['evaluator'=> $evaluation]);

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
