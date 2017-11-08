<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\LessonDay;
use App\Passage;

class Lesson extends Model
{
    public function lessonDay() {
        return $this->belongsTo('App\LessonDay');
    }

    public function passages() {
        return $this->hasMany('App\Passage');
    }
}
