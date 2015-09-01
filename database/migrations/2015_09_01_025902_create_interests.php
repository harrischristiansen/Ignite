<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterests extends Migration {
	public function up() {
		Schema::create('interests', function (Blueprint $table) {
			$table->increments('id');
			$table->string("name");
			$table->timestamps();
		});
		Schema::create('application_interest', function (Blueprint $table) {
			$table->increments('id');
			$table->integer("application_id")->unsigned();
			$table->integer("interest_id")->unsigned();
			$table->timestamps();
		});
	}
	
	public function down() {
		Schema::drop('interests');
		Schema::drop('application_interest');
	}
}
