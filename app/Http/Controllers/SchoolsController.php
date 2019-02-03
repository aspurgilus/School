<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;

class SchoolsController extends Controller
{
	public function __construct() {
		$this->middleware('auth')->except('index','show');
	}

	public function index() {
    	$schools = School::all();
		$schoolLimit = false;
		foreach($schools as $school) {
			if(auth()->id() == $school->Owner_id)
				$schoolLimit = true;
		}
    	return view('schools.index',compact('schools','schoolLimit'));
	}
	public function create()
	{
		$schools = School::all();
		foreach($schools as $school) {
			abort_if(auth()->id() == $school->Owner_id,403);
		}
		return view('schools.create');
	}
	public function store()
		{
			$attributes = \request()->validate([
			'name' => ['required','min:4'],
			'city' => ['required','min:2'],
			'address' => ['required','min:6']]);

			$attributes['Owner_id'] = auth()->id();

			School::create($attributes);

		return redirect('/schools');
	}
	public function show(School $school)
	{
		return view('/schools.show',compact('school'));
	}
	public function edit(School $school)
	{
		abort_if(auth()->id() !== $school->Owner_id,403);
		return view('/schools.edit',compact('school'));
	}
	public function update(School $school)
	{
		$school->updateRecord();
		return redirect('/schools');
	}
	public function destroy(School $school)
	{
		abort_if(auth()->id() !== $school->Owner_id,403);
		$school->delete();
		return redirect('/schools');
	}
}
