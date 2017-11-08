<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\LessonDay;

class LessonDate extends Model
{
    public function lessonDay() {
        return $this->belongsTo('App\LessonDay');
    }
}
