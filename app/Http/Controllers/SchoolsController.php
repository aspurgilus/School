<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;

class SchoolsController extends Controller
{
    public function index() {
    	$schools = school::all();
    	return view('schools.index',compact('schools'));
	}
	public function create()
	{
		return view('layouts.create');
	}
	public function store()
	{
		school::creating(\request(['name','city','address']));
		return redirect('/schools');
	}
	public function show(School $school)
	{
		return view('/layouts.show',compact('school'));
	}
	public function edit(School $school)
	{
		return view('/layouts.edit',compact('school'));
	}
	public function update(School $school)
	{
		$school->update(\request(['name','city','address']));

		return redirect('/schools');
	}
	public function destroy(School $school)
	{
		$school->delete();
		return redirect('/schools');
	}
}
