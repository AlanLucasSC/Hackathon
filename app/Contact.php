<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $table = 'contacts';
  public function owner()
  {
      return $this->belongsTo(Organization::class);
  }
  public function person()
  {
      return $this->belongsToOne(Person::class);
  }
}
