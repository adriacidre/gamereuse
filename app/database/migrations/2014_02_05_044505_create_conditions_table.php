<?php

use Illuminate\Database\Migrations\Migration;

class CreateConditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the `Conditions` table
		Schema::create('conditions', function($table)
		{
            $table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->string('name');
            $table->text('description');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
		});

        DB::table('conditions')->insert([
            [ 'name' => 'New', 'description' => 'Factory Sealed. Never opened.' ],
            [ 'name' => 'Excellent', 'description' => 'Game plays perfectly. May have minor scratches. Case has no more than a few minor scratches. No personal markings. Not a previous rental. Instruction manual, if originally included with game, is present. Some games have digital instructions only.' ],
            [ 'name' => 'Good', 'description' => '' ],
            [ 'name' => 'Sold Out', 'description' => '' ]
        ]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Delete the `Conditions` table
		Schema::drop('conditions');
	}

}
