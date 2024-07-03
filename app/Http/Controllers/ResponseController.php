<?php

namespace App\Http\Controllers;

use App\Models\EvaluationForm;
use App\Models\Response as ModelsResponse;
use App\Models\ResponseQuestion;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $evaluations = EvaluationForm::with('responses')->get();
        // $responses = ResponseQuestion::with('evaluationForm')->get();
       
        return view ('responses.index', ['evaluations'=> $evaluations]);
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
            'response' => 'required|string',
            'status' => 'required|string',
            'question_id' => 'required|string'
        ]);

            $response = new ResponseQuestion;
            $response->status = $validatedData['status'];
            $response->response = $validatedData['response'];
            $response->questionnaire_question_id =$validatedData['question_id'];
            $response->evaluation_form_id =$validatedData['question_id'];
           
            // submit data
            $response->save();
            return redirect()->route('students.index')->with('success', 'Response created successfully.');
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
