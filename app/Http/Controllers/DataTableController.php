<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request;
use App\student;
use DataTables;
use DB;
class DataTableController extends Controller
{
    public function getStudnts()
    {
            return  \DataTales::of(studnt::query())->make(true);
    }
}
