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

    public function create()
	{
		return view('layouts.create');
	}
	public function store()
	{
		$genInfo = new School();
		$genInfo->Name = \request('name');
		$genInfo->City = \request('city');
		$genInfo->Address = \request('address');
		$genInfo->save();
		return redirect('/home');
	}
	public function show($id)
	{

	}
	public function edit($id)
	{
		$edition = School::find($id);
		return view('/layouts.edit',compact('edition'));
	}
	public function update($id)
	{
		$update = School::find($id);
		$update->Name = \request('name');
		$update->City = \request('city');
		$update->Address = \request('address');
		$update->save();
		return redirect('/home');
	}
	public function destroy($id)
	{

	}
}
