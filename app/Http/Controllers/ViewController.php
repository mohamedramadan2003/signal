<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function create($id)
    {
      
      $videos_department = Video::where('level_id' ,$id)->get();
      return view('choose course.view',['videos_department'=>$videos_department]);
    }
    public function index($id)
    {
       $videos_department = Video::where('department_id' ,$id)->get();
       return view('choose course.view',['videos_department'=>$videos_department]);
    }
    public function special($id)
    {
      $videos_department = Video::where('specialcourse_id' ,$id)->get();
      return view('choose course.view',['videos_department'=>$videos_department]);
    }
}
