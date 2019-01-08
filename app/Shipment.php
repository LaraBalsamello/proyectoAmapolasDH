<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
  protected $guarded = [
      'id', 'created_at', 'updated_at',
  ];

  public function shoppingCart()
  {
    return $this->belongsTo(shoppingCart::class);
  }
}
