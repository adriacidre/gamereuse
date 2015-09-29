<?php


class GamesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('games')->delete();
        $content = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.";

        $titles = [
            'Mario Kart 8',
            'Tekken 99',
            'The Last of Us',
            'Legend of Zelda : The Wind waker',
            'Pin i Pon la casa maldita',
            'Aladdin',
            'Doom',
            'Streets of Rage',
            'Sonic the Headdog',
            'Super Punch Out',
            'Dungeons and Dragons',
            'Dragon Quest IV',
            'Street Fighter II',
            'Mortal Kombat',
            'Fifa 15',
        ];

        for ($i=0; $i<count($titles); $i++) {
            $games[] = [
                'title'             => $titles[$i],
                'image'             => 'assets/images/portfolio/vign4.jpg',
                'slug'              => "game-$i",
                'content'           => $content,
                'meta_title'        => "game-$i",
                'meta_description'  => "game-$i",
                'meta_keywords'     => "game-$i",
            ];
        }

        DB::table('games')->insert( $games );
    }
} 