@extends('layouts.front')

@section('content')	


			<section>
		<div class="db">
			<!--LEFT SECTION-->
			<div class="db-l">
				<div class="db-l-1">
					<ul>
						<li><img src="/assets/images/steph.jpg" alt="" />
						</li>
						<li><span>80%</span> profile compl</li>
						<li><span>18</span> Notifications</li>
					</ul>
				</div>
				<div class="db-l-2">
					<ul>
						<li>
							<a href="{{ route('forfait') }}"><img src="/assets/images/icon/dbl1.png" alt="" /> Forfait & Bonus</a>
						</li>
						<li>
							<a href="{{ route('shop') }}"><img src="/assets/images/icon/dbl2.png" alt="" />Products Register</a>
						</li>
						<li>
							<a href="{{ route('event') }}"><img src="/assets/images/icon/dbl3.png" alt="" />All Events</a>
						</li>
						<li>
							<a href="{{ route('booking') }}"><img src="/assets/images/icon/dbl4.png" alt="" /> Event Bookings</a>
						</li>
						<li>
							<a href="{{ route('myprofile') }}"><img src="/assets/images/icon/dbl6.png" alt="" /> My Profile</a>
						</li>
						<li>
							<a href="{{ route('payment') }}"><img src="/assets/images/icon/dbl9.png" alt="" />My Payments</a>
						</li>
						<li>
							<a href="{{ route('claim') }}"><img src="/assets/images/icon/dbl7.png" alt="" /> Claim & Refund</a>
						</li>
					</ul>
				</div>
			</div>
			<!--CENTER SECTION-->
			<div class="db-2">
				<div class="db-2-com db-2-main">
					<h4>Enter Payment Details <span class="db-pay-amount">Total: 5, 000fcfa</span></h4>
					<div class="db-2-main-com db2-form-pay db2-form-com">
						<div class="db-pay-card">
							<h5>Accepted Card Types</h5><img src="images/cards.png" alt="" /> </div>
						<form class="col s12">
							<div class="row">
								<div class="input-field col s12">
									<input type="number" class="validate">
									<label>Enter amount</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<select>
										<option value="" disabled selected>Select Card Type</option>
										<option value="1">Master Card</option>
										<option value="2">Visa</option>
										<option value="3">American Express</option>
										<option value="2">Laser</option>
										<option value="2">Discover</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="number" class="validate">
									<label>Card Number</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<input type="number" class="validate">
									<label>Expairy Date (DD/MM)</label>
								</div>
								<div class="input-field col s12 m6">
									<input type="number" class="validate">
									<label>CVV</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input id="pay-ca" type="text" class="validate">
									<label for="pay-ca">Full name on a Card</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="submit" value="SUBMIT" class="waves-effect waves-light full-btn"> </div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!--RIGHT SECTION-->
			<div class="db-3">
				<h4>Notifications</h4>
				<ul>
					<li>
						<a href="#!"> <img src="images/icon/dbr1.jpg" alt="" />
							<h5>50% Discount Offer</h5>
							<p>All the Lorem Ipsum generators on the</p>
						</a>
					</li>
					<li>
						<a href="#!"> <img src="images/icon/dbr2.jpg" alt="" />
							<h5>paris travel package</h5>
							<p>All the Lorem Ipsum generators on the</p>
						</a>
					</li>
					<li>
						<a href="#!"> <img src="images/icon/dbr3.jpg" alt="" />
							<h5>Group Trip - Available</h5>
							<p>All the Lorem Ipsum generators on the</p>
						</a>
					</li>
					<li>
						<a href="#!"> <img src="images/icon/dbr4.jpg" alt="" />
							<h5>world best travel agency</h5>
							<p>All the Lorem Ipsum generators on the</p>
						</a>
					</li>
					<li>
						<a href="#!"> <img src="images/icon/dbr5.jpg" alt="" />
							<h5>special travel coupons</h5>
							<p>All the Lorem Ipsum generators on the</p>
						</a>
					</li>
					<li>
						<a href="#!"> <img src="images/icon/dbr6.jpg" alt="" />
							<h5>70% Offer 2018</h5>
							<p>All the Lorem Ipsum generators on the</p>
						</a>
					</li>
					<li>
						<a href="#!"> <img src="images/icon/dbr7.jpg" alt="" />
							<h5>Popular Cities</h5>
							<p>All the Lorem Ipsum generators on the</p>
						</a>
					</li>
					<li>
						<a href="#!"> <img src="images/icon/dbr8.jpg" alt="" />
							<h5>variations of passages</h5>
							<p>All the Lorem Ipsum generators on the</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
			@endsection		