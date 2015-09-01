<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model {

	public function interview() {
		return $this->belongsTo('App\Models\Interview');
	}

	public function mentor() {
		return $this->belongsTo('App\Models\Mentor');
	}

	public function interests() {
		return $this->belongsToMany('App\Models\Interest');
	}

	public function interests() {
		return $this->belongsToMany('App\Models\Interest');
	}

	public function languages() {
		return $this->belongsToMany('App\Models\Language');
	}
    
}
