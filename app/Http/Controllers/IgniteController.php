<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Http\Requests;
use App\Http\Requests\LoggedInRequest;
use App\Http\Controllers\Controller;
use App\Models\Mentor;
use App\Models\Interview;
use App\Models\Application;
use App\Models\Language;
use App\Models\Interest;
use App\Models\Meeting;
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

	public function getReviewApplications() {
		$application = Application::where('reviewed',false)->orderByRaw("RAND()")->firstOrFail();
		//$application = Application::findOrFail('192'); // Harris - Fake Application

		return view('pages.review',compact('application'));
	}
	public function postReviewApplications(Request $request, $id) {
		$application = Application::findOrFail($id);

		$application->passionate = $request->input('passionate')=="true"?true:false;
		$application->driven = $request->input('driven')=="true"?true:false;
		$application->committed = $request->input('committed')=="true"?true:false;
		$application->appRating = $request->input('rating');
		$application->reviewed = true;

		$application->save();

		return $this->getReviewApplications();
	}

	public function getInterviews(LoggedInRequest $request) {
		$interviews = Interview::orderBy('interviewDate')->get();

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
		$interview->location = $request->input('location');
		$interview->save();

		return $this->getInterviews($request);
	}

	public function getApplications(LoggedInRequest $request) {
		$applications = Application::orderBy('applicationEdited',"desc")->get();
		$numInterviewed = count(Application::where('interviewed',true)->get());
		$numAccepted = count(Application::where('status','Accepted')->get());
		$numReviewed = count(Application::where('reviewed',true)->get());

		return view('pages.applications',compact('applications','numInterviewed','numAccepted','numReviewed'));
	}

	public function getAccepted(LoggedInRequest $request) {
		$applications = Application::where('status',"accepted")->orderBy('name')->get();
		$numInterviewed = count(Application::where('interviewed',true)->get());
		$numAccepted = count(Application::where('status','Accepted')->get());
		$numReviewed = count(Application::where('reviewed',true)->get());

		return view('pages.applications',compact('applications','numInterviewed','numAccepted','numReviewed'));
	}

	public function getAcceptedPrint(LoggedInRequest $request) {
		$applications = Application::where('status',"accepted")->orderBy('name')->get();
		$mentors = Mentor::orderBy('name')->get();

		return view('print.accepted',compact('applications','mentors'));
	}

	public function getMentorsPrint(LoggedInRequest $request) {
		$applications = Application::where('status',"accepted")->orderBy('name')->get();
		$mentors = Mentor::orderBy('name')->get();

		return view('print.mentors',compact('applications','mentors'));
	}

	public function getApplicationsRanked(LoggedInRequest $request) {
		$applications = Application::orderByRaw('(appRating*0.2)+(interviewRating*0.8) DESC')->get();
		$numInterviewed = count(Application::where('interviewed',true)->get());
		$numAccepted = count(Application::where('status','Accepted')->get());
		$numReviewed = count(Application::where('reviewed',true)->get());

		return view('pages.applications',compact('applications','numInterviewed','numAccepted','numReviewed'));
	}

	public function getInterviewApplications(LoggedInRequest $request, $id) {
		$applications = Interview::findOrFail($id)->applications;
		$numInterviewed = count(Application::where('interviewed',true)->get());
		$numAccepted = count(Application::where('status','Accepted')->get());
		$numReviewed = count(Application::where('reviewed',true)->get());

		return view('pages.applications',compact('applications','numInterviewed','numAccepted','numReviewed'));
	}

	public function getSendAllEmails(LoggedInRequest $request) {
		$applications = Application::all();

		foreach($applications as $application) {
			if($application->emailed != true) {
				Mail::send('emails.interviewTime', compact('application'), function ($m) use ($application) {
					$m->to($application->email, $application->name)
						->from('contact@ignitethefla.me', 'Ignite')
						->subject('Ignite Interview: '.(isset($application->interview->id) ? $application->interview->interviewDate->format('D, M j, g:i a'):""));
				});

				$application->emailed = true;
				$application->save();
			}
		}

		return $this->getApplications($request);
	}

	public function getSendAllDecisions(LoggedInRequest $request) {
		$applications = Application::all();

		foreach($applications as $application) {
			if($application->statusEmailed != true) {
				if($application->status == "Accepted") {
					Mail::send('emails.accepted', compact('application'), function ($m) use ($application) {
						$m->to($application->email, $application->name)
							->from('contact@ignitethefla.me', 'Ignite')
							->subject('Welcome to the Ignite Class of Fall 2015');
					});
					$application->statusEmailed = true;
					//dd("Sent: ".$application->name);
				} else {
					Mail::send('emails.denied', compact('application'), function ($m) use ($application) {
						$m->to($application->email, $application->name)
							->from('contact@ignitethefla.me', 'Ignite')
							->subject('Ignite Application Decision');
					});
					$application->statusEmailed = true;
					//dd("Sent: ".$application->name);
				}
			}
			$application->save();
		}

		return $this->getApplications($request);
	}

	public function getSendAllPairings(LoggedInRequest $request) {
		$mentors = Mentor::all();

		foreach($mentors as $mentor) {
			$application = $mentor->applicants()->first();
			if($application != null) {
				Mail::send('emails.pairing', compact('application','mentor'), function ($m) use ($mentor,$application) {
					$m->to($application->email, $application->name)
						->cc($mentor->email, $mentor->name)
						->from('contact@ignitethefla.me', 'Ignite')
						->subject('Ignite Class of Fall 2015 - Your Mentor Is: '.$mentor->name);
				});
			}
		}

		return $this->getApplications($request);
	}

	public function getApplication(LoggedInRequest $request, $id) {
		$interviews = Interview::orderBy('interviewDate')->get();
		$mentors = Mentor::orderBy('name')->get();
		$languages = Language::all();
		$interests = Interest::all();
		$meetings = Meeting::all();

		$application = Application::findOrFail($id);
		$pageTitle = $application->name;

		return view('pages.application',compact('interviews','mentors','languages','interests','meetings','application','pageTitle'));
	}

	public function getSendEmail(LoggedInRequest $request, $id) {
		$application = Application::findOrFail($id);

		Mail::send('emails.interviewTime', compact('application'), function ($m) use ($application) {
			$m->to($application->email, $application->name)
				->from('contact@ignitethefla.me', 'Ignite')
				->subject('Ignite Interview: '.(isset($application->interview->id) ? $application->interview->interviewDate->format('D, M j, g:i a'):""));
		});

		$application->emailed = true;
		$application->save();

		return $this->getApplication($request, $id);
	}

	public function postApplication(LoggedInRequest $request, $id) {
		if($id=="new") {
			$application = new Application;
			$application->name = $request->input('fullName');
		} else {
			$application = Application::findOrFail($id);
		}
		
		$oldInterviewId = $application->interview_id;
		$application->interview_id = ($request->input('interview') == "") ? null:$request->input('interview');
		if($oldInterviewId != $application->interview_id) {
			$application->emailed = false;
		}

		// Application
		$application->email = $request->input('email');
		$application->facebook = $request->input('facebook');
		$application->about = $request->input('about');
		$application->why = $request->input('why');
		$application->experience = $request->input('experience');
		$application->os = $request->input('os');

		// Interview
		if($request->input('interviewed') == "interviewed") {
			$application->interviewed = true;
		} else {
			$application->interviewed = false;
		}
		$application->status = $request->input('status');
		$application->mentor_id = ($request->input('mentor') == "") ? null:$request->input('mentor');
		$application->interviewRating = $request->input('rating');
		$application->notes = $request->input('notes');
		$application->statusEmailed = false; // To Resend Status Email
		$application->save();

		// Application (Sync After Save)
		if($request->input('languages') != null) {
			$application->languages()->sync($request->input('languages'));
		}
		if($request->input('interests') != null) {
			$application->interests()->sync($request->input('interests'));
		}
		if($request->input('meetings') != null) {
			$application->meetings()->sync($request->input('meetings'));
		}

		return redirect()->action('IgniteController@getApplication', $application->id);
	}

	public function getDecisions(LoggedInRequest $request, $id) {
		$mentors = Mentor::orderBy('name')->get();
		$applications = Application::orderByRaw('(appRating*0.2)+(interviewRating*0.8) DESC')->get();

		$nextApp = false;
		$application = null;
		foreach($applications as $app) {
			if($id==0 || $nextApp==true) {
				$application = $app;
				break;
			}
			if($app->id == $id) {
				$nextApp=true;
			}
		}

		$pageTitle = $application->name;
		return view('pages.decisions',compact('mentors','application','pageTitle'));
	}

	public function postDecisions(LoggedInRequest $request, $id) {
		$previousApp = Application::findOrFail($id);
		$previousApp->status = $request->input('status');
		$previousApp->mentor_id = ($request->input('mentor') == "") ? null:$request->input('mentor');
		$previousApp->statusEmailed = false;
		$previousApp->save();

		$mentors = Mentor::orderBy('name')->get();
		$applications = Application::orderByRaw('(appRating*0.2)+(interviewRating*0.8) DESC')->get();

		$nextApp = false;
		$application = null;
		foreach($applications as $app) {
			if($id==0 || $nextApp==true) {
				$application = $app;
				break;
			}
			if($app->id == $id) {
				$nextApp=true;
			}
		}

		$pageTitle = $application->name;
		return view('pages.decisions',compact('mentors','application','pageTitle'));
	}

	public function getApp($id, $hash) {
		$interviews = Interview::orderBy('interviewDate')->get();
		$mentors = Mentor::orderBy('name')->get();
		$languages = Language::all();
		$interests = Interest::all();
		$meetings = Meeting::all();

		$application = Application::findOrFail($id);

		$itemCount = 0;
		foreach($interviews as $interview) {
			$numApps = count($interview->applications);
			if($numApps==0 || $numApps>6 || $interview->interviewDate < Carbon::now()) {
				if(!isset($application->interview->id) || $application->interview->id!=$interview->id) {
					unset($interviews[$itemCount]);
				}
			}
			$itemCount++;
		}

		if($hash != md5($application->name)) {
			return $this->getIndex();
		}

		return view('pages.application',compact('interviews','mentors','languages','interests','meetings','application'));
	}

	public function postApp(Request $request,$id,$hash) {
		if($id=="new") {
			$application = new Application;
			$application->name = $request->input('fullName');
		} else {
			$application = Application::findOrFail($id);
			if($hash != md5($application->name)) {
				return $this->getIndex();
			}
		}

		$oldInterviewId = $application->interview_id;
		$application->interview_id = ($request->input('interview') == "") ? null:$request->input('interview');
		if($oldInterviewId != $application->interview_id) {
			$application->emailed = false;
		}

		$application->email = $request->input('email');
		$application->facebook = $request->input('facebook'); // http://findmyfacebookpageid.com/get.php?url=http://facebook.com/harrischristiansen
		$application->about = $request->input('about');
		$application->why = $request->input('why');
		$application->experience = $request->input('experience');
		$application->os = $request->input('os');
		$application->applicationEdited = Carbon::now();
		$application->reviewed = false; // To Re-review new, edited Application
		$application->save();
		if($request->input('languages') != null) {
			$application->languages()->sync($request->input('languages'));
		}
		if($request->input('interests') != null) {
			$application->interests()->sync($request->input('interests'));
		}
		if($request->input('meetings') != null) {
			$application->meetings()->sync($request->input('meetings'));
		}

		return redirect()->action('IgniteController@getApp', [$application->id, md5($application->name)]);
	}

	public function getNewApp() {
		$interviews = Interview::all();
		$mentors = Mentor::orderBy('name')->get();
		$languages = Language::all();
		$interests = Interest::all();
		$meetings = Meeting::all();
		
		$itemCount = 0;
		foreach($interviews as $interview) {
			$numApps = count($interview->applications);
			if($numApps==0 || $numApps>5) {
				unset($interviews[$itemCount]);
			}
			$itemCount++;
		}

		$application = new Application;
		$application->id = "new";
		$application->name = "new";
		$application->facebook = "http://www.facebook.com/";

		return view('pages.application',compact('interviews','mentors','languages','interests','meetings','application'));
	}
}
