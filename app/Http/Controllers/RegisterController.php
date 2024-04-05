<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use Exception;

class RegisterController extends Controller
{
     // configure access control
    //  public function __construct()
    //  {
    //      $this->middleware('auth',['except'=>['employees']]);
    //  }
    public function index(){
        return view('verify.register');
    }

    public function register(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'email'=>'required|email|unique:users',
            'contact'=>'required',
            'username'=>'required|unique:users|max:16',
            'password'=>'required|min:8|same:confirmPassword',
        ]);
    
        // Start a database transaction
        DB::beginTransaction();
        
        try {
            // Create a new User instance
            $user = new User;
            $user->email = $validatedData['email'];
            $user->contact =$validatedData['contact'];
            $user->username = $validatedData['username'];
            $user->password = Hash::make($validatedData['password']);
            $user->save();
    
            // Create a new Role instance
            $role = new Role;
            $role->role_type = "Employee"; // Assuming this is the default role type
            $role->userID = $user->id;
            $role->save();
    
            // Commit the transaction if all operations were successful
            DB::commit();
    
            // Redirect to login page with success message
            return redirect('/login')->with('success', 'User Account Created Successfully');
        } catch (Exception $e) {
            // Rollback the transaction in case of any errors
            DB::rollback();
    
            // Redirect back to the registration page with an error message
            return redirect('/register')->with('error', 'Failed to register user');
        }
    }
}
