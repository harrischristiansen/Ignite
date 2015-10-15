@extends("app")

@section("content")

<section id="main" class="mentorPage wrapper style1">
	<header class="major">
		<h2 class="redText">Feedback</h2>
	</header>
	<div class="container">
		<section id="content">
			<form method="post" action="{{ action('IgniteController@postFeedback',[$id,$hash]) }}" class="validate">
				{!! csrf_field() !!}
				<div class="row uniform">
					<div class="12u">
						<h4 class="redText">What is your feedback regarding your mentor/mentee? What suggestions do you have for him/her?</h4>
						<textarea name="mentor" id="mentor" placeholder="Feedback On Your Mentor" rows="3"></textarea>
 					</div>
					<div class="12u">
						<h4 class="redText">What is your feedback regarding Ignite? What have you liked/disliked?</h4>
						<textarea name="program" id="program" placeholder="Feedback On Ignite" rows="3"></textarea>
 					</div>
					<div class="12u">
						<h4 class="redText">As we continue with Ignite this semester, what events would you like to see?</h4>
						<textarea name="currentSemester" id="currentSemester" placeholder="Ideas For Remainder Of Semester" rows="3"></textarea>
 					</div>
					<div class="12u">
						<h4 class="redText">What would you suggest Ignite do differently for the next class of Ignite (Spring or Fall 2016)?</h4>
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