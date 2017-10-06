<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function document_type()
    {
        return $this->hasOne(App\Document_Type::class);
    }
}