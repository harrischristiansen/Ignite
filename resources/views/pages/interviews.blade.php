@extends("app")

@section("content")

<section id="main" class="mentorPage wrapper style1">
	<header class="major">
		<h2 class="redText">Interviews</h2>
	</header>
	<div class="container">
		<section id="content">
			<div class="table-wrapper">
				<table>
					<thead><tr>
						<th>Date</th>
						<th>Time</th>
						<th># Participants</th>
					</tr></thead>
					<tbody>
						@foreach($interviews as $interview)
							<tr>
								<td>{{ $interview->interviewDate->format("D, M j, Y") }}</td>
								<td>{{ $interview->interviewDate->format("g:i A") }}</td>
								<td>{{ count($interview->applications) }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<a href="/new-interview"><button class="button">New Interview</button></a>
		</section>
	</div>
</section>

@stop