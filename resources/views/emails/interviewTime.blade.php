@extends('emails.emailTemp')

@section('emailHead')
	Ignite Interview Scheduled
@stop

@section('content')

	<p>Hi {{ $application->name }}!</p>

	<p>Thanks for applying to Ignite. We have successfully received your application.</p>

	<p>We are excited to meet you! You scheduled your interview for <b>{{ isset($application->interview->id) ? $application->interview->interviewDate->format('D, M j, g:i a'):"Not Scheduled - Please Click Link Below To Select A Time" }}</b> in <b>{{ isset($application->interview->id) ? $application->interview->location:"-" }}.</b></p>

	<p>Interviews will last approximately 45 minutes. They will take place with other applicants, and are informal - there is no need to dress up or anything fancy.</p>

	<p>If you want to make changes to your application, or you need to reschedule your interview, you may do so at: <a href="{{ action('IgniteController@postApp', [$application->id, md5($application->name)]) }}" target="_blank">{{ action('IgniteController@postApp', [$application->id, md5($application->name)]) }}</a></p>

	<p>If you have any questions about Ignite or your interview, do not hesitate to reach out.</p>

	<p>See you soon,<br>
	The Ignite Team</p>

@stop