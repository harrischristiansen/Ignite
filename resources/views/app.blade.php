<!DOCTYPE HTML> {{-- Add Calendar --}}
<html>
	<head>
		<title>Ignite</title>
		<meta charset="utf-8" />
		<meta name="description" content="Ignite connects talented upperclassmen at Purdue University with motivated freshmen, who we know will shape the future." />
		<meta name="keywords" content="Ignite, Purdue, Computer, Science, Ignite The Flame, Purdue Hackers, Hackers, Boilermake, Mentorship, Mentor, Mentee" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->


		<link rel="stylesheet" href="assets/css/ignite.css" />
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt ">
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

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2 class="banner_flame">{!! file_get_contents(public_path()."/images/logo/svg/flame.svg") !!}</h2>
					<h2 class="banner_ignite">{!! file_get_contents(public_path()."/images/logo/svg/ignite.svg") !!}</h2>
					<p>Our mission is to ignite a generation of talented and ambitious students at Purdue.<br>Join us Fall 2015.</p>
					<form action="//ignitethefla.us11.list-manage.com/subscribe/post?u=f8b01111e14b6f78ea6929027&amp;id=257e60dfc7" method="post" name="mc-embedded-subscribe-form" class="row uniform banner_actions" target="_blank" novalidate>
						<div class="8u 12u(small)"><input type="email" name="EMAIL" id="email" value="" placeholder="Email" /></div>
						<div class="4u 12u(small)"><input type="submit" value="Join Mailing List"></div>
					</form>
				</div>
					<a href="#" class="nextPage">
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
						<div class="3u 4u(medium) 12u$(small)">
							<article class="box post">
								<img src="images/mentors/harris.jpg" alt="Harris Christiansen" class="image fit" />
								{{-- <div class="mentorImage">
									<img src="images/mentors/harris.jpg" alt="Harris Christiansen" class="image fit" />
									<div class="mentorInfo">
										<h4 class="redText">Director Of Ignite</h4>
										<hr>
										Purdue Hackers Organizer<br>
										Apple Intern (Summer 2015)
									</div>
								</div> --}}
								<h3 class="redText">Harris Christiansen</h3>
								<p>Director Of Ignite</p>
								<ul class="icons mentorIcons">
									<li><a href="https://www.facebook.com/harrischristiansen" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.github.com/harrischristiansen" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
									<li><a href="https://www.harrischristiansen.com" class="icon fa-desktop" target="_blank"><span class="label">Website</span></a></li>
									<li><a href="mailto:harris@ignitethefla.me" class="icon fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								{{--<ul class="actions">
									<li><a href="#" class="button">Learn More</a></li>
								</ul>--}}
							</article>
						</div>
						<div class="3u 4u(medium) 12u$(small)">
							<article class="box post">
								<img src="images/mentors/kelly.jpg" alt="Kelly Kennedy" class="image fit" />
								{{--<div class="mentorImage">
									<div class="mentorInfo">
										<h4 class="redText">Director Of Recruitment</h4>
										<hr>
										Purdue Hackers Organizer<br>
										CAT Intern (Summer 2015)
									</div>
								</div>--}}
								<h3 class="redText">Kelly Kennedy</h3>
								<p>Director Of Recruitment</p>
								<ul class="icons mentorIcons">
									<li><a href="https://www.facebook.com/kelly.kennedy.50159" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.github.com/harrischristiansen" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
									<li><a href="https://www.harrischristiansen.com" class="icon fa-desktop" target="_blank"><span class="label">Website</span></a></li>
									<li><a href="mailto:harris@ignitethefla.me" class="icon fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</article>
						</div>
						<div class="3u 4u$(medium) 12u$(small)">
							<article class="box post">
								<img src="images/mentors/marcela.jpg" alt="Marcela Foster" class="image fit" />
								{{-- <div class="mentorImage">
									<div class="mentorInfo">
										<h4 class="redText">Director Of Events</h4>
										<hr>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.
									</div>
								</div> --}}
								<h3 class="redText">Marcela Foster</h3>
								<p>Director Of Events</p>
								<ul class="icons mentorIcons">
									<li><a href="https://www.facebook.com/MarcelaFosterIsMostLikelyBetterThanYou" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="http://www.harrischristiansen.com" class="icon fa-desktop" target="_blank"><span class="label">Website</span></a></li>
									<li><a href="mailto:mkausas@purdue.edu" class="icon fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</article>
						</div>
						<div class="3u$ 4u(medium) 12u$(small)">
							<article class="box post">
								<img src="images/mentors/marty.jpg" alt="Marty Kausas" class="image fit" />
								{{-- <div class="mentorImage">
									<div class="mentorInfo">
										<h4 class="redText">Mentor</h4>
										<hr>
										President of Purdue Hackers<br>
										Sponsorship Team of Boilermake (Fall 2015)<br>
										Qualcomm Intern (Summer 2015)
									</div>
								</div> --}}
								<h3 class="redText">Marty Kausas</h3>
								<p>Mentor</p>
								<ul class="icons mentorIcons">
									<li><a href="https://www.facebook.com/mkausas" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.github.com/mkausas" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
									<li><a href="mailto:mkausas@purdue.edu" class="icon fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</article>
						</div>
						<div class="3u 4u(medium) 12u$(small)">
							<article class="box post">
								<img src="images/mentors/alderfer.jpg" alt="Ben Alderfer" class="image fit" />
								{{-- <div class="mentorImage">
									<div class="mentorInfo">
										<h4 class="redText">Mentor</h4>
										<hr>
										Builds cool shit and breaks things
									</div>
								</div> --}}
								<h3 class="redText">Ben Alderfer</h3>
								<p>Builds cool shit and breaks things</p>
								<ul class="icons mentorIcons">
									<li><a href="https://www.facebook.com/benalderfer" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.github.com/balderer" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
									<li><a href="http://benalderfer.com" class="icon fa-desktop" target="_blank"><span class="label">Website</span></a></li>
									<li><a href="mailto:ben.alderfer@gmail.com" class="icon fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</article>
						</div>
						<div class="3u 4u$(medium) 12u$(small)">
							<article class="box post">
								<img src="images/mentors/brown.jpg" alt="Spencer Brown" class="image fit" />
								{{-- <div class="mentorImage">
									<div class="mentorInfo">
										<h4 class="redText">Mentor</h4>
										<hr>
										Director of BoilerMake (Fall 2014)<br>
										Sponsorship Lead for Boilermake (Fall 2015)
									</div>
								</div> --}}
								<h3 class="redText">Spencer Brown</h3>
								<p>Competitive Pokemon Player</p>
								<ul class="icons mentorIcons">
									<li><a href="https://www.facebook.com/nworbrecneps" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.github.com/spencer-brown" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
									<li><a href="http://www.spencer.sx" class="icon fa-desktop" target="_blank"><span class="label">Website</span></a></li>
									<li><a href="mailto:me@spencer.sx" class="icon fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</article>
						</div>
						<div class="3u 4u(medium) 12u$(small)">
							<article class="box post">
								<img src="images/mentors/caitlin.jpg" alt="Caitlin Kennedy" class="image fit" />
								{{-- <div class="mentorImage">
									<div class="mentorInfo">
										<h4 class="redText">Mentor</h4>
										<hr>
										Something at Anvil<br>
										USB Board Member<br>
										Internactive Intelligence Intern (Summer 2015)
									</div>
								</div> --}}
								<h3 class="redText">Caitlin Kennedy</h3>
								<p>Mentor</p>
								<ul class="icons mentorIcons">
									<li><a href="https://www.facebook.com/caitlin.kennedy.712" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.github.com/harrischristiansen" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
									<li><a href="https://www.harrischristiansen.com" class="icon fa-desktop" target="_blank"><span class="label">Website</span></a></li>
									<li><a href="mailto:harris@ignitethefla.me" class="icon fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</article>
						</div>
						<div class="3u$ 4u(medium) 12u$(small)">
							<article class="box post">
								<img src="images/mentors/hammons.jpg" alt="Jack Hammons" class="image fit" />
								{{-- <div class="mentorImage">
									<div class="mentorInfo">
										<h4 class="redText">Mentor</h4>
										<hr>
										Co-Founder of Purdue Hackers<br>
										Exec Board of BoilerMake
									</div>
								</div> --}}
								<h3 class="redText">Jack Hammons</h3>
								<p>Mentor</p>
								<ul class="icons mentorIcons">
									<li><a href="https://www.facebook.com/jackchammons" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.github.com/jackchammons" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
									<li><a href="mailto:jackchammons@gmail.com" class="icon fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</article>
						</div>
						<div class="3u 4u$(medium) 12u$(small)">
							<article class="box post">
								<img src="images/mentors/kirby.jpg" alt="Kirby Kholmorgen" class="image fit" />
								{{-- <div class="mentorImage">
									<div class="mentorInfo">
										<h4 class="redText">Mentor</h4>
										<hr>
										President of USB<br>
										Founder of BoilerMake
									</div>
								</div> --}}
								<h3 class="redText">Kirby Kholmorgen</h3>
								<p>Very seen Star Wars&trade;</p>
								<ul class="icons mentorIcons">
									<li><a href="https://www.facebook.com/profile.php?id=1569585824" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.github.com/kirbyk" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
									<li><a href="http://kirbyk.me" class="icon fa-desktop" target="_blank"><span class="label">Website</span></a></li>
									<li><a href="mailto:kirby@purdue.edu" class="icon fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</article>
						</div>
						<div class="3u 4u(medium) 12u$(small)">
							<article class="box post">
								<img src="images/mentors/mason.jpg" alt="Mason Everett" class="image fit" />
								{{-- <div class="mentorImage">
									<div class="mentorInfo">
										<h4 class="redText">Mentor</h4>
										<hr>
										Purdue Hackers Organizer<br>
										Exec Board of BoilerMake
									</div>
								</div> --}}
								<h3 class="redText">Mason Everett</h3>
								<p>Mentor</p>
								<ul class="icons mentorIcons">
									<li><a href="https://www.facebook.com/mas.everett" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.github.com/everetm" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
									<li><a href="http://mdawg.me" class="icon fa-desktop" target="_blank"><span class="label">Website</span></a></li>
									<li><a href="mailto:me@purdue.edu" class="icon fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</article>
						</div>
						<div class="3u 4u(medium) 12u$(small)">
							<article class="box post">
								<img src="images/mentors/chukwudi.jpg" alt="Chukwudi Uche" class="image fit" />
								{{-- <div class="mentorImage">
									<div class="mentorInfo">
										<h4 class="redText">Mentor</h4>
										<hr>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.
									</div>
								</div> --}}
								<h3 class="redText">Chukwudi Uche</h3>
								<p>Mentor</p>
								<ul class="icons mentorIcons">
									<li><a href="https://www.facebook.com/profile.php?id=100008320128963" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.github.com/KarmicDemon" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
									<li><a href="mailto:cuche@purdue.edu" class="icon fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</article>
						</div>
						<div class="3u$ 4u$(medium) 12u$(small)">
							<article class="box post">
								<img src="images/mentors/ed.jpg" alt="Ed Flanagan" class="image fit" />
								{{-- <div class="mentorImage">
									<div class="mentorInfo">
										<h4 class="redText">Mentor</h4>
										<hr>
										Microsoft Intern (Summer 2015)
									</div>
								</div> --}}
								<h3 class="redText">Ed Flanagan</h3>
								<p>Mentor</p>
								<ul class="icons mentorIcons">
									<li><a href="https://www.facebook.com/ed.flanagan0" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.github.com/ed-flanagan" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
									<li><a href="http://edflanagan.me" class="icon fa-desktop" target="_blank"><span class="label">Website</span></a></li>
									<li><a href="mailto:ed@purdue.edu" class="icon fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</article>
						</div>
						<div class="3u 4u(medium) 12u$(small)">
							<article class="box post">
								<img src="images/mentors/medhi.jpg" alt="Krishnabh Medhi" class="image fit" />
								{{-- <div class="mentorImage">
									<div class="mentorInfo">
										<h4 class="redText">Mentor</h4>
										<hr>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.
									</div>
								</div> --}}
								<h3 class="redText">Krishnabh Medhi</h3>
								<p>Mentor</p>
								<ul class="icons mentorIcons">
									<li><a href="https://www.facebook.com/kingshu" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.github.com/kingshu" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
									<li><a href="http://kingshu.co.nr" class="icon fa-desktop" target="_blank"><span class="label">Website</span></a></li>
									<li><a href="mailto:kmedhi@purdue.edu" class="icon fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</article>
						</div>
						<div class="3u 4u(medium) 12u$(small)">
							<article class="box post">
								<img src="images/mentors/adam.jpg" alt="Adam Loeb" class="image fit" />
								{{-- <div class="mentorImage">
									<div class="mentorInfo">
										<h4 class="redText">Mentor</h4>
										<hr>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.
									</div>
								</div> --}}
								<h3 class="redText">Adam Loeb</h3>
								<p>Mentor</p>
								<ul class="icons mentorIcons">
									<li><a href="https://www.facebook.com/adam.loeb.9" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.github.com/aloeb" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
									<li><a href="mailto:loeb.adam@purdue.edu" class="icon fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</article>
						</div>
						<div class="3u 4u$(medium) 12u$(small)">
							<article class="box post">
								<img src="images/mentors/nicky.jpg" alt="Nicky Semenza" class="image fit" />
								{{-- <div class="mentorImage">
									<div class="mentorInfo">
										<h4 class="redText">Mentor</h4>
										<hr>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.
									</div>
								</div> --}}
								<h3 class="redText">Nicky Semenza</h3>
								<p>Mentor</p>
								<ul class="icons mentorIcons">
									<li><a href="https://www.facebook.com/nickysemenza" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.github.com/nickysemenza" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
									<li><a href="http://nickysemenza.com" class="icon fa-desktop" target="_blank"><span class="label">Website</span></a></li>
									<li><a href="mailto:nicky@nickysemenza.com" class="icon fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</article>
						</div>
						<div class="3u$ 4u(medium) 12u$(small)">
							<article class="box post">
								<img src="images/mentors/opell.jpg" alt="Scott Opell" class="image fit" />
								{{-- <div class="mentorImage">
									<div class="mentorInfo">
										<h4 class="redText">Mentor</h4>
										<hr>
										Exec Board of BoilerMake<br>
										Treasurer of USB
									</div>
								</div> --}}
								<h3 class="redText">Scott Opell</h3>
								<p>Mentor</p>
								<ul class="icons mentorIcons">
									<li><a href="https://www.facebook.com/scott.opell" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.github.com/scottopell" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
									<li><a href="http://scottopell.com" class="icon fa-desktop" target="_blank"><span class="label">Website</span></a></li>
									<li><a href="mailto:me@scottopell.com" class="icon fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</article>
						</div>
						<div class="3u 4u(medium) 12u$(small)">
							<article class="box post">
								<img src="images/mentors/roy.jpg" alt="Roy Fu" class="image fit" />
								{{-- <div class="mentorImage">
									<div class="mentorInfo">
										<h4 class="redText">Mentor</h4>
										<hr>
										Purdue Hackers Organizer<br>
										Exec Board of BoilerMake<br>
										PicnicHealth Intern (Summer 2015)
									</div>
								</div> --}}
								<h3 class="redText">Roy Fu</h3>
								<p>Mentor</p>
								<ul class="icons mentorIcons">
									<li><a href="https://www.facebook.com/roystbeef" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.github.com/Roystbeef" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
									<li><a href="https://www.royfu.me" class="icon fa-desktop" target="_blank"><span class="label">Website</span></a></li>
									<li><a href="mailto:royfu@purdue.edu" class="icon fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</article>
						</div>
						<div class="3u 4u$(medium) 12u$(small)">
							<article class="box post">
								<img src="images/mentors/shane.jpg" alt="Shane Dewael" class="image fit" />
								{{-- <div class="mentorImage">
									<div class="mentorInfo">
										<h4 class="redText">Mentor</h4>
										<hr>
										Director of The Anvil<br>
										Exec Board of BoilerMake<br>
										USB Board Member
									</div>
								</div> --}}
								<h3 class="redText">Shane Dewael</h3>
								<p>Mentor</p>
								<ul class="icons mentorIcons">
									<li><a href="https://www.facebook.com/shane.dewael" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.github.com/shanedewael" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
									<li><a href="http://shanedewael.com" class="icon fa-desktop" target="_blank"><span class="label">Website</span></a></li>
									<li><a href="mailto:dewaels@purdue.edu" class="icon fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</article>
						</div>
						<div class="3u 4u(medium) 12u$(small)">
							<article class="box post">
								<img src="images/mentors/usmann.jpg" alt="Usmann Khan" class="image fit" />
								{{-- <div class="mentorImage">
									<div class="mentorInfo">
										<h4 class="redText">Mentor</h4>
										<hr>
										Purdue Hackers Organizer<br>
										Exec Board of BoilerMake
									</div>
								</div> --}}
								<h3 class="redText">Usmann Khan</h3>
								<p>Mentor</p>
								<ul class="icons mentorIcons">
									<li><a href="https://www.facebook.com/MyGlassesAreFamous" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.github.com/usmannk" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
									<li><a href="https://usmann.me" class="icon fa-desktop" target="_blank"><span class="label">Website</span></a></li>
									<li><a href="mailto:usmannkhan@purdue.edu" class="icon fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</article>
						</div>
						<div class="3u$ 4u(medium) 12u$(small)">
							<article class="box post">
								<img src="images/mentors/zach.jpg" alt="Zach Price" class="image fit" />
								{{-- <div class="mentorImage">
									<div class="mentorInfo">
										<h4 class="redText">Mentor</h4>
										<hr>
										Exec Board of BoilerMake
									</div>
								</div> --}}
								<h3 class="redText">Zach Price</h3>
								<p>Mentor</p>
								<ul class="icons mentorIcons">
									<li><a href="https://www.facebook.com/zach.price118" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.github.com/zachprice" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
									<li><a href="mailto:zachprice@purdue.edu" class="icon fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</article>
						</div>
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
			<script src="assets/js/jquery.min.js"></script>
			{{--<script src="assets/js/jquery.dropotron.min.js"></script> --}}
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			{{--<script src="assets/js/jquery.slidertron.min.js"></script>--}}
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>