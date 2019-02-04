<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\SchoolCreated;

class School extends Model
{
	protected $guarded = [];

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
