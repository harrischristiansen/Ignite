<html>
<head>
	<style>
		html {
			font-family: 'Arial';
			font-size: 14px;
		}
		a {
			color: #992C05;
			text-decoration: none;
		}
		a:hover {
			color: #BF3806;
		}
		h1 {
			color: #d93f07;
			font-size: 18px;
			margin: 0px;
			padding: 0px;
		}
		.redText {
			color: #d93f07;
		}
		hr {
			border: 1px solid #d93f07;
		}
	</style>
</head>

<body>
	<h1>@yield('emailHead')</h1>

	<!-- ================ Content ================= -->
	@yield('content')

	<hr>
	Ignite The Flame<br>
	<a href="http://www.ignitethefla.me">IgniteTheFla.me</a><br>
	<a href="mailto:contact@ignitethefla.me">contact&#64;IgniteTheFla.me</a>
</body>
</html>