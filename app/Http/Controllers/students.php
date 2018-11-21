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
          $std = new student;
          $std->arName = $request->input('ar-name');
          $std->enName = $request->input('en-name');
          $std->phone = $request->input('phone');
          $std->email = $request->input('email');
          $std->bod = $request->input('dob');
          $std->carT = $request->input('field');
          $std->carF = $request->input('career');
          $std->connec = $request->input('connec');
          $std->howfar = $request->input('loction');
          $std->notes= $request->input('notes');
          $std->save();
    }
}
