<?php

use \Illuminate\Session\TokenMismatchException;

class GameControllerTest extends BaseControllerTestCase {

    public function testGetViewWithProductsOnSale()
    {
        $game = Game::find(1);
        $slug = $game->slug;
        $name = $game->title;
        $response = $this->call('GET', "/game/$slug");

        $this->assertContains($game->title, $response->getContent());
        $this->assertContains("Sell my used $name", $response->getContent());
        $this->assertContains('Used games for sale (2)', $response->getContent());

        $products = $game->products;
        foreach ($products as $product) {
            $status = $product->condition()->name;
            $platform = $product->platform;
            $this->assertContains("$status $platform $name", $response->getContent());
            $this->assertContains($product->price(), $response->getContent());
        }
    }

    public function testGetViewWithoutProductsOnSale()
    {
        $game = Game::find(2);
        $slug = $game->slug;
        $name = $game->title;
        $response = $this->call('GET', "/game/$slug");

        $this->assertContains($game->title, $response->getContent());
        $this->assertContains("Sell my used $name", $response->getContent());
        $this->assertContains('Used games for sale (0)', $response->getContent());
    }

} 