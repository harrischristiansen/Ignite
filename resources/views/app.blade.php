<!DOCTYPE HTML> {{-- Add Calendar --}}
<html>
	<head>
		<title>Ignite</title>
		<meta charset="utf-8" />
		<meta name="description" content="Ignite connects talented upperclassmen at Purdue University with motivated freshmen, who we know will shape the future." />
		<meta name="keywords" content="Ignite, Purdue, Computer, Science, Ignite The Flame, ignitetheflame, Purdue Hackers, Hackers, Boilermake, Mentorship, Mentor, Mentee" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="{{ asset('assets/js/ie/html5shiv.js') }}"></script><![endif]-->
		<link rel="stylesheet" href="{{ asset('assets/css/main.css?ver=1') }}" />
		<!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('assets/css/ie8.css') }}" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="{{ asset('assets/css/ie9.css') }}" /><![endif]-->


		<link rel="stylesheet" href="{{ asset('assets/css/ignite.css?ver=1') }}" />
	</head>
	<body {!! Route::currentRouteAction()=="App\Http\Controllers\IgniteController@getIndex"?'class="landing"':'' !!}>

		<!-- Header -->
		@if(Route::currentRouteAction()=="App\Http\Controllers\IgniteController@getIndex")
			<header id="header" class="alt">
				<h1 class="logo_menuBar hoverPointer" onclick='scrollTo("#banner");'>
					{!! file_get_contents(public_path()."/images/logo/svg/ignite.svg") !!}
				</h1>

				<nav id="nav">
					<ul>
						<li onclick='scrollTo("#why");' class="hoverPointer">Why</li>
						<li onclick='scrollTo("#mentors");' class="hoverPointer">Mentors</li>
						<li onclick='scrollTo("#cta");' class="hoverPointer">Contact</li>
					</ul>
				</nav>
			</header>
		@else
			<header id="header">
				<h1 class="logo_menuBar hoverPointer" onclick='window.location.href="{{ action('IgniteController@getIndex') }}#banner";'>
					{!! file_get_contents(public_path()."/images/logo/svg/ignite.svg") !!}
				</h1>

				<nav id="nav">
					<ul>
						<li onclick='window.location.href="{{ action('IgniteController@getIndex') }}#why";' class="hoverPointer">Why</li>
						<li onclick='window.location.href="{{ action('IgniteController@getIndex') }}#mentors";' class="hoverPointer">Mentors</li>
						<li onclick='window.location.href="{{ action('IgniteController@getIndex') }}#cta";' class="hoverPointer">Contact</li>
					</ul>
				</nav>
			</header>
		@endif

		@yield('content')

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="https://twitter.com/ignitepurdue" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="https://www.facebook.com/ignitepurdue" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="mailto:contact@ignitethefla.me" class="icon fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<span class="copyright">
					&copy; <a href="http://www.purduehackers.com" target="_blank">Purdue Hackers</a>. All rights reserved.
				</span>
			</footer>

		<!-- Scripts -->
			<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
			{{--<script src="{{ asset('assets/js/jquery.dropotron.min.js') }}"></script> --}}
			<script src="{{ asset('assets/js/jquery.scrollgress.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
			{{--<script src="{{ asset('assets/js/jquery.slidertron.min.js') }}"></script>--}}
			<script src="{{ asset('assets/js/skel.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<!--[if lte IE 8]><script src="{{ asset('assets/js/ie/respond.min.js') }}"></script><![endif]-->
			<script src="{{ asset('assets/js/main.js') }}"></script>

	</body>
</html>