@extends('emails.emailTemp')

@section('emailHead')
	Ignite - Week 4 Update
@stop

@section('content')

	<p>Hey {{ $person->name }},</p>

	<p>It's time to kick off working on projects! If you have not yet told us what your going to be working on, send us a short email to <a href="mailto:contact@ignitethefla.me">contact@ignitethefla.me</a> telling us what you are planning on making!</p>
	
	<p><b>Between now and October 23rd</b>, each of you should meet with your mentor/mentee for at least <b>one hour one-on-one</b>. If you have not already, start working on your project, and let your mentor know when you need help. Mentors, check-in with your mentee daily as to how their project is going. Let us know once you have met with your mentor/mentee so we can check you off!</p>
		
	<p>I also encourage all of you to meetup often with your mentor/mentee and other fellow participants. Grab dinner, get a coffee, have your own hack nights, etc.</p>
	<p>Also, <b>by October 23rd</b>, we want to see every participant complete their resume, email it to us (so we can provide our feedback as upperclassmen), and apply to <b>AT LEAST</b> one company. Let your mentor know if you need any help/advise, and email us at <a href="mailto:contact@ignitethefla.me">contact@ignitethefla.me</a> with your resume/company you applied to once you have done so.
	
	<p>Over the next two weeks, we will be having 3-4 group social events doing various fun activities, such as bowling, arcade games, etc. Please <b>fill out this Doodle</b> with your availability: <a href="http://doodle.com/poll/7xgbbqd8vugg2iqx">http://doodle.com/poll/7xgbbqd8vugg2iqx</a></p>
	
	<p>Next week, another email will go out with two new additions to Ignite we will be introducing: Project Check-ins and Project Websites. These will require very little of your time, and should be very valuable to your project. We are excited to share more soon!</p>

	<p>Lastly, please help us improve Ignite by providing us your feedback/ideas at: <a href="{{ action('IgniteController@getFeedback',[$person->id,md5($person->name)]) }}">{{ action('IgniteController@getFeedback',[$person->id,md5($person->name)]) }}</a></p>

	<p>Thanks,<br>
	The Ignite Team</p>

@stop