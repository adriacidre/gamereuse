<?php

use Woodling\Woodling;

class GameTest extends TestCase {
    public function testTitle()
    {
        $user = Woodling::retrieve('Game 1');
        $this->assertEquals( $user->title, 'Mario Kart 8' );
    }

    public function testImage()
    {
        $user = Woodling::retrieve('Game 1');
        $this->assertEquals( $user->image(), 'http://localhost/img/game/assets/images/portfolio/vign4.jpg' );
    }

    public function testUrl()
    {
        $user = Woodling::retrieve('Game 1');
        $this->assertEquals( $user->url(), 'http://localhost/game/game-1' );
    }

    public function testContent()
    {
        $user = Woodling::retrieve('Game 1');
        $this->assertEquals( $user->content(), "Hola <br />\n supu" );
    }

    public function testProducts()
    {
        $user = Woodling::retrieve('Game 1');
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Relations\HasMany', $user->products());
        $this->assertEquals( $user->products()->first(),  null);
    }
}