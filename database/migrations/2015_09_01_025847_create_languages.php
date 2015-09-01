<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguages extends Migration {
	public function up() {
		Schema::create('languages', function (Blueprint $table) {
			$table->increments('id');
			$table->string("name");
			$table->timestamps();
		});
		Schema::create('application_language', function (Blueprint $table) {
			$table->increments('id');
			$table->integer("application_id")->unsigned();
			$table->integer("language_id")->unsigned();
			$table->timestamps();
		});
	}

	public function down() {
		Schema::drop('languages');
		Schema::drop('application_language');
	}
}
