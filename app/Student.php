<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
      'firstname',
      'lastname',
      'code',
      'anniversary',
    ];

    protected $dates =[
      'anniversary',
      'created_at',
      'updated_at',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function getFullnameAttribute()
    {
        return $this->firstname. ' ' .$this->lastname;
    }

    public function setFirstnameAttribute($firstname)
    {
        return $this->attributes['firstname'] = ucfirst($firstname);
    }

    public function setLastnameAttribute($lastname)
    {
        return $this->attributes['lastname'] = ucfirst($lastname);
    }

    public function academy()
    {
      return $this->hasOne(Academy::class);
    }

    public function particular()
    {
      return $this->hasOne(Particular::class);
    }

    public function service()
    {
      return $this->hasOne(Service::class);
    }
}
