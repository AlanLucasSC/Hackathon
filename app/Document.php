<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function document_type()
    {
        return $this->belongsTo(DocumentType::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
