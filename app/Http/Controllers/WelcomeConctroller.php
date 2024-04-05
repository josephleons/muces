<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeConctroller extends Controller
{
    public function dashboard(){
        return view ('welcome.dashboard');
    }
}
