<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('verify.login');
    }
    public function login(Request $request)
    {

        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
        ])) {
            // select data from table users ,email 
            $user = User::where('username', $request->username)->first();
            // check user roles
            if ($user->is_admin()) {
                return redirect()->intended('/admin');
            
            } elseif ($user->is_student()) {
                return redirect()->intended('/students/student');
            
            } elseif ($user->is_qualityassuarance()) {
                return redirect()->intended('/responses');
            
            }elseif ($user->is_dean()) {
                return redirect()->intended('/dean');
            
            }elseif ($user->is_student()) {
                return redirect()->intended('/guest');
            
            }
            return redirect()->intended('/guest');
        }
    }
}
