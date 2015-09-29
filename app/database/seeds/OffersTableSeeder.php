<?php


class OffersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('offers')->delete();

        $products = DB::table('products')->get();
        $users    = DB::table('users')->get();
        $statuses = DB::table('statuses')->get();

        $offers     = [
            [
                'user_id'    => $users[1]->id,
                'product_id' => $products[1]->id,
                'status_id'  => (int)$statuses[0]->id,
                'price'      => '199'
            ],
            [
                'user_id'    => $users[1]->id,
                'product_id' => $products[2]->id,
                'status_id'  => (int)$statuses[1]->id,
                'price'      => '10'
            ],
            [
                'user_id'    => $users[1]->id,
                'product_id' => $products[3]->id,
                'status_id'  => (int)$statuses[2]->id,
                'price'      => '5'
            ],
            [
                'user_id'    => $users[1]->id,
                'product_id' => $products[3]->id,
                'status_id'  => (int)$statuses[2]->id,
                'price'      => '59'
            ],
            [
                'user_id'    => $users[2]->id,
                'product_id' => $products[2]->id,
                'status_id'  => (int)$statuses[1]->id,
                'price'      => '60.5'
            ],
            [
                'user_id'    => $users[3]->id,
                'product_id' => $products[3]->id,
                'status_id'  => (int)$statuses[2]->id,
                'price'      => '250'
            ],
            [
                'user_id'    => $users[4]->id,
                'product_id' => $products[4]->id,
                'status_id'  => (int)$statuses[0]->id,
                'price'      => '1999.99'
            ],
            [
                'user_id'    => $users[5]->id,
                'product_id' => $products[5]->id,
                'status_id'  => (int)$statuses[0]->id,
                'price'      => '12'
            ],
            [
                'user_id'    => $users[6]->id,
                'product_id' => $products[6]->id,
                'status_id'  => (int)$statuses[0]->id,
                'price'      => '53'
            ],
            [
                'user_id'    => $users[4]->id,
                'product_id' => $products[4]->id,
                'status_id'  => (int)$statuses[1]->id,
                'price'      => '23'
            ],
            [
                'user_id'    => $users[4]->id,
                'product_id' => $products[4]->id,
                'status_id'  => (int)$statuses[2]->id,
                'price'      => '123'
            ],
        ];

        DB::table('offers')->insert( $offers );
    }
} 