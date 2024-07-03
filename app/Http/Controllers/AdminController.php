<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }
    public function listEvaluator()
    {
        $users = User::all();
        return view('admin.manageuser',['users'=> $users]);
    }

    public function managedepartments()
    {
        $departments = Department::all();
        return view('admin.managedepartments',['departments'=> $departments]);
    }

    public function managestudents()
    {
        
         $userId = Auth::id();
         // // Fetch a single student along with their associated program and courses
        $student = Student::with('program')->get();

        if (!$student) {
            return redirect()->back()->with('error', 'Program not found');
        }
        // $programs = Program::all();
        $programs= $student;
        if($programs->isEmpty()){
            return redirect()->back()->with('error', 'Student not found');
        }
        return view ('admin.managestudents', compact('programs','student'));
    }

    public function managequality()
    {
        $q_assuarances = User::where('usertype','Q_assuarance')->get();
        return view('admin.managequality',['q_assuarances'=> $q_assuarances]);
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
        //
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
