<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = Faculty::with('departments')->get();
        return view('departments.index', compact('faculties'));
        // return view ('departments.index');
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
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'description' => 'required',
            // 'faculty_id' => 'required|exists:faculty,faculty_id',
        ]);
        // Retrieve faculty information based on the selected faculty ID
            $faculty = Faculty::findOrFail($request->input('faculty'));
          
            
            $department = new Department;
            $department->name=$validatedData['name'];
            $department->email=$validatedData['email'];
            $department->contact=$validatedData['contact'];
            $department->description=$validatedData['description'];
            $department->faculty = $faculty->name;
             // Assign the faculty ID to the department's faculty_id field
            $department->faculty_id = $faculty->id;
            $department->save();
        return redirect()->route('departments.index')->with('success', 'Department created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return single departments with it faculty
        $department = Department::with('faculty')->findOrFail($id);
        // dd($department->faculty);
        return view('departments.show', compact('department'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::with('faculty')->findOrFail($id);
        // You can return the department data to your view for editing
        return view('departments.edit', compact('department'));
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
        $department = Department::find($id);
        // Update the existing fields
        $department->name = $request->input('name');
        $department->email = $request->input('email');
        $department->contact = $request->input('contact');
        $department->description = $request->input('description');
      
        $department->save(); 
        return redirect('/departments')->with('success','Department update');
        
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
