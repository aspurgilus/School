<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
	protected $guarded = [];

	/*protected $Name = 'unknown';
	protected $City = 'unknown';
	protected $Address = 'unknown';
    protected $fillable = ['Name','City','Address'];*/

	public function addRecord()
	{
		$this->create(\request()->validate([
			'name' => ['required','min:4'],
			'city' => ['required','min:2'],
			'address' => ['required','min:6']]));
	}
	public function updateRecord()
	{
		$this->update(\request()->validate([
			'name' => ['required','min:4'],
			'city' => ['required','min:2'],
			'address' => ['required','min:6']]));
	}

	public function courses()
	{
		return $this->hasMany(Course::class);
	}
	public function actions()
	{
		return $this->hasMany(Action::class);
	}
}
