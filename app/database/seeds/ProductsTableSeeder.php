<?php


class ProductsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('products')->delete();
        $games      = DB::table('games')->get();
        $platforms  = DB::table('platforms')->get();
        $users      = DB::table('users')->get();
        $conditions = DB::table('conditions')->get();

        $products = [
            [
                'user_id'       => $users[1]->id,
                'game_id'       => $games[0]->id,
                'platform_id'   => $platforms[0]->id,
                'conditions_id' => $conditions[0]->id,
                'price'         => '199.99',
                'description'   => 'lorem ipsum in supu tamadre',
            ], [
                'user_id'       => $users[2]->id,
                'game_id'       => $games[0]->id,
                'platform_id'   => $platforms[2]->id,
                'conditions_id' => $conditions[1]->id,
                'price'         => '199.99',
                'description'   => 'lorem ipsum in supu tamadre',
            ], [
                'user_id'       => $users[3]->id,
                'game_id'       => $games[0]->id,
                'platform_id'   => $platforms[2]->id,
                'conditions_id' => $conditions[2]->id,
                'price'         => '199.99',
                'description'   => 'lorem ipsum in supu tamadre',
            ], [
                'user_id'       => $users[4]->id,
                'game_id'       => $games[0]->id,
                'platform_id'   => $platforms[2]->id,
                'conditions_id' => $conditions[1]->id,
                'price'         => '199.99',
                'description'   => 'lorem ipsum in supu tamadre',
            ], [
                'user_id'       => $users[5]->id,
                'game_id'       => $games[0]->id,
                'platform_id'   => $platforms[2]->id,
                'conditions_id' => $conditions[0]->id,
                'price'         => '199.99',
                'description'   => 'lorem ipsum in supu tamadre',
            ], [
                'user_id'       => $users[1]->id,
                'game_id'       => $games[1]->id,
                'platform_id'   => $platforms[2]->id,
                'conditions_id' => $conditions[3]->id,
                'price'         => '199.99',
                'description'   => 'lorem ipsum in supu tamadre',
            ], [
                'user_id'       => $users[1]->id,
                'game_id'       => $games[1]->id,
                'platform_id'   => $platforms[2]->id,
                'conditions_id' => $conditions[0]->id,
                'price'         => '199.99',
                'description'   => 'lorem ipsum in supu tamadre',
            ], [
                'user_id'       => $users[1]->id,
                'game_id'       => $games[1]->id,
                'platform_id'   => $platforms[2]->id,
                'conditions_id' => $conditions[0]->id,
                'price'         => '199.99',
                'description'   => 'lorem ipsum in supu tamadre',
            ], [
                'user_id'       => $users[1]->id,
                'game_id'       => $games[3]->id,
                'platform_id'   => $platforms[2]->id,
                'conditions_id' => $conditions[0]->id,
                'price'         => '199.99',
                'description'   => 'lorem ipsum in supu tamadre',
            ], [
                'user_id'       => $users[1]->id,
                'game_id'       => $games[4]->id,
                'platform_id'   => $platforms[2]->id,
                'conditions_id' => $conditions[0]->id,
                'price'         => '199.99',
                'description'   => 'lorem ipsum in supu tamadre',
            ],
        ];

        DB::table('products')->insert( $products );
    }
} 