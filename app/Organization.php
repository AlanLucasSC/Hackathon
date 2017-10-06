<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public function notifications()
    {
        return $this->hasMany(App\Notification::class);
    }

    public function address()
    {
        return $this->hasOne(App\Address::class);
    }

    public function persons()
    {
        return $this->hasMany(App\Person::class);
    }
}
