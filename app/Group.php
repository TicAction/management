<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
  protected $fillable=[
    'group_name','group_code'
  ];
  protected $dates=[
    'created_at',
    'updated_at',
  ];

public function user()
{
  return $this->belongsTo(User::class);
}

}
