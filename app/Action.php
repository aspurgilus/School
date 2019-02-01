<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
	protected $guarded = [];

	public function addRecord()
	{
		$this->create(\request()->validate([
			'name' => ['required','min:4'],
			'DateTime' => 'required',
			'place' => ['required','min:6'],
			'cost' => 'required',
			'school_id' => 'required'
		]));
	}

	public function complete($completed = true)
	{
		$this->update(compact('completed'));
	}


	public function school()
	{
		return $this->belongsTo(School::class);
	}
}

