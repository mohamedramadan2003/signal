<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $departments = Department::orderBy('id', 'desc')->get();
        return view('Home',['departments'=>$departments]);
    }
}
