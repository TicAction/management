<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{

  public $timestamps =false;

    protected $fillable = [
        'school_name',
        'school_region',
        'school_adress',
        'school_city',
        'school_phone',
        'school_email',
        'school_url',
    ];

    public function schoolboard()
    {
        return $this->belongsTo(Schoolboard::class);
    }

    public function users()
    {
      return $this->belongsToMany(User::class);
    }
    // manytomany morphTo
  
}
