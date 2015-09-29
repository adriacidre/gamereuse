<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GamesSearch extends Migration {

	public function up()
	{
		DB::statement("ALTER TABLE games ADD COLUMN searchtext TSVECTOR;");
		DB::statement("UPDATE games SET searchtext = to_tsvector('english', title || '' || content || '');");
		DB::statement("CREATE INDEX searchtext_gin ON games USING GIN(searchtext);");
		DB::statement("CREATE TRIGGER ts_searchtext BEFORE INSERT OR UPDATE ON games FOR EACH ROW EXECUTE PROCEDURE tsvector_update_trigger('searchtext', 'pg_catalog.english', 'title', 'content');");
	}

	public function down()
	{

	}

}
