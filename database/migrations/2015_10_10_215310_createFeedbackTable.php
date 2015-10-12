<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration {
	public function up() {
		Schema::create('feedback', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->text('feedbackOnMentor');
			$table->text('feedbackOnProgram');
			$table->text('ideasForCurrentSemester');
			$table->text('ideasForNextSemester');
			$table->timestamps();
		});
	}
	public function down() {
		Schema::drop('feedback');
	}
}
