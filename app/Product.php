<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $guarded = [
      'id', 'created_at', 'updated_at',
  ];

  public function ingredients()
  {
    return $this->belongsToMany(Ingredient::class);
  }
  public function categories()
  {
    return $this->belongsToMany(Category::class);
  }
}
