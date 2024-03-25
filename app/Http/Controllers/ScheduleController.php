<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\schedule;


class ScheduleController extends Controller
{


    public function display(){

        $schedule = schedule::all();

        return view('pages.index', compact('schedule'));

    }


/*
    public function display(){

        return view('pages.index');

    }

*/

}
