<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //

    function regform()
    {
        return view("teacher.regform");
    }
}
