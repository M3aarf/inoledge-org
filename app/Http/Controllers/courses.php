<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use DataTables;
use DB;
class courses extends Controller
{
    public function index()
    {
        $courses_all = course::all();
        $data = array(
            'courses' => $courses_all,
        );
        return view('pages.courses')->with($data);
    }
    public function new(Request $request)
    {
        $std          = new course;
        $std->title   = $request->input('title');
        $std->hours   = $request->input('hours');
        $std->content = $request->input('content');
        $std->target  = $request->input('target');
        $std->requir  = $request->input('requir');
        $std->save();
        return redirect()->route('courses');
    }
    public function viewCourse($id)
    {
        $course = course::find($id);
        return view('courses.view')->with('course',$course);

    }
    public function edit($id)
    {
        $course = course::find($id);
        return view('courses.edit')->with('course',$course);
    }
    public function update_course(Request $request)
    {
        $std         =  new course();
        $id          = $request->input('id');
        $cour        = course::find($id);
        $cour->title = $request->input('title');
        $cour->content = $request->input('content');
        $cour->hours  = $request->input('hours');
        $cour->target  = $request->input('target');
        $cour->requir    = $request->input('requir');
        $cour->save();
        return redirect('/courses');
    }

}