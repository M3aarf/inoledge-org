<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use DataTables;
use DB;
class DataTableController extends Controller
{
    public function getStudents()
    {
              $std =  student::query();
            return  \DataTables::of($std)
                ->addColumn('action',function($std)
                {
                    $link =  url("/student/{$std->id}");
                    return '<a href='.$link.'><i class="fa fa-user" ></i> </a>';
                })
                ->make(true);
    }
}
