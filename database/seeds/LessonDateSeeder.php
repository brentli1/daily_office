<?php

use Illuminate\Database\Seeder;
use App\LessonDate;
use App\LessonDay;

class LessonDateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_date = DateTime::createFromFormat('m-d-Y', '12-03-2017');
        $id = 1;

        for($i = 0; $i < 5000; $i++) {
            $date = new LessonDate();
            $date->date = $new_date;
            $date->lessonDay()->associate(LessonDay::find($id));
            $date->save();
    
            $new_date = $new_date->modify('+1 day');

            if($id == 364) {
                $id = 1;
            } else {
                $id++;
            }
        }
    }
}
