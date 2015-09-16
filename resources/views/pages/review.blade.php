@extends("app")

@section("content")

<section id="main" class="mentorPage wrapper style1">
	<header class="major">
		{{-- <img src="{{ asset('images/mentors/harris.jpg') }}" alt="FirstName LastName" class="mentorImg" /> --}}
		{{-- <h2 class="redText">Review: {{ $application->name }}</h2> --}}
		<h2 class="redText">Review</h2><br>
	</header>
	<div class="container">
		<section id="content">
			<form method="post" action="{{ action('IgniteController@postReviewApplications', $application->id) }}" class="validate">
				{!! csrf_field() !!}
				<div class="row uniform">
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
						<p>{{ $application->os }}</p>
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
						<hr>
						<h4 class="redText">Review</h4>
 					</div>
					<div class="3u 6u(small)">
						<h5 class="redText">Demonstrates Passion</h5>
						<select name="passionate" data-bvalidator="required">
							<option value=""> - Please Select - </option>
							<option value="true">Yes</option>
							<option value="false">No</option>
						</select>
 					</div>
					<div class="3u 6u$(small)">
						<h5 class="redText">Demonstrates Drive</h5>
						<select name="driven" data-bvalidator="required">
							<option value=""> - Please Select - </option>
							<option value="true">Yes</option>
							<option value="false">No</option>
						</select>
 					</div>
					<div class="3u 6u(small)">
						<h5 class="redText">Demonstrates Commitment</h5>
						<select name="committed" data-bvalidator="required">
							<option value=""> - Please Select - </option>
							<option value="true">Yes</option>
							<option value="false">No</option>
						</select>
 					</div>
					<div class="3u$ 6u$(small)">
						<h5 class="redText">Rating</h5>
						<select name="rating" data-bvalidator="required">
							<option value=""> - Please Select - </option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
						<p>Note: 1-4=No, 5-8=Maybe, 9-10=Yes</p>
 					</div>
 					<div class="10u">
						<ul class="actions">
							<li><input type="submit" value="Submit Review"></li>
						</ul>
					</div>
 				</div>
			</form>
		</section>
	</div>
</section>

@stop