@extends("app")

@section("content")

<section id="main" class="mentorPage wrapper style1">
	<header class="major">
		@if(Route::currentRouteAction()=="App\Http\Controllers\IgniteController@getNewApp")
			<h2 class="redText">Apply</h2>
		@else
			<img src="{{ asset('images/mentors/harris.jpg') }}" alt="FirstName LastName" class="mentorImg" />
			<h2 class="redText">{{ $application->name }}</h2>
		@endif
	</header>
	<div class="container">
		<section id="content">
			@if(session('loggedIn') == "true")
				<form method="post" action="{{ action('IgniteController@postApplication', $application->id) }}">
			@else
				<form method="post" action="{{ action('IgniteController@postApp', [$application->id, md5($application->name)]) }}">
			@endif
				{!! csrf_field() !!}
				<div class="row uniform">
					@if(Route::currentRouteAction()=="App\Http\Controllers\IgniteController@getNewApp")
						<div class="12u">
							<input type="text" name="fullName" id="fullName" placeholder="Full Name">
						</div>
					@endif
					<div class="6u 12u(small)">
						<input type="text" name="email" id="email" placeholder="Email" value="{{ $application->email }}">
					</div>
					<div class="6u$ 12u(small)">
						<input type="text" name="facebook" id="facebook" placeholder="Facebook" value="{{ $application->facebook }}">
					</div>
					@if(session('loggedIn') == "true")
						<div class="12u">
							Public URL: {{ action('IgniteController@getApp', $application->id, md5($application->name)) }}
						</div>
						<div class="4u 12u(small)">
							<select name="interview">
								@foreach($interviews as $interview)
									<option value="{{ $interview->id }}" {{ $application->interview->id == $interview->id ? "selected":"" }}>{{ $interview->interviewDate->format('D, M j, g:i a') }} ({{ count($interview->applications) }})</option>
								@endforeach
							</select>
						</div>
						<div class="2u 12u(small)">
							<a href="#"><button class="button small">Send Time</button></a>
						</div>
						<div class="6u$ 12u(small)">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
					@else
						<div class="12u">
							<select name="interview">
								@foreach($interviews as $interview)
									<option value="{{ $interview->id }}" {{ $application->interview->id == $interview->id ? "selected":"" }}>{{ $interview->interviewDate->format('D, M j, g:i a') }} ({{ count($interview->applications) }})</option>
								@endforeach
							</select>
						</div>
					@endif
					<div class="12u">
						<h4 class="redText">Tell us a bit about yourself</h4>
						<textarea name="about" id="about" placeholder="About" rows="3">{{ nl2br($application->about) }}</textarea>
 					</div>
					<div class="12u">
						<h4 class="redText">Why do you want to be part of Ignite?</h4>
						<textarea name="why" id="why" placeholder="Why" rows="3">{{ nl2br($application->why) }}</textarea>
 					</div>
					<div class="12u">
						<h4 class="redText">Previous Experience</h4>
						<textarea name="experience" id="experience" placeholder="Experience" rows="3">{{ nl2br($application->experience) }}</textarea>
 					</div>
					<div class="12u">
						<h4 class="redText">Primary OS</h4>
						<select name="os">
							<option value="Mac" {{ $application->os=="Mac"?"selected":"" }}>Mac</option>
							<option value="Windows">Windows</option>
							<option value="Linux">Linux</option>
						</select>
 					</div>
					<div class="12u">
						<h4 class="redText">Programming Languages</h4>
						<div class="row">
						@foreach($languages as $language)
							<div class="2u{{$language->id%6==0?'$':''}} 3u{{$language->id%4==0?'$':''}}(medium) 6u(small)">
								<input type="checkbox" name="languages[]" value="{{ $language->id }}" id="languages_{{ $language->id }}">
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
								<input type="checkbox" name="interests[]" value="{{ $interest->id }}" id="interests_{{ $interest->id }}">
								<label for="interests_{{ $interest->id }}">{{ $interest->name }}</label>
							</div>
						@endforeach
						</div>
 					</div>
 					@if(session('loggedIn') == "true")
						<div class="12u">
							<h4 class="redText">Mentor</h4>
							<select name="mentor">
								@foreach($mentors as $mentor)
									<option value="">None</option>
									<option value="{{ $mentor->id }}">{{ $mentor->name }}</option>
								@endforeach
							</select>
	 					</div>
						<div class="12u">
							<h4 class="redText">Notes</h4>
							<textarea name="notes" id="notes" placeholder="Notes" rows="3"></textarea>
	 					</div>
	 				@endif
 					<div class="12u">
						<ul class="actions">
							<li><input type="submit" value="Save Application"></li>
						</ul>
					</div>
 				</div>
			</form>
		</section>
	</div>
</section>

@stop