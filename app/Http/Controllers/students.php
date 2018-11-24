<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use DataTables;
use DB;
class students extends Controller
{
    public function new(Request $request)
    {
          $std         = new student;
          $std->arName = $request->input('ar-name');
          $std->enName = $request->input('en-name');
          $std->phone  = $request->input('phone');
          $std->email  = $request->input('email');
          $std->bod    = $request->input('dob');
          $std->carT   = $request->input('field');
          $std->carF   = $request->input('career');
          $std->connec = $request->input('connec');
          $std->howfar = $request->input('loction');
          $std->notes  = $request->input('notes');
          $std->save();
          return redirect()->route('students');
    }
    public function viewStudent($id)
    {
            $std = student::find($id);
            $date = new \DateTime($std->created_at);
            $date = $date->format('Y-m-d');
            $data = array
            (
                'name'   => $std->arName,
                'enname' => $std->enName,
                'phone'  => $std->phone,
                'email'  => $std->email,
                'howfar' => $std->howfar,
                'field'  => $std->carF,
                'connec' => $std->connec,
                'created'=> $date,
                'birth'  => $std->bod,
                'career' => $std->carT,
                'notes'  => $std->notes,
                'id'  => $id,
            );
             return view('students.profile')->with($data);
    }
    public function update_student(Request $request)
    {
        $std         =  new student();
        $id          = $request->input('id');
        $std         = student::find($id);
        $std->arName = $request->input('ar-name');
        $std->enName = $request->input('en-name');
        $std->phone  = $request->input('phone');
        $std->email  = $request->input('email');
        $std->bod    = $request->input('dob');
        $std->carT   = $request->input('career');
        $std->carF   = $request->input('field');
        $std->connec = $request->input('connec');
        $std->howfar = $request->input('loction');
        $std->notes  = $request->input('notes');
        $std->save();
        return redirect('/students');
    }

}