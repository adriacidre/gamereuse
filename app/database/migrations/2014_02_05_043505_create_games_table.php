<?php

use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the `Games` table
		Schema::create('games', function($table)
		{
            $table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->integer('platform_id')->unsigned()->index();
			$table->string('uuid');
			$table->string('title');
            $table->string('image');
			$table->string('back_image');
			$table->string('slug');
			$table->text('content');
			$table->string('meta_title');
			$table->text('meta_description');
			$table->string('meta_keywords');
			$table->string('esrb');
			$table->string('players');
			$table->string('cooperative');
			$table->text('youtube');
			$table->string('publisher');
			$table->string('developer');
			$table->float('rating')->default(0);
			$table->timestamp('released_at');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Delete the `Games` table
		Schema::drop('games');
	}

}
