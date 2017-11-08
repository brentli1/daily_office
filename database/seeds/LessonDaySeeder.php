<?php

use Illuminate\Database\Seeder;
use App\LessonDay;

class LessonDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 365; $i++) {
            $day = new LessonDay();
            $day->save();
        }
    }
}
