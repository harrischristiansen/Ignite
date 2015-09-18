<!DOCTYPE HTML>
<html><head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<title>Ignite Class of Fall 2015</title>
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
	</style>
</head><body>
	@foreach($mentors as $mentor)
		<?php $chosen = $mentor->applicants()->lists('name')->toArray(); ?>
		<h1>Ignite Class of Fall 2015 - {{ $mentor->name }}</h1>
		{{ count($chosen)>0 ? "You vouched for: ".implode(", ", $chosen):"" }}
		<hr>
		<table>
			<thead><tr>
				<th>Ranking</th>
				<th>Name</th>
				<th>Description</th>
			</tr></thead>
			<tbody>
				@foreach($applications as $application)
					<tr>
						<td>__</td>
						<td {!! in_array($application->name,$chosen) ? 'class="boldtext"':"" !!}>{{ $application->name }}</td>
						<td>
							{{ $application->about }}<br>
							<b>OS:</b> {{ $application->os }}; <b>Languages:</b> {{ implode(", ", $application->languages()->lists('name')->toArray()) }}; <b>Interests:</b> {{ implode(", ", $application->interests()->lists('name')->toArray()) }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="pagebreak"></div>
	@endforeach
</body></html>