<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable =[
      'classroom_name',
      'group_id',
    ];
    protected $dates =[
      'created_at',
      'updated_at',
    ];

    public function users()
    {
      return $this->belongsToMany(User::class);
    }
}
