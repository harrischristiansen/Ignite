<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetings extends Migration {
	public function up() {
		Schema::create('meetings', function (Blueprint $table) {
			$table->increments('id');
			$table->string("name");
			$table->timestamps();
		});
		Schema::create('application_meeting', function (Blueprint $table) {
			$table->increments('id');
			$table->integer("application_id")->unsigned();
			$table->integer("meeting_id")->unsigned();
			$table->timestamps();
		});
	}
	public function down() {
		Schema::drop('meetings');
		Schema::drop('application_meeting');
	}
}
