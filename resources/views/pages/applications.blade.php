@extends("app")

@section("content")

<section id="main" class="mentorPage wrapper style1">
	<header class="major">
		<h2 class="redText">Applications</h2>
	</header>
	<div class="container">
		<section id="content">
			<div class="table-wrapper">
				<table>
					<thead><tr>
						<th>Name</th>
						<th>Interview Time</th>
						<th>Status</th>
						<th>Mentor</th>
					</tr></thead>
					<tbody>
						@foreach($applications as $application)
							<tr onclick='window.location.href="{{ action('IgniteController@getApplication',$application->id) }}";' class="hoverPointer">
								<td>{{ $application->name }}</td>
								<td>{{ $application->interview->interviewDate->format('D, M j, g:i a') }}</td>
								<td>{{ $application->status }}</td>
								<td>{{ isset($application->mentor) ? $application->mentor->name : "" }}</td>
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