<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function organization()
    {
        return $this->belongsToOne(App\Organization::class);
    }
}
