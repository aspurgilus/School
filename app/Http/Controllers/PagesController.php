<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	function MoscowMain() {

		$schools = \App\school::all();
		$city = 'Москва';
		return view('MoscowMain',['schools' => $schools, 'city' => $city]);
		}
}
