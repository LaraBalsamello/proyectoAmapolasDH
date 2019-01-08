<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  protected $guarded = [
      'id', 'created_at', 'updated_at',
  ];

  public function users()
  {
    return $this->belongsToMany(User::class);
  }
}
