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
          $std->save();
    }
}
