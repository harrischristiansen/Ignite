@extends("app")

@section("content")

<section id="main" class="mentorPage wrapper style1">
	<header class="major">
		<h2 class="redText">Applications</h2>
	</header>
	<div class="container">
		<section id="content">
			Applicants: {{ count($applications) }}, Reviewed: {{ $numReviewed }}, Interviewed: {{ $numInterviewed }}, <a href="{{ action('IgniteController@getAccepted') }}">Accepted: {{ $numAccepted }}</a>
			<span style="float: right;">
				<a href="{{ action('IgniteController@getApplicationsRanked') }}">View Rankings</a> |
				<a href="{{ action('IgniteController@getDecisions',0) }}">Start Decisions</a>
			</span>
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