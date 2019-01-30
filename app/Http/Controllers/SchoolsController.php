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
		return view('schools.create');
	}
	public function store()
	{
		school::creating(\request()->validate([
			'name' => ['required','min:4'],
			'city' => ['required','min:2'],
			'address' => ['required','min:6']]));
		return redirect('/schools');
	}
	public function show(School $school)
	{
		return view('/schools.show',compact('school'));
	}
	public function edit(School $school)
	{
		return view('/schools.edit',compact('school'));
	}
	public function update(School $school)
	{
		$school->update(\request()->validate([
			'name' => ['required','min:4'],
			'city' => ['required','min:2'],
			'address' => ['required','min:6']]));

		return redirect('/schools');
	}
	public function destroy(School $school)
	{
		$school->delete();
		return redirect('/schools');
	}
}
