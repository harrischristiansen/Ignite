<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddApplicationColumns extends Migration {
	public function up() {
		Schema::table('applications', function (Blueprint $table) {
			$table->boolean('passionate')->after('email');
			$table->boolean('driven')->after('passionate');
			$table->boolean('committed')->after('driven');
			$table->float('appRating')->after('committed');
			$table->boolean('reviewed')->after('appRating');
			$table->float('interviewRating')->after('interviewed');
			$table->boolean('statusEmailed')->after('status');
		});
	}
	public function down() {
	}
}
