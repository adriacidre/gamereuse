<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        // Create the `Products` table
        Schema::create('products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned()->index();
            $table->integer('buyer_id')->unsigned()->nullable()->default(NULL)->index();
            $table->integer('game_id')->unsigned()->index();
            $table->integer('platform_id')->unsigned()->index();
            $table->integer('conditions_id')->unsigned()->index();
            $table->float('price');
            $table->text('description');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('buyer_id')->references('id')->on('users');
            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');
            $table->foreign('platform_id')->references('id')->on('platforms')->onDelete('cascade');
            $table->foreign('conditions_id')->references('id')->on('conditions');
        });
	}

	public function down()
	{
        Schema::drop('products');
	}

}
