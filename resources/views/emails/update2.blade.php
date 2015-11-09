@extends('emails.emailTemp')

@section('emailHead')
	Ignite - November 8th Update
@stop

@section('content')

	<p>Hey {{ $person->name }},</p>

	<p>We realize everyone has had a very busy past few weeks, and we hope you are all now ready to work hard on your projects and attend events.</p>
	
	<p><b>This Thursday, November 12th at 7pm</b> we will be having an ALL Ignite social at The Anvil. Hope to see you all there!</p>
	
	<p>Please provide your availability for smaller social events over the next two weeks at: <a href="http://doodle.com/poll/rsrn6d67xzam77en">http://doodle.com/poll/rsrn6d67xzam77en</a></p>
	
	<p><b>Between now and November 16th</b>, each of you should meet with your mentor/mentee for at least <b>one hour one-on-one</b>. It's time to start working hard on projects, lets see what you can create! Mentors, check-in with your mentee daily as to how their project is going. Let us know once you have met with your mentor/mentee so we can check you off.</p>

	<p><b>By Monday, November 16th</b>, every participant should complete their resume, email it to us (so we can provide our feedback as upperclassmen), and apply to <b>AT LEAST</b> one company. Let your mentor know if you need any help/advise, and email us at <a href="mailto:contact@ignitethefla.me">contact@ignitethefla.me</a> with your resume/company you applied to once you have done so.</p>
		
	<p>Lastly, please help us improve Ignite by providing us your feedback/ideas at: <a href="{{ action('IgniteController@getFeedback',[$person->id,md5($person->name)]) }}">{{ action('IgniteController@getFeedback',[$person->id,md5($person->name)]) }}</a></p>

	<p>Thanks,<br>
	The Ignite Team</p>

@stop