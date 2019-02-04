<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\School;
use App\Events\SchoolCreated;


class SchoolsController extends Controller
{
	public function __construct() {
		$this->middleware('auth')->except('index','show');
	}

	public function index() {
    	$schools = School::all();
		if(auth()->user()) {
    		$schoolLimit = auth()->user()->schools;
    	}
    	else {
    		$schoolLimit = true;
		}
    	return view('schools.index',compact('schools','schoolLimit'));
	}
	public function create()
	{
		$schools = auth()->user()->schools;
		abort_if($schools,403);
		return view('schools.create');
	}
	public function store()
		{
			$attributes = $this->validateSchool();
			//auth()->user()->schools()->create($attributes);

			$attributes['Owner_id'] = auth()->id();
			$school = School::create($attributes);
			event(new SchoolCreated($school));
			return redirect('/schools');
	}
	public function show(School $school)
	{
		return view('/schools.show',compact('school'));
	}
	public function edit(School $school)
	{
		$this->authorize('edit',$school);
		return view('/schools.edit',compact('school'));
	}
	public function update(School $school)
	{
		$this->authorize('update',$school);
		$school->update($this->validateSchool());
		return redirect('/schools');
	}
	public function destroy(School $school)
	{
		$this->authorize('delete',$school);
		$school->delete();
		return redirect('/schools');
	}
	public function validateSchool() {
		return \request()->validate([
			'name' => ['required','min:4'],
			'city' => ['required','min:2'],
			'address' => ['required','min:6']]);
	}
}
