<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
  protected $guarded = [
      'id', 'created_at', 'updated_at',
  ];

  public function products()
  {
    return $this->belongsToMany(Product::class);
  }
}
