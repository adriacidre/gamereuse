<?php


class PlatformsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('platforms')->delete();

        $platforms = [
            [
                'title'             => 'XBOX One',
                'image'             => 'xboxone.jpg',
                'slug'              => 'xbox-one',
                'content'           => 'xbox xbox xbox xbox xbox xbox xbox xbox xbox xbox xbox xbox ',
                'meta_title'        => 'XBOX One',
                'meta_description'  => 'Microsoft XBOX One',
                'meta_keywords'     => 'xbox, console, game',
            ], [
                'title'             => 'XBOX 360',
                'image'             => 'xbox360.jpg',
                'slug'              => 'xbox-360',
                'content'           => 'xbox xbox xbox xbox xbox xbox xbox xbox xbox xbox xbox xbox ',
                'meta_title'        => 'XBOX 360',
                'meta_description'  => 'Microsoft XBOX 360',
                'meta_keywords'     => 'xbox 350',
            ], [
                'title'             => 'Playstation 4',
                'image'             => 'play4.jpg',
                'slug'              => 'playstation-4',
                'content'           => 'play play play play play play play play play play play play play ',
                'meta_title'        => 'play',
                'meta_description'  => 'play',
                'meta_keywords'     => 'xbox 350',
            ], [
                'title'             => 'Playstation 3',
                'image'             => 'play3.jpg',
                'slug'              => 'playstation-3',
                'content'           => 'play play play play play play play play play play play play play ',
                'meta_title'        => 'play',
                'meta_description'  => 'play',
                'meta_keywords'     => 'xbox 350',
            ], [
                'title'             => 'Nintendo Wii',
                'image'             => 'wii.jpg',
                'slug'              => 'wii',
                'content'           => 'play play play play play play play play play play play play play ',
                'meta_title'        => 'play',
                'meta_description'  => 'play',
                'meta_keywords'     => 'xbox 350',
            ], [
                'title'             => 'Nintendo DS',
                'image'             => 'ds.jpg',
                'slug'              => 'ds',
                'content'           => 'play play play play play play play play play play play play play ',
                'meta_title'        => 'play',
                'meta_description'  => 'play',
                'meta_keywords'     => 'xbox 350',
            ], [
                'title'             => 'Sega Megadrive',
                'image'             => 'megadrive.jpg',
                'slug'              => 'megadrive',
                'content'           => 'wii wii wii wii wii wii wii wii wii wii wii wii wii wii wii wii wii ',
                'meta_title'        => 'wii',
                'meta_description'  => 'wii',
                'meta_keywords'     => 'wii',
            ], [
                'title'             => 'Super Nintendo',
                'image'             => 'super.jpg',
                'slug'              => 'super',
                'content'           => 'wii wii wii wii wii wii wii wii wii wii wii wii wii wii wii wii wii ',
                'meta_title'        => 'wii',
                'meta_description'  => 'wii',
                'meta_keywords'     => 'wii',
            ],
        ];

        DB::table('platforms')->insert( $platforms );
    }
} 