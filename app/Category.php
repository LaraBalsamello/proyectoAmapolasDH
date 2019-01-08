<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $guarded = [
      'id', 'created_at', 'updated_at',
  ];

  public function products()
  {
    return $this->hasMany(Product::class);
  }
}
