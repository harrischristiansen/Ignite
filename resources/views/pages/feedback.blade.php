@extends("app")

@section("content")

<section id="main" class="mentorPage wrapper style1">
	<header class="major">
		<h2 class="redText">Feedback</h2>
	</header>
	<div class="container">
		<section id="content">
			<form method="post" action="{{ action('IgniteController@postFeedback') }}" class="validate">
				{!! csrf_field() !!}
				<div class="row uniform">
					<div class="12u">
						<h4 class="redText">Feedback On Your Mentor</h4>
						<textarea name="mentor" id="mentor" placeholder="Feedback On Your Mentor" rows="3"></textarea>
 					</div>
					<div class="12u">
						<h4 class="redText">Feedback On Ignite</h4>
						<textarea name="program" id="program" placeholder="Feedback On Ignite" rows="3"></textarea>
 					</div>
					<div class="12u">
						<h4 class="redText">Ideas For Remainder Of Semester</h4>
						<textarea name="currentSemester" id="currentSemester" placeholder="Ideas For Remainder Of Semester" rows="3"></textarea>
 					</div>
					<div class="12u">
						<h4 class="redText">Ideas For Next Semester</h4>
						<textarea name="nextSemester" id="nextSemester" placeholder="Ideas For Next Semester" rows="3"></textarea>
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