<?php

use Illuminate\Database\Seeder;
use App\Lesson;
use App\LessonDay;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lesson = new Lesson();
        $lesson->time_of_day = 'am';
        $lesson->lesson_number = 1;
        $lesson->lessonDay()->associate(LessonDay::find(1));
        $lesson->save();

        $lesson = new Lesson();
        $lesson->time_of_day = 'am';
        $lesson->lesson_number = 2;
        $lesson->lessonDay()->associate(LessonDay::find(1));
        $lesson->save();

        $lesson = new Lesson();
        $lesson->time_of_day = 'pm';
        $lesson->lesson_number = 1;
        $lesson->lessonDay()->associate(LessonDay::find(1));
        $lesson->save();

        $lesson = new Lesson();
        $lesson->time_of_day = 'pm';
        $lesson->lesson_number = 2;
        $lesson->lessonDay()->associate(LessonDay::find(1));
        $lesson->save();
    }
}
