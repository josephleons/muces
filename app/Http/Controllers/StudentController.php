<?php

namespace App\Http\Controllers;

use App\Models\Program;
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
    public function index()
    {
        $user_id= Auth::id();

        // Fetch the corresponding student record from the database based on the user's ID
        $student = Student::where('user_id', $user_id)->first();
        return view('students.index',compact('student'));
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
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'surname' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'yearOfstudy' => 'required',
            'nida' => 'required',
            'program' => 'required',
            'semister' => 'required',
            // 'faculty_id' => 'required|exists:faculty,faculty_id',
        ]);
        // Retrieve faculty information based on the selected faculty ID
            $programs = Program::findOrFail($request->input('program'));
            
            // CreateStudent instance 
            $student = new Student;
            $student->firstname=$validatedData['firstname'];
            $student->lastname=$validatedData['lastname'];
            $student->surname=$validatedData['surname'];
            $student->gender=$validatedData['gender'];
            $student->email=$validatedData['email'];
            $student->contact=$validatedData['contact'];
            $student->yearOfstudy=$validatedData['yearOfstudy'];
            $student->nida=$validatedData['nida'];
            $student->semister=$validatedData['semister'];
            $student->program = $programs->name;
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
