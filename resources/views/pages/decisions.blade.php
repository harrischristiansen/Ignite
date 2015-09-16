@extends("app")

@section("content")

<section id="main" class="mentorPage wrapper style1">
	<header class="major">
		{{-- <img src="{{ asset('images/mentors/harris.jpg') }}" alt="FirstName LastName" class="mentorImg" /> --}}
		<h2 class="redText">Review: {{ $application->name }}</h2>
	</header>
	<div class="container">
		<section id="content">
			<form method="post" action="{{ action('IgniteController@postDecisions', $application->id) }}" class="validate">
				{!! csrf_field() !!}
				<div class="row uniform">
					<div class="6u$ 12u(small)">
						<h4 class="redText">Facebook URL</h4>
						{{ $application->facebook }}
					</div>
					<div class="12u">
						<h4 class="redText">Tell us a bit about yourself</h4>
						<p>{{ $application->about }}</p>
 					</div>
					<div class="12u">
						<h4 class="redText">Why do you want to be part of Ignite?</h4>
						<p>{{ $application->why }}</p>
 					</div>
					<div class="12u">
						<h4 class="redText">What is your programming/etc experience? (We welcome novices and experts alike!)</h4>
						<p>{{ $application->experience }}</p>
 					</div>
					<div class="12u">
						<h4 class="redText">Primary OS</h4>
						{{ $application->os }}
 					</div>
					<div class="12u">
						<h4 class="redText">Programming Languages</h4>
						<p>{{ implode(", ", $application->languages()->lists('name')->toArray()) }}</p>
 					</div>
					<div class="12u">
						<h4 class="redText">Interests</h4>
						<p>{{ implode(", ", $application->interests()->lists('name')->toArray()) }}</p>
 					</div>
					<div class="12u">
						<h4 class="redText">Availability For Meetings Throughout Semester (1 meeting every 3 weeks)</h4>
						<p>{{ implode(", ", $application->meetings()->lists('name')->toArray()) }}</p>
 					</div>
 					<div class="4u 6u(small)">
						<h5 class="redText">Demonstrates Passion</h5>
						<p>{{ $application->passionate }}</p>
 					</div>
					<div class="4u 6u$(small)">
						<h5 class="redText">Demonstrates Drive</h5>
						<p>{{ $application->driven }}</p>
 					</div>
					<div class="4u$ 6u(small)">
						<h5 class="redText">Demonstrates Commitment</h5>
						<p>{{ $application->committed }}</p>
 					</div>
					<div class="6u 6u$(small)">
						<h5 class="redText">App Rating</h5>
							<p>{{ $application->appRating }}</p>
 					</div>
					<div class="6u$ 6u$(small)">
						<h5 class="redText">Interview Rating</h5>
						{{ $application->interviewRating }}
					</div>
					<div class="6u 6u$(small)">
						<h4 class="redText">Status</h4>
						<select name="status">
							<option value="" {{$application->status=="" ? "selected":""}}>None</option>
							<option value="Denied" {{$application->status=="Denied" ? "selected":""}}>Denied</option>
							<option value="Potential" {{$application->status=="Potential" ? "selected":""}}>Potential</option>
							<option value="Accepted" {{$application->status=="Accepted" ? "selected":""}}>Accepted</option>
						</select>
 					</div>
					<div class="6u$ 6u(small)">
						<h4 class="redText">Mentor</h4>
						<select name="mentor">
							<option value="">None</option>
							@foreach($mentors as $mentor)
								<option value="{{ $mentor->id }}" {{ isset($application->mentor->id)&&$application->mentor->id==$mentor->id ? "selected":"" }}>{{ $mentor->name }}</option>
							@endforeach
						</select>
 					</div>
					<div class="12u">
						<h4 class="redText">Notes</h4>
						<p>{{ $application->notes }}</p>
 					</div>
 					<div class="10u">
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