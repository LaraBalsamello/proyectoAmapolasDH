<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shoppingCart extends Model
{
  protected $guarded = [
      'id', 'created_at', 'updated_at',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function address()
  {
    return $this->hasOne(Address::class);
  }

  public function shipment()
  {
    return $this->hasOne(Shipment::class);
  }

  public function payment()
  {
    return $this->hasOne(Payment::class);
  }

  public function status()
  {
    return $this->hasOne(Status::class);
  }
}
