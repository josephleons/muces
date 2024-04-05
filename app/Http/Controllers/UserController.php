<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Exception;

class UserController extends Controller
{


    // configure access control
    // public function __construct()
    // {
    //     $this->middleware('auth',['except'=>['users']]);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users'));
      
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.add_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email|unique:users',
            'contact'=>'required',
            'username'=>'required|unique:users|max:8',
            'password'=>'required|min:8|same:confirmPassword',
                      
        ]);
        DB::beginTransaction();
        // create posty
        // $user_id=auth()->user()->id;
        try{
            $auto_role="Employee";
            $user = new User;
            $user->contact=$request->input('contact');
            $user->email=$request->input('email');
            $user->username=$request->input('username');
            $user->password=Hash::make($request->input('password'));
            $user->save();


            $role = new Role;
            $role->name=$auto_role;
            $role->user_id=$user->id;
            $role->save(); 
            
            DB::commit();
            return redirect('/login')->with('success','Account Created Success ');
           
        }catch( Exception $e){
            DB::rollback();
            return redirect()->back();
        }
        
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
        $users = new User();
        $result=$users->find($id);
        $result->delete();

        return redirect('/users')->with('success' ,'User Remove');
    }
    public function profile(){
        return view('users.profile');
    }

}
