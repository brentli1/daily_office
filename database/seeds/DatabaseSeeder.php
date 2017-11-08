<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LessonDaySeeder::class);
        $this->call(LessonDateSeeder::class);
        $this->call(LessonSeeder::class);
        $this->call(PassageSeeder::class);
    }
}
