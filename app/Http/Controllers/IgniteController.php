<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\LoggedInRequest;
use App\Http\Controllers\Controller;
use App\Models\Mentor;
use App\Models\Interview;
use App\Models\Application;
use App\Models\Language;
use App\Models\Interest;
use Carbon\Carbon;

class IgniteController extends Controller {
	public function getIndex() {
		$mentors = Mentor::orderBy("orderNum")->get();

		return view('pages.home', compact('mentors'));
	}

	public function getMentor($id) {
		$mentor = Mentor::find($id);

		return view('pages.mentor', compact('mentor'));
	}

	public function getCalendar() {
		return view('pages.calendar');
	}

	public function getLogin() {
		return view('pages.login');
	}

	public function postLogin(Request $request) {
		$password = $request->input('password');

		if($password == env('SITE_PASS')) {
			session(['loggedIn' => 'true']);
		}

		return $this->getIndex();
	}

	public function getLogout() {
		session(['loggedIn' => 'false']);

		return $this->getIndex();
	}

	public function getInterviews(LoggedInRequest $request) {
		$interviews = Interview::all();

		return view('pages.interviews',compact('interviews'));
	}

	public function getNewInterview(LoggedInRequest $request) {
		return view('pages.newInterview');
	}

	public function postNewInterview(LoggedInRequest $request) {
		$date = $request->input('date');
		$hour = $request->input('hour');
		$minute = $request->input('minute');
		$ampm = $request->input('ampm');

		$interviewDate = Carbon::createFromFormat('m/d/Y \a\t g:i A', $date.' at '.$hour.":".$minute." ".$ampm);

		$interview = new Interview;
		$interview->interviewDate = $interviewDate;
		$interview->save();

		return view('pages.interviews');
	}

	public function getApplications(LoggedInRequest $request) {
		$applications = Application::all();

		return view('pages.applications',compact('applications'));
	}

	public function getApplication(LoggedInRequest $request, $id) {
		$interviews = Interview::all();
		$mentors = Mentor::orderBy('name')->get();
		$languages = Language::all();
		$interests = Interest::all();

		$application = Application::findOrFail($id);

		return view('pages.application',compact('interviews','mentors','languages','interests','application'));
	}

	public function postApplication(LoggedInRequest $request, $id) {
		if($id=="new") {
			$application = new Application;
			$application->name = $request->input('fullName');
		} else {
			$application = Application::findOrFail($id);
		}


	}

	public function getApp($id, $hash) {
		$interviews = Interview::all();
		$mentors = Mentor::orderBy('name')->get();
		$languages = Language::all();
		$interests = Interest::all();

		$application = Application::findOrFail($id);

		if($hash != md5($application->name)) {
			return getIndex();
		}

		return view('pages.application',compact('interviews','mentors','languages','interests','application'));
	}

	public function postApp(Request $request,$id,$hash) {
		dd($request->input('languages'));

		if($id=="new") {
			$application = new Application;
			$application->name = $request->input('fullName');
		} else {
			$application = Application::findOrFail($id);
			if($hash != md5($application->name)) {
				return getIndex();
			}
		}

		$application->email = $request->input('email');
		$application->facebook = $request->input('facebook');
		$application->interview_id = $request->input('interview');
		$application->about = $request->input('about');
		$application->why = $request->input('why');
		$application->experience = $request->input('experience');
		$application->os = $request->input('os');
		$application->save();
	}

	public function getNewApp() {
		$interviews = Interview::all();
		$mentors = Mentor::orderBy('name')->get();
		$languages = Language::all();
		$interests = Interest::all();

		$application = new Application;
		$application->id = "new";
		$application->name = "new";

		return view('pages.application',compact('interviews','mentors','languages','interests','application'));
	}
}
