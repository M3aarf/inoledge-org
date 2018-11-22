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
            return  \DataTables::of(student::query())->make(true);
    }
}
