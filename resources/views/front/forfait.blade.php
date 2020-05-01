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
					<h4>Forfait Booking</h4>
					<div class="db-2-main-com db-2-main-com-table">
						<table class="responsive-table">
							<thead>
								<tr>
									<th>No</th>
									<th>Package</th>
									<th>Duration</th>
									<th>Start Date</th>
									<th>Price</th>
									<th>Payment</th>
									<th>More</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Night Surf</td>
									<td>6days/5nights</td>
									<td>12 Aug 2019</td>
									<td>$784</td>
									<td><span class="db-done">Done</span>
									</td>
									<td><a href="db-travel-details.html" class="db-done">view more</a>
									</td>
								</tr>
								<tr>
									<td>1</td>
									<td>Sweet Night</td>
									<td>6days/5nights</td>
									<td>12 Aug 2019</td>
									<td>$784</td>
									<td><span class="db-done">Done</span>
									</td>
									<td><a href="db-travel-details.html" class="db-done">view more</a>
									</td>
								</tr>
								<tr>
									<td>1</td>
									<td>Night Surf</td>
									<td>6days/5nights</td>
									<td>12 Aug 2019</td>
									<td>$784</td>
									<td><span class="db-done">Done</span>
									</td>
									<td><a href="db-travel-details.html" class="db-done">view more</a>
									</td>
								</tr>
								<tr>
									<td>1</td>
									<td>Night Surf</td>
									<td>6days/5nights</td>
									<td>12 Aug 2019</td>
									<td>$784</td>
									<td><span class="db-done">Done</span>
									</td>
									<td><a href="db-travel-details.html" class="db-done">view more</a>
									</td>
								</tr>
								</tbody>
						</table>
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