<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\SchoolCreated;

class School extends Model
{
	protected $guarded = [];

	protected $dispatchesEvents = [
		'created' => SchoolCreated::class
	];

	/*protected $Name = 'unknown';
	protected $City = 'unknown';
	protected $Address = 'unknown';
    protected $fillable = ['Name','City','Address'];*/


	public function owner()
	{
		return $this->hasOne(User::class,'id','Owner_id');
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
