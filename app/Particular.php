<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
	public $fillable =[
	'particular',
	'comment',
	];
	public $dates =['created_at','updated_at'];

     public function students()
    {
    	return $this->belongsToMany(Student::class);
    }
}
