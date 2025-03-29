<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $user_counter = User::count();  
        $levels = Level::get();
        return view('choose course.index' ,
         [ 'user_counter'=>$user_counter ,
        'levels'=> $levels]);
    }
}
