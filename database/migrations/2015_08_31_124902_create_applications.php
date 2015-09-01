<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplications extends Migration {
	public function up() {
		Schema::create('applications', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('email');
			$table->integer('interview_id')->unsigned();
			$table->boolean('emailed'); // Keeps track of if candidate has been notified of current interview time

			// Application
			$table->string('facebook');
			$table->text('picture');
			$table->text('about');
			$table->text('why');
			$table->text('experience');
			$table->text('os');
			$table->text('languages');
			$table->text('interests');
			$table->text('availability');

			// Interview
			$table->integer('mentor_id')->unsigned()->nullable();
			$table->string('status');
			$table->text('notes');

			$table->timestamps();
		});

		Schema::table('applications', function ($table) {
			$table->foreign('interview_id')->references('id')->on('interviews');
		});
	}
	
	public function down() {
		Schema::drop('applications');
	}
}
