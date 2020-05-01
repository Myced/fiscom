@extends('layouts.front')

@section('content')	

<div class="db">
			<!--LEFT SECTION-->
			<div class="db-l">
				<div class="db-l-1">
					<ul>
						<li><img src="/assets/images/rich/pp.png" alt="" />
						</li>
						<li><span>80%</span> profile compl</li>
						<li><span>18</span> Notifications</li>
						<strong> {{ auth()->user()->first_name . ' ' . auth()->user()->last_name }} </strong>
					</ul>
				</div>
				<div class="db-l-2">
					<ul>
						<li>
							<a href="{{ route('forfait') }}"><img src="/assets/images/icon/dbl1.png" alt="" /> Forfait & Bonus</a>
						</li>
						<li>
							<a href="db-travel-booking.html"><img src="/assets/images/icon/dbl2.png" alt="" />Products Register</a>
						</li>
						<li>
							<a href="db-hotel-booking.html"><img src="/assets/images/icon/dbl3.png" alt="" />All Events</a>
						</li>
						<li>
							<a href="db-event-booking.html"><img src="/assets/images/icon/dbl4.png" alt="" /> Event Bookings</a>
						</li>
						<li>
							<a href="{{ route('myprofile') }}"><img src="/assets/images/icon/dbl6.png" alt="" /> My Profile</a>
						</li>
						<li>
							<a href="db-all-payment.html"><img src="/assets/images/icon/dbl9.png" alt="" />My Payments</a>
						</li>
						<li>
							<a href="db-refund.html"><img src="/assets/images/icon/dbl7.png" alt="" /> Claim & Refund</a>
						</li>
					</ul>
				</div>
			</div>
			<!--CENTER SECTION-->
			<div class="db-2">
				<div class="db-2-com db-2-main">
					<h4>My Profile</h4>
					<div class="db-2-main-com db-2-main-com-table">
						<table class="responsive-table">
							<tbody>
								<tr>
									<td>User Name</td>
									<td>:</td>
									<td><strong> {{ auth()->user()->first_name . ' ' . auth()->user()->last_name }} </strong></td>
								</tr>
								<tr>
									<td>Password</td>
									<td>:</td>
									<td>mypasswordtour</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td>{{ auth()->user()->email }}</td>
								</tr>
								<tr>
									<td>Phone</td>
									<td>:</td>
									<td>{{ auth()->user()->tel }}</td>
								</tr>
								<tr>
									<td>Date of birth</td>
									<td>:</td>
									<td>03 Jun 1990</td>
								</tr>
								<tr>
									<td>Address</td>
									<td>:</td>
									<td>8800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</td>
								</tr>
								<tr>
									<td>Status</td>
									<td>:</td>
									<td><span class="db-done">Active</span>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="db-mak-pay-bot">
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p> <a href="db-my-profile-edit.html" class="waves-effect waves-light btn-large">Edit my profile</a> </div>
					</div>
				</div>
			</div>
			<div class="db-3">
				<h4>Latest Post</h4>
				<ul>
					<li>
						<a href="#!"> <img src="/assets/images/icon/dbr1.jpg" alt="" />
							<h5>50% Discount Offer</h5>
							<p></p>
						</a>
					</li>
					<li>
						<a href="#!"> <img src="/assets/images/icon/dbr2.jpg" alt="" />
							<h5>Service package</h5>
							<p></p>
						</a>
					</li>
					<li>
						<a href="#!"> <img src="/assets/images/icon/dbr3.jpg" alt="" />
							<h5>Group Trip - Available</h5>
							<p>All the Lorem Ipsum generators on the</p>
						</a>
					</li>
					<li>
						<a href="#!"> <img src="/assets/images/icon/dbr4.jpg" alt="" />
							<h5>world best travel agency</h5>
							<p>All the Lorem Ipsum generators on the</p>
						</a>
					</li>
					<li>
						<a href="#!"> <img src="/assets/images/icon/dbr5.jpg" alt="" />
							<h5>special travel coupons</h5>
							<p>All the Lorem Ipsum generators on the</p>
						</a>
					</li>
					<li>
						<a href="#!"> <img src="/assets/images/icon/dbr6.jpg" alt="" />
							<h5>70% Offer 2018</h5>
							<p>All the Lorem Ipsum generators on the</p>
						</a>
					</li>
					<li>
						<a href="#!"> <img src="/assets/images/icon/dbr7.jpg" alt="" />
							<h5>Popular Cities</h5>
							<p>All the Lorem Ipsum generators on the</p>
						</a>
					</li>
					<li>
						<a href="#!"> <img src="/assets/images/icon/dbr8.jpg" alt="" />
							<h5>variations of passages</h5>
							<p>All the Lorem Ipsum generators on the</p>
						</a>
					</li>
				</ul>
			</div>
@endsection		