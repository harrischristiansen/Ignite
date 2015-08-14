<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Mentor;

class IgniteController extends Controller {
	public function getIndex() {
		$mentors = Mentor::orderBy("orderNum")->get();

		return view('pages.home', compact('mentors'));
	}

	public function getMentor($id) {
		$mentor = Mentor::find($id);

		return view('pages.mentor', compact('mentor'));
	}
}
