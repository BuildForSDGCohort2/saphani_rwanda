<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserHomecontroller extends Controller
{
    public function Useprofile(){
        return view('Home.Setting');
    }
}
