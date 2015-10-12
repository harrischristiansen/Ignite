@extends("app")

@section("content")

<section id="main" class="mentorPage wrapper style1">
	<header class="major">
		@if(Route::currentRouteAction()=="App\Http\Controllers\IgniteController@getNewApp")
			<h2 class="redText">Apply</h2>
		@else
			{{-- <img src="{{ asset('images/mentors/harris.jpg') }}" alt="FirstName LastName" class="mentorImg" /> --}}
			<h2 class="redText">{{ $application->name }}</h2>
			@if(session('loggedIn') == "true")
				<h3>Public URL: {{ action('IgniteController@getApp', [$application->id, md5($application->name)]) }}</h3>
			@endif
		@endif
	</header>
	<div class="container">
		<section id="content">
			@if(session('loggedIn') == "true")
				<form method="post" action="{{ action('IgniteController@postApplication', $application->id) }}" class="validate">
			@else
				<form method="post" action="{{ action('IgniteController@postApp', [$application->id, md5($application->name)]) }}" class="validate">
			@endif
				{!! csrf_field() !!}
				<div class="row uniform">
					@if(Route::currentRouteAction()=="App\Http\Controllers\IgniteController@getNewApp")
						<div class="12u">
							<input type="text" name="fullName" id="fullName" placeholder="Full Name" data-bvalidator="required">
						</div>
					@endif
					<div class="6u 12u(small)">
						<h4 class="redText">Email</h4>
						<input type="text" name="email" id="email" placeholder="Email" value="{{ $application->email }}" data-bvalidator="required,email">
					</div>
					<div class="6u$ 12u(small)">
						<h4 class="redText">Facebook URL</h4>
						<input type="text" name="facebook" id="facebook" placeholder="Facebook" value="{{ $application->facebook }}">
					</div>
					@if(session('loggedIn') == "true")
						<div class="6u 12u(small)">
							<select name="interview">
								<option value=""> - None - </option>
								@foreach($interviews as $interview)
									<option value="{{ $interview->id }}" {{ isset($application->interview->id)&&$application->interview->id==$interview->id ? "selected":"" }}>{{ $interview->interviewDate->format('D, M j, g:i a') }} ({{ count($interview->applications) }})</option>
								@endforeach
							</select>
						</div>
						<div class="6u$ 12u(small)">{!! nl2br($application->availability) !!}</div>
					@else
						<div class="12u">
							<h4 class="redText">Interview Date/Time</h4>
							<select name="interview">
								<option value="">TBD</option>
								@foreach($interviews as $interview)
									<option value="{{ $interview->id }}" {{ isset($application->interview->id)&&$application->interview->id==$interview->id ? "selected":"" }}>{{ $interview->interviewDate->format('D, M j, g:i a') }} ({{ count($interview->applications) }})</option>
								@endforeach
							</select>
						</div>
					@endif
					<div class="12u">
						<h4 class="redText">Tell us a bit about yourself</h4>
						<textarea name="about" id="about" placeholder="About" rows="3">{{ $application->about }}</textarea>
 					</div>
					<div class="12u">
						<h4 class="redText">Why do you want to be part of Ignite?</h4>
						<textarea name="why" id="why" placeholder="Why" rows="3">{{ $application->why }}</textarea>
 					</div>
					<div class="12u">
						<h4 class="redText">What is your programming/etc experience? (We welcome novices and experts alike!)</h4>
						<textarea name="experience" id="experience" placeholder="Experience" rows="3">{{ $application->experience }}</textarea>
 					</div>
					<div class="12u">
						<h4 class="redText">Primary OS</h4>
						<select name="os">
							<option value="Mac" {{ $application->os=="Mac"?"selected":"" }}>Mac</option>
							<option value="Windows" {{ $application->os=="Windows"?"selected":"" }}>Windows</option>
							<option value="Linux" {{ $application->os=="Linux"?"selected":"" }}>Linux</option>
						</select>
 					</div>
					<div class="12u">
						<h4 class="redText">Programming Languages</h4>
						<div class="row">
							@foreach($languages as $language)
								<div class="2u{{$language->id%6==0?'$':''}} 3u{{$language->id%4==0?'$':''}}(medium) 6u(small)">
									<input type="checkbox" name="languages[]" value="{{ $language->id }}" id="languages_{{ $language->id }}" {{ $application->languages()->find($language->id)!=null ? "checked":"" }}>
									<label for="languages_{{ $language->id }}">{{ $language->name }}</label>
								</div>
							@endforeach
						</div>
 					</div>
					<div class="12u">
						<h4 class="redText">Interests</h4>
						<div class="row">
							@foreach($interests as $interest)
								<div class="2u{{$interest->id%6==0?'$':''}} 3u{{$interest->id%4==0?'$':''}}(medium) 6u(small)">
									<input type="checkbox" name="interests[]" value="{{ $interest->id }}" id="interests_{{ $interest->id }}" {{ $application->interests()->find($interest->id)!=null ? "checked":"" }}>
									<label for="interests_{{ $interest->id }}">{{ $interest->name }}</label>
								</div>
							@endforeach
						</div>
 					</div>
					<div class="12u">
						<h4 class="redText">Availability For Meetings Throughout Semester (1 meeting every 3 weeks)</h4>
						<div class="row">
							@foreach($meetings as $meeting)
								<div class="2u{{$meeting->id%6==0?'$':''}} 3u{{$meeting->id%4==0?'$':''}}(medium) 6u(small)">
									<input type="checkbox" name="meetings[]" value="{{ $meeting->id }}" id="meetings_{{ $meeting->id }}" {{ $application->meetings()->find($meeting->id)!=null ? "checked":"" }}>
									<label for="meetings_{{ $meeting->id }}">{{ $meeting->name }}</label>
								</div>
							@endforeach
						</div>
 					</div>
 					@if(session('loggedIn') == "true")
						<div class="2u 6u(small)">
							<h4 class="redText">Interviewed</h4>
							<input type="checkbox" name="interviewed" id="interviewed" value="interviewed" {{ $application->interviewed?"checked":"" }}>
							<label for="interviewed">Interviewed</label>
	 					</div>
						<div class="3u 6u$(small)">
							<h4 class="redText">Status</h4>
							<select name="status">
								<option value="" {{$application->status=="" ? "selected":""}}>None</option>
								<option value="Denied" {{$application->status=="Denied" ? "selected":""}}>Denied</option>
								<option value="Potential" {{$application->status=="Potential" ? "selected":""}}>Potential</option>
								<option value="Accepted" {{$application->status=="Accepted" ? "selected":""}}>Accepted</option>
							</select>
	 					</div>
						<div class="4u 6u(small)">
							<h4 class="redText">Mentor</h4>
							<select name="mentor">
								<option value="">None</option>
								@foreach($mentors as $mentor)
									<option value="{{ $mentor->id }}" {{ isset($application->mentor->id)&&$application->mentor->id==$mentor->id ? "selected":"" }}>{{ $mentor->name }}</option>
								@endforeach
							</select>
	 					</div>
						<div class="3u$ 6u$(small)">
							<h4 class="redText">Interview Rating</h4>
							<select name="rating">
								<option value=""> - Please Select - </option>
								<option value="1" {{ $application->interviewRating==floatval(1)?"selected":"" }}>1</option>
								<option value="2" {{ $application->interviewRating==floatval(2)?"selected":"" }}>2</option>
								<option value="3" {{ $application->interviewRating==floatval(3)?"selected":"" }}>3</option>
								<option value="4" {{ $application->interviewRating==floatval(4)?"selected":"" }}>4</option>
								<option value="4.5" {{ $application->interviewRating==floatval(4.5)?"selected":"" }}>4.5</option>
								<option value="5" {{ $application->interviewRating==floatval(5)?"selected":"" }}>5</option>
								<option value="5.5" {{ $application->interviewRating==floatval(5.5)?"selected":"" }}>5.5</option>
								<option value="6" {{ $application->interviewRating==floatval(6)?"selected":"" }}>6</option>
								<option value="6.5" {{ $application->interviewRating==floatval(6.5)?"selected":"" }}>6.5</option>
								<option value="7" {{ $application->interviewRating==floatval(7)?"selected":"" }}>7</option>
								<option value="7.5" {{ $application->interviewRating==floatval(7.5)?"selected":"" }}>7.5</option>
								<option value="8" {{ $application->interviewRating==floatval(8)?"selected":"" }}>8</option>
								<option value="8.5" {{ $application->interviewRating==floatval(8.5)?"selected":"" }}>8.5</option>
								<option value="9" {{ $application->interviewRating==floatval(9)?"selected":"" }}>9</option>
								<option value="9.5" {{ $application->interviewRating==floatval(9.5)?"selected":"" }}>9.5</option>
								<option value="10" {{ $application->interviewRating==floatval(10)?"selected":"" }}>10</option>
							</select>
						</div>
	 					<div class="3u 6u(small)">
							<h5 class="redText">Demonstrates Passion</h5>
							<p>{{ $application->passionate }}</p>
	 					</div>
						<div class="3u 6u$(small)">
							<h5 class="redText">Demonstrates Drive</h5>
							<p>{{ $application->driven }}</p>
	 					</div>
						<div class="3u 6u(small)">
							<h5 class="redText">Demonstrates Commitment</h5>
							<p>{{ $application->committed }}</p>
	 					</div>
						<div class="3u$ 6u$(small)">
							<h5 class="redText">App Rating</h5>
								<p>{{ $application->appRating }}</p>
	 					</div>
						<div class="12u">
							<h4 class="redText">Notes</h4>
							<textarea name="notes" id="notes" placeholder="Notes" rows="3">{{ $application->notes }}</textarea>
	 					</div>
	 				@endif
 					<div class="10u">
						<ul class="actions">
							<li><input type="submit" value="Save Application"></li>
						</ul>
					</div>
					@if(session('loggedIn') == "true")
						<div class="2u$ 12u(small)">
							@if($application->emailed == true)
								<a href="{{ action('IgniteController@getSendInterviewTime', $application->id) }}"><button type="button" class="button small">Send Time</button></a>
							@else
								<a href="{{ action('IgniteController@getSendInterviewTime', $application->id) }}"><button type="button" class="button special small ">Send Time</button></a>
							@endif
						</div>
					@endif
 				</div>
			</form>
		</section>
	</div>
</section>

@stop