<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }

    public function form1()
	{
		return view('layouts.form1');
	}
	public function store1()
	{
		$genInfo = new School();
		$genInfo->Name = \request('name');
		$genInfo->City = \request('city');
		$genInfo->Address = \request('address');
		$genInfo->save();
		return redirect('/home');
	}
}
