@extends('emails.emailTemp')

@section('emailHead')
	Ignite Class of Fall 2015 - Your Mentor Is: {{ $mentor->name }}
@stop

@section('content')

	<p>Congratulations again {{ $application->name }} on being accepted into the Ignite Class of Fall 2015!</p>

	<p>Your mentor is: {{ $mentor->name }}</p>
	
	<p>On Monday we will be sending out further communication on how everything will be working.</p>

	<p>Please let us know if you have any questions.</p>

	<p>We hope you are as excited as we are,<br>
	The Ignite Team</p>

@stop