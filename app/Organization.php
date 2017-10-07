<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function people()
    {
        return $this->hasMany(Person::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
