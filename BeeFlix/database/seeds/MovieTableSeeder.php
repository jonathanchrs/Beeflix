<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            ['genre_id' => 1, 'title' => 'Enola Holmes', 'photo' => 'enolaHolmesThumbnail.PNG', 'description' => 'When Enola Holmes-Sherlocks 
            teen sister-discovers her mother missing, she sets off to find her, becoming a super-sleuth in her own right as she outwits her 
            famous brother and unravels a dangerous conspiracy around a mysterious young Lord.', 'rating' => '5.png'],
            
            ['genre_id' => 1, 'title' => 'Twilight', 'photo' => 'twilightThumbnail.PNG', 'description' => 'Bella Swan moves to Forks and encounters 
            Edward Cullen, a gorgeous boy with a secret.', 'rating' => '4.png'],

            ['genre_id' => 1, 'title' => 'The Devil All the Time', 'photo' => 'tdatThumbnail.PNG', 'description' => 'Sinister characters converge 
            around a young man devoted to protecting those he loves in a postwar backwoods town teeming with corruption and brutality.', 'rating' => '5.png'],

            ['genre_id' => 1, 'title' => 'Bird Box', 'photo' => 'birdBoxThumbnail.PNG', 'description' => 'Five years after an ominous unseen 
            presence drives most of society to suicide, a mother and her two children make a desperate bid to reach safety.', 'rating' => '3.png'],

            ['genre_id' => 1, 'title' => 'El Camino', 'photo' => 'elCaminoThumbnail.PNG', 'description' => 'After the events captured in the finale 
            of Breaking Bad, Jesse is now on the run, and a massive police manhunt for him is in operation. He has a plan to get out of Albuquerque, 
            but he will need heaps of cash to do it. Luckily, he knows where some may be stashed.', 'rating' => '5.png'],
        
            //======================================

            ['genre_id' => 2, 'title' => 'Avatar : The Last Airbender', 'photo' => 'avatarThumbnail.PNG', 'description' => 'In a war-torn world of elemental 
            magic, a young boy reawakens to undertake a dangerous mystic quest to fulfill his destiny as the Avatar, and bring peace to the world.', 'rating' => '5.png'],
            
            ['genre_id' => 2, 'title' => 'Spongebob Squarepants', 'photo' => 'spongebobThumbnail.PNG', 'description' => 'The misadventures of a talking sea sponge 
            who works at a fast food restaurant, attends a boating school, and lives in an underwater pineapple.', 'rating' => '5.png'],

            ['genre_id' => 2, 'title' => 'We Bare Bears', 'photo' => 'wbbThumbnail.PNG', 'description' => 'Three bear brothers do whatever they can to be a part of 
            human society by doing what everyone around them does.', 'rating' => '3.png'],

            ['genre_id' => 2, 'title' => 'Larva', 'photo' => 'larvaThumbnail.PNG', 'description' => 'In Host, Missouri, the newcomer vet, Dr Eli Rudkus, is called 
            by a farmer to look at one of his cows. The vet finds a strange parasite in the animal and sends it to the agriculture lab to be looked into. He 
            soon finds another one in a creek and he tells the townspeople the cause might be in the animals feed. Its soon discovered the meals are actually 
            an experimental genetic cocktail which is causing the parasites inside the cattle and people.', 'rating' => '4.png'],

            ['genre_id' => 2, 'title' => 'The Boss Baby', 'photo' => 'bossBabyThumbnail.PNG', 'description' => 'A suit-wearing, briefcase-carrying baby pairs up 
            with his 7-year old brother to stop the dastardly plot of the CEO of Puppy Co.', 'rating' => '5.png'],

            //=====================================

            ['genre_id' => 3, 'title' => 'Riverdale', 'photo' => 'riverdaleThumbnail.PNG', 'description' => 'While navigating the troubled waters of romance, 
            school and family, Archie and his gang become entangled in dark Riverdale mysteries.', 'rating' => '5.png'],
            
            ['genre_id' => 3, 'title' => 'Queens Gambit', 'photo' => 'gambitThumbnail.PNG', 'description' => 'Orphaned at 9, prodigious introvert Beth Harmon 
            discovers and masters the game of chess in 1960s USA. But, child stardom comes at a price.', 'rating' => '5.png'],

            ['genre_id' => 3, 'title' => '13 Reasons Why', 'photo' => '13Thumbnail.PNG', 'description' => 'Follows teenager Clay Jensen, in his quest to 
            uncover the story behind his classmate and crush, Hannah, and her decision to end her life.', 'rating' => '4.png'],

            ['genre_id' => 3, 'title' => 'Prison Break', 'photo' => 'pbThumbnail.PNG', 'description' => 'Due to a political conspiracy, an innocent man is 
            sent to death row and his only hope is his brother, who makes it his mission to deliberately get himself sent to the same prison in order 
            to break the both of them out, from the inside.', 'rating' => '4.png'],

            ['genre_id' => 3, 'title' => 'Money Heist', 'photo' => 'moneyHeistThumbnail.PNG', 'description' => 'An unusual group of robbers attempt to 
            carry out the most perfect robbery in Spanish history - stealing 2.4 billion euros from the Royal Mint of Spain.', 'rating' => '5.png']
        ]);
    }
}
