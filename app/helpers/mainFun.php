<?php

use Illuminate\Http\Request;
use App\course;
use App\camp;
function courseTitle($id)
{
    $course = course::find($id);
    return $course->title;   
}