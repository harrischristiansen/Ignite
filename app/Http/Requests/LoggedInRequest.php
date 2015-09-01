<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LoggedInRequest extends Request {
	public function authorize() {
		if(session('loggedIn') != "true") {
			return false;
		}
		return true;
	}
	public function rules() {
		return [
			//
		];
	}
}
