<?php

namespace App\Http\Controllers;

use App\Models\EvaluationForm;
use App\Models\Program;
use App\Models\Response;
use App\Models\Student;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use function PHPSTORM_META\registerArgumentsSet;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function student (){
        return view('students.student');
     }
    // public function index()
    // {
    //     $userId = Auth::id();
    //     // Fetch the student associated with the logged-in user
    //     $student =Student::where('user_id',$userId)->first();
    //     // Check if the user is associated with a student
    //     if ($student) {
    //         $program = $student->program;
    //         // Now you have the program data and you can access its related students
    //         $students = $program->students;
    //         return view('students.index', compact('program', 'students'));
    //     } else {
    //         // Handle the case if the logged-in user is not associated with a student
    //         return redirect()->back()->with('error', 'You are not associated with a student.');
    //     }
    //     // return view('students.index', compact('program', 'students'));



    // }
    
    

    public function index()
    {
        $userId = auth()->id();
        $student = Student::where('user_id', $userId)->first();
    
        if ($student) {
            $program = $student->program; // Access program data
            return view('students.index', compact('student', 'program'));
        } else {
            return view('students.no_student')->with('error', 'Student not found.');
        }
    }
    
    
    
    public function Questionnaire ()
    {
        // $userId = Auth::id();
        // $student = Student::where('user_id', $userId)->first();
        // // if student found get they Questionnaire
        // if($student){
        //      $evaluationForm = $student->evaluationForm;
        //     //  dd($evaluationForm);
        //      return view ("students.questionnaire", compact('student','evaluationForm'));
        // }else{
        //      // Handle the case if the logged-in user is not associated with a student
        //      return redirect()->back()->with('error', 'You are not associated with a student.');
        // }

        // above code was to retrieve specific student and its related questionnaire be assigned
        $questionnaires = EvaluationForm::all();
        return view ("students.questionnaire",['questionnaires'=>$questionnaires]);
    }

    // custom function student registerArgumentsSet()

    public function studentRegister (){
        
        $programs = Program::all();
        return view('students.studentRegister',compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('students.create');
    }
    //store the evaluation response to responses table 
    public function QResponses(Request $request)
    {
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'registration_no' => 'required',
            'accademic_year' => 'required',
            'nida' => 'required',
            'program' => 'required',
            // 'faculty_id' => 'required|exists:faculty,faculty_id',
        ]);
        // Retrieve faculty information based on the selected faculty ID
            $programs = Program::findOrFail($request->input('program'));
            // CreateStudent instance 
            $student = new Student;
            $student->fullname=$validatedData['fullname'];
            $student->gender=$validatedData['gender'];
            $student->dob=$validatedData['dob'];
            $student->registration_no=$validatedData['registration_no'];
            $student->accademic_year=$validatedData['accademic_year'];
            $student->nida=$validatedData['nida'];
            $student->program = $programs->program;
             // Assign the program ID to the students's  field
            $student->program_id = $programs->id;
            //assign student user_id column from user id table
            $student->user_id =auth()->user()->id;
            $student->save();
        return redirect()->route('students.index')->with('success', 'Students created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = EvaluationForm::findOrFail($id);
        return view('students.create',['question'=> $question]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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
