<?php

use Illuminate\Database\Seeder;
use App\Lesson;
use App\Passage;

class PassageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $passage = new Passage();
        $passage->book_name = 'Isaiah';
        $passage->chapter = 1;
        $passage->verse = 1;
        $passage->esv_text = "The vision of Isaiah the son of Amoz, which he saw concerning Judah and Jerusalem in the days of Uzziah, Jotham, Ahaz, and Hezekiah, kings of Judah.";
        $passage->nrsv_text = "The vision of Isaiah son of Amoz, which he saw concerning Judah and Jerusalem in the days of Uzziah, Jotham, Ahaz, and Hezekiah, kings of Judah.";
        $passage->lesson()->associate(Lesson::find(1));
        $passage->save();

        $passage = new Passage();
        $passage->book_name = 'Isaiah';
        $passage->chapter = 1;
        $passage->verse = 2;
        $passage->esv_text = "Hear, O heavens, and give ear, O earth; for the Lord has spoken: \"Children have I reared and brought up, but they have rebelled against me.";
        $passage->nrsv_text = "Hear, O heavens, and listen, O earth; for the Lord has spoken: I reared children and brought them up, but they have rebelled against me.";
        $passage->lesson()->associate(Lesson::find(1));
        $passage->save();

        $passage = new Passage();
        $passage->book_name = 'Isaiah';
        $passage->chapter = 1;
        $passage->verse = 3;
        $passage->esv_text = "The ox knows its owner, and the donkey its master's crib, but Israel does not know, my people do not understand.\"";
        $passage->nrsv_text = "The ox knows its owner, and the donkey its master’s crib; but Israel does not know, my people do not understand.";
        $passage->lesson()->associate(Lesson::find(1));
        $passage->save();
    }
}
