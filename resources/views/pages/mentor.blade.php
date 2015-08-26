@extends("app")

@section("content")

<section id="main" class="mentorPage wrapper style1">
	<header class="major">
		<img src="{{ asset($mentor->image) }}" alt="{{ $mentor->name }}" class="mentorImg" />
		<h2 class="redText">{{ $mentor->name }}</h2>
		<h3>{{ $mentor->title }}</h3>
	</header>
	<div class="container">
		<!-- Content -->
		<section id="content">
			@if($mentor->description != "")
				<h3>About</h3>
				<p>{!! $mentor->description !!}</p>
			@endif
			@if($mentor->orgs != "")
				<h3>Organizations</h3>
				<ul>
					@foreach(explode(",",$mentor->orgs) as $org)
						<li>{{ trim($org) }}</li>
					@endforeach
				</ul>
			@endif
			<hr>
			<ul class="icons align-center">
				@if($mentor->facebook != "")
					<li><a href="{{ $mentor->facebook }}" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
				@endif
				@if($mentor->github != "")
					<li><a href="{{ $mentor->github }}" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
				@endif
				@if($mentor->website != "")
					<li><a href="{{ $mentor->website }}" class="icon fa-desktop" target="_blank"><span class="label">Website</span></a></li>
				@endif
				@if($mentor->email != "")
					<li><a href="mailto:{{ $mentor->email }}" class="icon fa-envelope"><span class="label">Email</span></a></li>
				@endif
			</ul>
		</section>

	</div>
</section>

@stop