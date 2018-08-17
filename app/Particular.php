<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
	public $fillable =[
	'behavior',
	'academic',
	'famillial',
	'allergy',
	'disease',
	'comment',
	'student_id',
	];
	public $dates =['created_at','updated_at'];

     public function student()
    {
    	return $this->belongsTo(Student::class);
    }
}
