@extends("app")

@section("content")

<section id="main" class="mentorPage wrapper style1">
	<header class="major">
		<h2 class="redText">Add Interview Time</h2>
	</header>
	<div class="container">
		<section id="content">
			<form method="post" action="/new-interview">
				{!! csrf_field() !!}
				<div class="row uniform">
					<div class="3u 12u(small)">
						<input type="text" name="date" id="interviewDate" placeholder="Interview Date" class="datepicker">
					</div>
					<div class="3u 12u(small)">
						<div class="select-wrapper">
							<select name="hour" id="hour">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
						</div>
					</div>
					<div class="3u 12u(small)">
						<div class="select-wrapper">
							<select name="minute" id="minute">
								<option value="00">00</option>
								<option value="30">30</option>
							</select>
						</div>
					</div>
					<div class="3u$ 12u(small)">
						<div class="select-wrapper">
							<select name="ampm" id="ampm">
								<option value="AM">AM</option>
								<option value="PM">PM</option>
							</select>
						</div>
					</div>
					<div class="12u">
						<input type="text" name="location" id="location" placeholder="Location">
					</div>
					<div class="12u">
						<ul class="actions">
							<li><input type="submit" value="Create"></li>
						</ul>
					</div>
				</div>

				<br>
			</form>
		</section>
	</div>
</section>

@stop