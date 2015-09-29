<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresTable extends Migration {

	public function up()
	{
		Schema::create('genres', function($table) {
			$table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->string('name');
			$table->text('description');
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
		});

		Schema::create('game_genres', function($table) {
			$table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->integer('game_id')->unsigned()->index();
			$table->integer('genre_id')->unsigned()->index();
			$table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');
			$table->foreign('genre_id')->references('id')->on('genres');
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
		});

	}

	public function down()
	{
		Schema::drop('game_genres');
		Schema::drop('genres');
	}

}
