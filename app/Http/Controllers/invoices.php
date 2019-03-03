<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\camp;
use DataTables;
use DB;
class invoices extends Controller
{
    public function add()
    {
        $camp = camp::select('camp_date','start_end')->get();
        $data = array
            (
            'camps' => $camp,
        );
        return view('invoices.new')->with($data);
    }
    public function create(Request $request)
    {
        
    }
}
