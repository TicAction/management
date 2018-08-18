<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

	public $fillable =[
			'service',
			'comment',
	];
	public $dates =['created_at','updated_at','start_date','end_date'];

    public function students()
    {
    	return $this->belongsToMany(Student::class);
    }
}
