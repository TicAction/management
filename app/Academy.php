<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
	public $fillable =[
	'readind',
	'writing',
	'concept',
	'problem',
	'english',
	'comment',
	'student_id',
	];
	public $dates =['created_at','updated_at'];
    
     public function student()
    {
    	return $this->belongsTo(Student::class);
    }
}
