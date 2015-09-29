<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatformsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        // Create the `Platforms` table
        Schema::create('platforms', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('uuid');
            $table->string('title');
            $table->string('image');
            $table->string('slug');
            $table->text('content');
            $table->string('meta_title');
            $table->text('meta_description');
            $table->string('meta_keywords');
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
        // Delete the `Platforms` table
        Schema::drop('platforms');
	}

}
