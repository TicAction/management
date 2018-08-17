<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

	public $fillable =[
			'ortho',
            'psy_ed',
            'ts',
            'psycho',
            'sdg',
            'pi',
            'comment',
            'student_id',
	];
	public $dates =['created_at','updated_at'];

    public function student()
    {
    	return $this->belongsTo(Student::class);
    }
}
