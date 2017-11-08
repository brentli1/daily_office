<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\LessonDate;
use App\Lesson;

class LessonDay extends Model
{
    public function lessonDates() {
        return $this->hasMany('App\LessonDate');
    }

    public function lessons() {
        return $this->hasMany('App\Lesson');
    }
}
