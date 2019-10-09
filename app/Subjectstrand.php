<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjectstrand extends Model
{
    public function subject()
    {
    	return $this->belongsTo(Subject::class);
    }

    public function strand()
    {
    	return $this->belongsTo(Strand::class);
    }
}
