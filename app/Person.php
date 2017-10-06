<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function organization()
    {
        return $this->belongsToOne(App\Organization::class);
    }
}
