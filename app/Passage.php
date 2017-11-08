<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lesson;

class Passage extends Model
{
    public function lesson() {
        return $this->belongsTo('App\Lesson');
    }
}
