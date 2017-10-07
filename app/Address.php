<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'adresses';
    public function organization()
    {
        return $this->belongsToOne(Organization::class);
    }
}
