<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
            ['movie_id' => 1, 'episode' => 'Episode 1', 'title' => 'A Study in Pink'],
            ['movie_id' => 1, 'episode' => 'Episode 2', 'title' => 'The Blind Banker'],
            ['movie_id' => 1, 'episode' => 'Episode 3', 'title' => 'The Great Game'],
            ['movie_id' => 1, 'episode' => 'Episode 4', 'title' => 'A Scandal in Belgravia'],
            ['movie_id' => 1, 'episode' => 'Episode 5', 'title' => 'The Hounds of Bakerville'],
            ['movie_id' => 1, 'episode' => 'Episode 6', 'title' => 'The Reichenbach Fall'],

            ['movie_id' => 2, 'episode' => 'Episode 1', 'title' => 'Wolf Moon'],
            ['movie_id' => 2, 'episode' => 'Episode 2', 'title' => 'Second Chance at First Line'],
            ['movie_id' => 2, 'episode' => 'Episode 3', 'title' => 'Pack Mentality'],
            ['movie_id' => 2, 'episode' => 'Episode 4', 'title' => 'Magic Bullet'],
            ['movie_id' => 2, 'episode' => 'Episode 5', 'title' => 'The Tell'],
            ['movie_id' => 2, 'episode' => 'Episode 6', 'title' => 'Heart Monitor'],

            ['movie_id' => 3, 'episode' => 'Episode 1', 'title' => 'Pilot'],
            ['movie_id' => 3, 'episode' => 'Episode 2', 'title' => 'Ice Pick'],
            ['movie_id' => 3, 'episode' => 'Episode 3', 'title' => 'Angel of Mercy'],
            ['movie_id' => 3, 'episode' => 'Episode 4', 'title' => 'The Dance'],
            ['movie_id' => 3, 'episode' => 'Episode 5', 'title' => 'Got No Strings'],
            ['movie_id' => 3, 'episode' => 'Episode 6', 'title' => 'Mildred and Edmund'],

            ['movie_id' => 4, 'episode' => 'Episode 1', 'title' => 'Wolferton Splash'],
            ['movie_id' => 4, 'episode' => 'Episode 2', 'title' => 'Hyde Park Corner'],
            ['movie_id' => 4, 'episode' => 'Episode 3', 'title' => 'Windsor'],
            ['movie_id' => 4, 'episode' => 'Episode 4', 'title' => 'Act of God'],
            ['movie_id' => 4, 'episode' => 'Episode 5', 'title' => 'Smoke and Mirrors'],
            ['movie_id' => 4, 'episode' => 'Episode 6', 'title' => 'Scientia Potentia Est'],

            ['movie_id' => 5, 'episode' => 'Episode 1', 'title' => 'The Cats in The Bag'],
            ['movie_id' => 5, 'episode' => 'Episode 2', 'title' => 'Cancer Man'],
            ['movie_id' => 5, 'episode' => 'Episode 3', 'title' => 'Gray Matter'],
            ['movie_id' => 5, 'episode' => 'Episode 4', 'title' => 'Crazy Handful of Nothin'],
            ['movie_id' => 5, 'episode' => 'Episode 5', 'title' => 'A No-Rough-Stuff-Type Deal'],
            ['movie_id' => 5, 'episode' => 'Episode 6', 'title' => 'Bit by a Dead Bee'],

            //============================

            ['movie_id' => 6, 'episode' => 'Episode 1', 'title' => 'The Boy in the Iceberg'],
            ['movie_id' => 6, 'episode' => 'Episode 2', 'title' => 'The Avatar Returns'],
            ['movie_id' => 6, 'episode' => 'Episode 3', 'title' => 'The Sourthen Air Temple'],
            ['movie_id' => 6, 'episode' => 'Episode 4', 'title' => 'The Warriors of Kyoshi'],
            ['movie_id' => 6, 'episode' => 'Episode 5', 'title' => 'The King of Omashu'],
            ['movie_id' => 6, 'episode' => 'Episode 6', 'title' => 'Imprisoned'],

            ['movie_id' => 7, 'episode' => 'Episode 1', 'title' => 'Tentacle-Vision'],
            ['movie_id' => 7, 'episode' => 'Episode 2', 'title' => 'Growth Spout'],
            ['movie_id' => 7, 'episode' => 'Episode 3', 'title' => 'Someone in the Kitchen with Sandy'],
            ['movie_id' => 7, 'episode' => 'Episode 4', 'title' => 'Greasy Buffons'],
            ['movie_id' => 7, 'episode' => 'Episode 5', 'title' => 'Keep Bikini Bottom Beautiful'],
            ['movie_id' => 7, 'episode' => 'Episode 6', 'title' => 'The Curse of Bikini Bottom'],

            ['movie_id' => 8, 'episode' => 'Episode 1', 'title' => 'Our Stuff'],
            ['movie_id' => 8, 'episode' => 'Episode 2', 'title' => 'Viral Video'],
            ['movie_id' => 8, 'episode' => 'Episode 3', 'title' => 'Food Truck'],
            ['movie_id' => 8, 'episode' => 'Episode 4', 'title' => 'Chloe'],
            ['movie_id' => 8, 'episode' => 'Episode 5', 'title' => 'Pandas Date'],
            ['movie_id' => 8, 'episode' => 'Episode 6', 'title' => 'Everyday Bears'],

            ['movie_id' => 9, 'episode' => 'Episode 1', 'title' => 'Mango'],
            ['movie_id' => 9, 'episode' => 'Episode 2', 'title' => 'Larva Island'],
            ['movie_id' => 9, 'episode' => 'Episode 3', 'title' => 'Chuck'],
            ['movie_id' => 9, 'episode' => 'Episode 4', 'title' => 'Clara'],
            ['movie_id' => 9, 'episode' => 'Episode 5', 'title' => 'Fishing'],
            ['movie_id' => 9, 'episode' => 'Episode 6', 'title' => 'Pendant'],

            ['movie_id' => 10, 'episode' => 'Episode 1', 'title' => 'Bossa Nova'],
            ['movie_id' => 10, 'episode' => 'Episode 2', 'title' => 'The Museum Job'],
            ['movie_id' => 10, 'episode' => 'Episode 3', 'title' => 'Ga Ba Goo Ba Ga'],
            ['movie_id' => 10, 'episode' => 'Episode 4', 'title' => 'The Coo Chi Coup'],
            ['movie_id' => 10, 'episode' => 'Episode 5', 'title' => 'Lights, Camera, Org Chart!'],
            ['movie_id' => 10, 'episode' => 'Episode 6', 'title' => 'The Big Break'],

            //==========================

            ['movies_id' => 11, 'episode' => 'Episode 1', 'title' => 'The Rivers Edge'],
            ['movies_id' => 11, 'episode' => 'Episode 2', 'title' => 'Touch of Evil'],
            ['movies_id' => 11, 'episode' => 'Episode 3', 'title' => 'Body Double'],
            ['movies_id' => 11, 'episode' => 'Episode 4', 'title' => 'The Last Picture Show'],
            ['movies_id' => 11, 'episode' => 'Episode 5', 'title' => 'Heart of Darkness'],
            ['movies_id' => 11, 'episode' => 'Episode 6', 'title' => 'In a Lonely Place'],

            ['movies_id' => 12, 'episode' => 'Episode 1', 'title' => 'Openings'],
            ['movies_id' => 12, 'episode' => 'Episode 2', 'title' => 'Exchanges'],
            ['movies_id' => 12, 'episode' => 'Episode 3', 'title' => 'Doubled Pawns'],
            ['movies_id' => 12, 'episode' => 'Episode 4', 'title' => 'Middle Game'],
            ['movies_id' => 12, 'episode' => 'Episode 5', 'title' => 'Fork'],
            ['movies_id' => 12, 'episode' => 'Episode 6', 'title' => 'Adjourment'],

            ['movies_id' => 13, 'episode' => 'Episode 1', 'title' => 'Winter Break'],
            ['movies_id' => 13, 'episode' => 'Episode 2', 'title' => 'College Tour'],
            ['movies_id' => 13, 'episode' => 'Episode 3', 'title' => 'Valentines Day'],
            ['movies_id' => 13, 'episode' => 'Episode 4', 'title' => 'Senior Camping Trip'],
            ['movies_id' => 13, 'episode' => 'Episode 5', 'title' => 'House Party'],
            ['movies_id' => 13, 'episode' => 'Episode 6', 'title' => 'Prom'],

            ['movies_id' => 14, 'episode' => 'Episode 1', 'title' => 'Ogygia'],
            ['movies_id' => 14, 'episode' => 'Episode 2', 'title' => 'Kaniel Outis'],
            ['movies_id' => 14, 'episode' => 'Episode 3', 'title' => 'The Liar'],
            ['movies_id' => 14, 'episode' => 'Episode 4', 'title' => 'The Prisoners Dilemma'],
            ['movies_id' => 14, 'episode' => 'Episode 5', 'title' => 'Contingency'],
            ['movies_id' => 14, 'episode' => 'Episode 6', 'title' => 'Phaecia'],

            ['movies_id' => 15, 'episode' => 'Episode 1', 'title' => 'Game Over'],
            ['movies_id' => 15, 'episode' => 'Episode 2', 'title' => 'Berlins Wedding'],
            ['movies_id' => 15, 'episode' => 'Episode 3', 'title' => 'Anatomy Lesson'],
            ['movies_id' => 15, 'episode' => 'Episode 4', 'title' => 'Pasodouble'],
            ['movies_id' => 15, 'episode' => 'Episode 5', 'title' => 'Astray'],
            ['movies_id' => 15, 'episode' => 'Episode 6', 'title' => 'The Paris Plan']
        ]);
    }
}
