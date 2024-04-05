<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Program;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
    // // Fetch a single student along with their associated program and courses
    // $student = Student::with('program.courses')->first();
    // return view('programs.index',  compact('student'));

        // Fetch the programs and related courses for the student using DB query
        $programs = DB::table('programs')
        ->join('students', 'programs.id', '=', 'students.program_id')
        ->join('courses', 'programs.id', '=', 'courses.program_id')
        ->select('programs.*', 'courses.*')
        ->where('students.id', auth()->id())
        ->distinct()
        ->get();

        // Pass the programs data to the view
        return view('programs.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $ProgramId =  $request->input('program');
        $program =Program::with('courses')->find($ProgramId);
        
        if (!$program) {
            return redirect()->back()->with('error', 'Program not found');
        }
        // retrieve course related to program 
        $courses =$program->courses;
         if($courses->isEmpty()){
            return view ('programs.no-course',  compact('program'));
            }
        // dd($courses);
        return view('programs.course_list',  compact('program','courses'));
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