<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMentors extends Migration {

	public function up(){
		Schema::create('mentors', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('title');
			$table->string('image');
			$table->string('tagline');
			$table->text("description");
			$table->text("orgs");
			$table->string('facebook');
			$table->string('github');
			$table->string('website');
			$table->string('email');
			$table->timestamps();
		});
	}

	public function down() {
		Schema::drop('mentors');
	}
}
