<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviews extends Migration {
	public function up() {
		Schema::create('interviews', function (Blueprint $table) {
			$table->increments('id');
			$table->dateTime('interviewDate');
			$table->string('location');
			$table->timestamps();
		});
	}

	public function down() {
		Schema::drop('interviews');
	}
}
