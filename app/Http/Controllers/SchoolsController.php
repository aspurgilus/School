<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolsController extends Controller
{
    function index() {
    	$schools = \App\school::all();
    	return view('schools.index',compact('schools'));
	}
}
