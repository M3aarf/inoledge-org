<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use App\camp;
use DataTables;
use DB;

class camps extends Controller
{
    public function index()
    {
        
        $data = array 
            (
            'camps' => camp::all(),
            'course' => course::select('id','title'),
        );
        return view('pages.camp')->with($data);
    }

    public function new()
    {
        return view('camp.new')->with('courses',course::all());
    }
    public  function view($id)
    {
        $data = array 
            (
            'camp' => camp::find($id),
        );
        return view('camp.view')->with($data);
    }
    public function add_new(Request $request)
    {
        
        $camp =  new camp();
        $camp->course_id = $request->input('course_id');
        $camp->camp_date = $request->input('camp_date');
        $camp->sessions_num = $request->input('sessions_num');
        $camp->hours = $request->input('hours');
        $camp->start_end = $request->input('start_end');
        $camp->cost = $request->input('cost');
        $camp->day = $request->input('day');
        $camp->instructor = $request->input('instructor');
        $camp->save();
        
        return redirect()->route('camps');
        
    }
     public function edit($id)
    {
        
        $camp =  camp::find($id);
         $data = array
             (
             'camp' => $camp,
             'courses'=>course::all(),
         );
        
       return view('camp.edit')->with($data);
        
    }
     public function update(Request $request)
    {
        
        $camp =  camp::find($request->input('id'));
        $camp->course_id = $request->input('course_id');
        $camp->camp_date = $request->input('camp_date');
        $camp->sessions_num = $request->input('sessions_num');
        $camp->hours = $request->input('hours');
        $camp->start_end = $request->input('start_end');
        $camp->cost = $request->input('cost');
        $camp->day = $request->input('day');
        $camp->instructor = $request->input('instructor');
        $camp->save();
        
      return redirect()->route('camps');
        
    }
}
