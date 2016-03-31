@extends("app")

@section("content")

<!-- Banner -->
<section id="banner">
	<div class="inner">
		<h2 class="banner_flame">{!! file_get_contents(public_path()."/images/logo/svg/flame.svg") !!}</h2>
		<h2 class="banner_ignite">{!! file_get_contents(public_path()."/images/logo/svg/ignite.svg") !!}</h2>
		<p>Our mission is to ignite a generation of talented and ambitious students at Purdue.<br>Join us Fall 2016.</p>
		{{--
		<form action="{{ action('IgniteController@getNewApp') }}" method="get" name="applyButton" class="row uniform banner_actions" target="_blank" novalidate>
			<div class="12u"><input type="submit" value="Apply"></div>
		</form>
		--}}
		<form action="//ignitethefla.us11.list-manage.com/subscribe/post?u=f8b01111e14b6f78ea6929027&amp;id=257e60dfc7" method="post" name="mc-embedded-subscribe-form" class="row uniform banner_actions" target="_blank" novalidate>
			<div class="8u 12u(small)"><input type="email" name="EMAIL" id="email" value="" placeholder="Email" /></div>
			<div class="4u 12u(small)"><input type="submit" value="Join Mailing List"></div>
		</form>
	</div>
		<a href="#" class="nextPage" onclick='scrollTo("#why");'>
			<i class="fa fa-angle-down fa-3x"></i>
		</a>
</section>

<!-- About -->
<section id="why" class="wrapper style2">
	<div class="container">
		<header class="major">
			<h2>
				<i class="fa fa-bolt fa-3x bigIcon trippy"></i><br>
				Why Ignite?
			</h2>
			<p>
				We saw a gap. A gap between the students who build products, start companies, and get <span class="redText">kick-ass</span> internships and the students who don't even know where to begin. Our goal is to close that gap, giving more students an opportunity to do awesome things, and to <span class="redText">ignite</span> a movement.<br>
				<br>
				Ignite connects <span class="redText">talented</span> upperclassmen with <span class="redText">motivated</span> freshmen, who we know will shape the future.
			</p>
		</header>
	</div>
	<div class="container"><br><br><hr><br><br></div>
	<div class="container">
		<div class="row uniform">
			<div class="4u 6u(medium) 12u$(small)">
				<section class="feature fa-code">
					<h3>Code</h3>
					<p>Code is the differentiating factor between someone with an idea and someone with a product. We'll help you get started from the ground up.</p>
				</section>
			</div>
			<div class="4u 6u$(medium) 12u$(small)">
				<section class="feature fa-cogs">
					<h3>Build</h3>
					<p>The hardest part of building something is finding out where to begin. Not only will we help you get started but we'll push you to finish it.</p>
				</section>
			</div>
			<div class="4u$ 6u(medium) 12u$(small)">
				<section class="feature fa-graduation-cap">
					<h3>Learn</h3>
					<p>College is a great place to learn, both in and out of the classroom. Your mentor will be there to answer any questions you may have.</p>
				</section>
			</div>
			<div class="4u 6u$(medium) 12u$(small)">
				<section class="feature fa-users">
					<h3>Connect</h3>
					<p>Your network is one of your most valuable assets, let us expand it ten-fold.</p>
				</section>
			</div>
			<div class="4u 6u(medium) 12u$(small)">
				<section class="feature fa-clock-o">
					<h3>Attend</h3>
					<p>You and your mentor will meet weekly, and we'll have program events every three weeks for you to connect with other participants.</p>
				</section>
			</div>
			<div class="4u$ 6u$(medium) 12u$(small)">
				<section class="feature fa-trophy">
					<h3>Succeed</h3>
					<p>Ignite will jumpstart your life. Our goal is to open as many doors for you as possible, all you need to do is walk through them.</p>
				</section>
			</div>
		</div>
	</div>
	<br><br>
</section>

<!-- Mentors -->
<section id="mentors" class="wrapper style1">
	<div class="container">
		<header class="major">
			<h2>Meet Our Mentors</h2>
			<hr>
		</header>
		<div class="row">
			<?php $count = 0; ?>
			@foreach($mentors as $mentor)
				<?php $count++; ?>
				<div class="3u{{ $count%4==0?'$':'' }} 4u{{ $count%3==0?'$':'' }}(medium) 12u$(small)">
					<article class="box post">
						<a href="{{ action('IgniteController@getMentor', $mentor->id) }}">
							<img src="{{ asset($mentor->image) }}" alt="{{ $mentor->name }}" class="image fit" />
						</a>
						{{-- <div class="mentorImage">
							<img src="images/mentors/harris.jpg" alt="Harris Christiansen" class="image fit" />
							<div class="mentorInfo">
								<h4 class="redText">Director Of Ignite</h4>
								<hr>
								Purdue Hackers Organizer<br>
								Apple Intern (Summer 2015)
							</div>
						</div> --}}
						<h3 class="redText"><a href="{{ action('IgniteController@getMentor', $mentor->id) }}">{{ $mentor->name }}</a></h3>
						<p>{!! $mentor->tagline !!}</p>
						<ul class="icons mentorIcons">
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
						{{--<ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
						</ul>--}}
					</article>
				</div>
			@endforeach
		</div>
	</div>
</section>

<!-- Questions -->
<section id="cta" class="wrapper style3">
	<h2>Questions?</h2>
	<ul class="actions">
		<li><a href="mailto:contact@ignitethefla.me?subject=I've got a question about Ignite!&body=I've got a question about Ignite!1%0D%0A%0D%0A" class="button big">Email Us</a></li>
	</ul>
</section>

@stop
