@extends("app")

@section("content")

<section id="main" class="mentorPage wrapper style1">
	<header class="major">
		<h2 class="redText">Login</h2>
	</header>
	<div class="container">
		<section id="content">
			<form method="post" action="/login">
				{!! csrf_field() !!}
				<div class="row uniform">
					<div class="10u">
						<input type="password" name="password" id="password" placeholder="Password">
					</div>
					<div class="2u$">
						<ul class="actions">
							<li><input type="submit" value="Sign In"></li>
						</ul>
					</div>
				</div>

				<br>
			</form>
		</section>
	</div>
</section>

@stop