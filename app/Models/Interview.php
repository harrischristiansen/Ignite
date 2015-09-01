<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model {
	protected $dates = ['interviewDate'];

	public function applications() {
		return $this->hasMany('App\Models\Application');
	}
}
