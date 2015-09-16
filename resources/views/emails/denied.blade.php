@extends('emails.emailTemp')

@section('emailHead')
	Ignite Application Decision
@stop

@section('content')

	<p>Hi {{ $application->name }},</p>

	<p>We received an overwhelming interest in Ignite this semester, and were impressed by every single applicant. Each and every one of you demonstrated an impressive desire to be a part of the program, work on projects, and improve our community.</p>

	<p>Unfortunately, we were unable to offer you a spot in the Ignite Class of Fall 2015. It was a hard decision, and unforunately we were limited by the number of mentors we have in our program.</p>

	<p>However, don't be disappointed. There are still many opportunies to attend events and interact with our community. We hope to see you at: </p>
	<ul>
		<li><a href="https://www.facebook.com/groups/purduehackers/events/">Purdue Hackers Events</a></li>
		<li><a href="http://boilercamp.org">BoilerCamp</a></li>
		<li><a href="https://boilermake.org">BoilerMake</a></li>
		<li><a href="https://mlh.io/seasons/f2015/events">Hackathons</a></li>
	</ul>

	<hr>

	<p>We are excited to announce that Ignite will be hosting a few workshops/events open to the public throughout the semester. We hope you will come out to these events, and support your community and peers. Also, be sure to apply to the next season of Ignite when applications open again.</p>

	<p>Best,<br>
	The Ignite Team</p>

@stop