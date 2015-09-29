<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration {

	public function up()
	{
        Schema::create('statuses', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description');
        });

        DB::table('statuses')->insert([
            [ 'name' => 'Accepted', 'description' => '' ],
            [ 'name' => 'Pending', 'description' => '' ],
            [ 'name' => 'Discarded', 'description' => '' ]
        ]);

        Schema::create('offers', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned()->index();
            $table->integer('product_id')->unsigned()->index();
            $table->integer('status_id')->unsigned()->index();
            $table->float('price');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses');
        });
	}

	public function down()
	{
        Schema::drop('offers');
        Schema::drop('statuses');
	}

}
