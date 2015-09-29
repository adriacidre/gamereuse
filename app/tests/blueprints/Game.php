<?php

use Woodling\Woodling;
use J20\Uuid;
use Carbon\Carbon;

Woodling::seed('Game 1', array('class' => 'Game', 'do' => function($blueprint) {
    $blueprint->title               = 'Mario Kart 8';
    $blueprint->image               = 'assets/images/portfolio/vign4.jpg';
    $blueprint->slug                = 'game-1';
    $blueprint->content             = "Hola \n supu";
    $blueprint->meta_title          = 'Game 1';
    $blueprint->meta_description    = 'Game 1';
    $blueprint->meta_keywords       = 'Game 1, console, game';
}));

Woodling::seed('Game 2', array('class' => 'Game', 'do' => function($blueprint){
    $blueprint->title               = 'Game 2';
    $blueprint->image               = 'assets/images/portfolio/game2.jpg';
    $blueprint->slug                = 'game-2';
    $blueprint->meta_title          = "Hola \n supu";
    $blueprint->content             = 'body 2';
    $blueprint->meta_description    = 'Game 2';
    $blueprint->meta_keywords       = 'Game 2, console, game';
}));
