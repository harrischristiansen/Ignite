<!DOCTYPE HTML> {{-- Add Calendar --}}
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
	<head>
		<title>Ignite{{ isset($pageTitle)?" - $pageTitle":"" }}</title>
		<meta charset="utf-8" />
		<meta name="description" content="Ignite connects talented upperclassmen at Purdue University with motivated freshmen, who we know will shape the future." />
		<meta name="keywords" content="Ignite, Purdue, Computer, Science, Ignite The Flame, ignitetheflame, Purdue Hackers, Hackers, Boilermake, Mentorship, Mentor, Mentee" />
		<meta property="og:image" content="{{ asset('images/logo/logo_square.png') }}" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="{{ asset('assets/js/ie/html5shiv.js') }}"></script><![endif]-->
		<link rel="stylesheet" href="{{ asset('assets/css/main.css?ver=1') }}" />
		<!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('assets/css/ie8.css') }}" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="{{ asset('assets/css/ie9.css') }}" /><![endif]-->


		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> {{-- jQuery UI CSS --}}
		<link rel="stylesheet" href="{{ asset('assets/plugins/bvalidator/bvalidator.css') }}" /> {{-- BValidator CSS --}}
		<link rel="stylesheet" href="{{ asset('assets/css/ignite.css?ver=1') }}" />
		
		<!-- Google Analytics -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			
			ga('create', 'UA-15660382-9', 'auto');
			ga('send', 'pageview');
		</script>
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
						<li class="hoverPointer"><a href="#why" onclick='scrollTo("#why");'>Why</a></li>
						<li class="hoverPointer"><a href="#mentors" onclick='scrollTo("#mentors");'>Mentors</a></li>
						<li class="hoverPointer"><a href="#cta" onclick='scrollTo("#cta");'>Contact</a></li>
						<li class="hoverPointer"><a href="{{ action('IgniteController@getCalendar') }}">Calendar</a></li>
						@if(session('loggedIn') == "true")
							<li class="hoverPointer"><a href="{{ action('IgniteController@getInterviews') }}">Interviews</a></li>
							<li class="hoverPointer"><a href="{{ action('IgniteController@getApplications') }}">Applications</a></li>
							<li class="hoverPointer"><a href="{{ action('IgniteController@getLogout') }}">Logout</a></li>
						@endif
					</ul>
				</nav>
			</header>
		@else
			<header id="header">
				<h1 class="logo_menuBar hoverPointer"><a href="{{ action('IgniteController@getIndex') }}#banner">
					{!! file_get_contents(public_path()."/images/logo/svg/ignite.svg") !!}</a>
				</h1>

				<nav id="nav">
					<ul>
						<li class="hoverPointer"><a href="{{ action('IgniteController@getIndex') }}#why">Why</a></li>
						<li class="hoverPointer"><a href="{{ action('IgniteController@getIndex') }}#mentors">Mentors</a></li>
						<li class="hoverPointer"><a href="{{ action('IgniteController@getIndex') }}#cta">Contact</a></li>
						<li class="hoverPointer"><a href="{{ action('IgniteController@getCalendar') }}">Calendar</a></li>
						@if(session('loggedIn') == "true")
							<li class="hoverPointer"><a href="{{ action('IgniteController@getInterviews') }}">Interviews</a></li>
							<li class="hoverPointer"><a href="{{ action('IgniteController@getApplications') }}">Applications</a></li>
							<li class="hoverPointer"><a href="{{ action('IgniteController@getLogout') }}">Logout</a></li>
						@endif
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
			<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> {{-- jQuery UI --}}
			<script src="{{ asset('assets/plugins/bvalidator/jquery.bvalidator.js') }}"></script> {{-- BValidator --}}
			{{--<script src="{{ asset('assets/js/jquery.dropotron.min.js') }}"></script>--}}
			<script src="{{ asset('assets/js/jquery.scrollgress.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
			{{--<script src="{{ asset('assets/js/jquery.slidertron.min.js') }}"></script>--}}
			<script src="{{ asset('assets/js/skel.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<!--[if lte IE 8]><script src="{{ asset('assets/js/ie/respond.min.js') }}"></script><![endif]-->
			<script src="{{ asset('assets/js/main.js') }}"></script>

	</body>
</html>