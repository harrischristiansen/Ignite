@extends("app")

@section("content")

<section id="main" class="mentorPage wrapper style1">
	<header class="major">
		<h2 class="redText">Applications</h2>
	</header>
	<div class="container">
		<section id="content">
			Applicants: {{ count($applications) }}, Reviewed: {{ $numReviewed }}, Interviewed: {{ $numInterviewed }}, <a href="{{ action('IgniteController@getAccepted') }}">Accepted: {{ $numAccepted }}</a> <a href="{{ action('IgniteController@getPairs') }}">(Pairs)</a>
			<span style="float: right;">
				<a href="{{ action('IgniteController@getApplicationsRanked') }}">View Rankings</a> |
				<a href="{{ action('IgniteController@getDecisions',0) }}">Start Decisions</a>
			</span>
			<hr>
			<h4>Actions</h4>
			<a href="/send-all-interview-times">Send All Interview Times</a> |
			<a href="/send-decisions">Send Decisions</a> |
			<a href="/send-pairings">Send Pairings</a> |
			<a href="/accepted-print">Accepted Participant Info Print Sheet</a> |
			<a href="/mentors-print">Mentor Info Print Sheet</a>
			<hr>
			<div class="table-wrapper">
				<table>
					<thead><tr>
						<th>Name</th>
						<th>Emailed</th>
						<th>Interview Rating</th>
						<th>App Rating</th>
						<th>Status</th>
					</tr></thead>
					<tbody>
						@foreach($applications as $application)
							<tr onclick='window.location.href="{{ action('IgniteController@getApplication',$application->id) }}";' class="hoverPointer">
								<td>{{ $application->name }}</td>
								<td>{{ $application->emailed==true ? "":"No" }}</td>
								<td>{{ $application->interviewed==true ? $application->interviewRating:"No" }}</td>
								<td>{{ $application->appRating!=0.0 ? $application->appRating:"No" }}</td>
								<td>{{ isset($application->mentor->id) ? $application->mentor->name : $application->status }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<a href="/new-app"><button class="button">New Application</button></a>
		</section>
	</div>
</section>

@stop