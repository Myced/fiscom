
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
					<h4>Service Detail</h4>
					<div class="db-2-main-com db-2-main-com-table db-com-p">
						<h5>Claim & Refund</h5>
						<p>search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
						<h5>Where can I get some?</h5>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything </p>
						<h5>Why do we use it?</h5>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed</p>
						<h5>Where does it come from?</h5>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
						<div class="db-mak-pay-bot">
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p> <a href="{{ route('payment') }}" class="waves-effect waves-light btn-large">Make Paymeny Now</a> </div>
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