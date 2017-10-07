<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'people';
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
