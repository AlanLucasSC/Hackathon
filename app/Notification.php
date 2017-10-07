<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function organization()
    {
        return $this->belongsToOne(App\Organization::class);
    }
}
