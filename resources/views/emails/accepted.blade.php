@extends('emails.emailTemp')

@section('emailHead')
	Welcome to the Ignite Class of Fall 2015!
@stop

@section('content')

	<p>Congratulations {{ $application->name }},</p>

	<p>You have been accepted into the Ignite Class of Fall 2015. Here's the details!</p>

	<p>Our mentors are so excited to meet you. <b>Tonight</b> (Thursday, September 17th) we will be having the Ignite Kickoff + Mentor Selections at The Anvil, starting at 6pm. You should have received a Facebook event invitation, please let us know if you did not. <b>Do not miss this event.</b> Also, please keep in mind this event is only for accepted participants, and is not open to the public.</p>

	<p>Following the Kickoff, we would like to invite you to Ignite The Fuse, for a fun night to meet your fellow participants. Again, you should have received a Facebok event invitation for this event.</p>
	
	<p>In the following week, we will get you all set up on our internal communication system, and send out more information on how to get started with your mentor.</p>

	<p>Please let us know if you have any questions.</p>

	<p>We hope you are as excited as we are,<br>
	The Ignite Team</p>

@stop