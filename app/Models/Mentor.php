<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model {
    public function applicants() {
		return $this->hasMany('App\Models\Application');
	}
}
