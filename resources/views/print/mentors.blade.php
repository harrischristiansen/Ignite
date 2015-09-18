<!DOCTYPE HTML>
<html><head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<title>Ignite Fall 2015 Mentors</title>
	<style>
		html {
			font-family: 'Arial';
			font-size: 12px;
		}
		h1 {
			font-size: 18px;
			margin: 0px;
			padding: 0px;
		}
		td {
			padding: 3px 0px;
			border-bottom: 2px solid #000000;
		}
		.pagebreak {
			page-break-before: always;
		}
		.boldtext {
			font-weight: bold;
			color: red;
		}
		.mentorImg {
			height: 50px;
		}
	</style>
</head><body>
	@foreach($applications as $application)
		<h1>Ignite Fall 2015 Mentors - {{ $application->name }}</h1>
		<hr>
		<table>
			<thead><tr>
				<th>Ranking</th>
				<th>Picture</th>
				<th>Name</th>
				<th>Description</th>
			</tr></thead>
			<tbody>
				@foreach($mentors as $mentor)
					<tr>
						<td>__</td>
						<td><img src="{{ asset($mentor->image) }}" alt="{{ $mentor->name }}" class="mentorImg" /></td>
						<td>{{ $mentor->name }}</td>
						<td>
							<b>Tagline:</b> {{ $mentor->tagline }}<br>
							<b>Description:</b> {{ $mentor->description }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="pagebreak"></div>
	@endforeach
</body></html>