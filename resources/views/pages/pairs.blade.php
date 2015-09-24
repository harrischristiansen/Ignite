@extends("app")

@section("content")

<section id="main" class="mentorPage wrapper style1">
	<header class="major">
		<h2 class="redText">Pairs</h2>
	</header>
	<div class="container">
		<section id="content">
			<div class="table-wrapper">
				<table>
					<thead><tr>
						<th>Mentor</th>
						<th>Email</th>
						<th>Student</th>
						<th>Email</th>
					</tr></thead>
					<tbody>
						@foreach($applications as $application)
							<tr onclick='window.location.href="{{ action('IgniteController@getApplication',$application->id) }}";' class="hoverPointer">
								<td>{{ isset($application->mentor->id) ? $application->mentor->name : $application->status }}</td>
								<td>{{ isset($application->mentor->id) ? $application->mentor->email : $application->status }}</td>
								<td>{{ $application->name }}</td>
								<td>{{ $application->email }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</section>
	</div>
</section>

@stop