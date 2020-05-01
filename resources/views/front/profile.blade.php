@extends('layouts.front')

@section('content')
<section>
		<div class="db">
			<!--LEFT SECTION-->
			<div class="db-l">
				<div class="db-l-1">
					<ul>
						<li><img src="/assets/images/fiscom/metier8.png" alt="" />
						</li>
						<li><span>80%</span> profile compl</li>
						<li><span>18</span> Notifications</li>
					<li><strong> {{ auth()->user()->first_name . ' ' . auth()->user()->last_name }} </strong></li>
					</ul>
				</div>
				<div class="db-l-2">
					<ul>
						<li>
							<a href="{{ route('metier') }}"><img src="/assets/images/icon/dbl1.png" alt="" />Mon Métier </a>
						</li>
						<li>
							<a href="{{ route('publication') }}"><img src="/assets/images/icon/dbl2.png" alt="" />Mes Publication</a>
						</li>
						<li>
							<a href="{{ route('reseau') }}"><img src="/assets/images/icon/dbl3.png" alt="" />Mon Réseau</a>
						</li>
						<li>
							<a href="{{ route('myprofile') }}"><img src="/assets/images/icon/dbl6.png" alt="" />Mon Profile</a>
						</li>
						<li>
							<a href="{{ route('payment') }}"><img src="/assets/images/icon/dbl9.png" alt="" />Mes Payrments</a>
						</li>
						<li>
							<a href="{{ route('claim') }}"><img src="/assets/images/icon/dbl7.png" alt="" />Claim & Refund</a>
						</li>
					</ul>
				</div>
			</div>
			<!--CENTER SECTION-->
			<div class="db-2">
				<div class="db-2-com db-2-main">
					<h4>Nom Utilsateur <strong> ({{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}) </strong> </h4>
					<div class="db-2-main-com">
						<div class="db-2-main-1">
							<div class="db-2-main-2"> <img src="/assets/images/icon/db2.png" alt="" /><span>Métier Enregistré</span>
								<ul>
									<li><a href="db-travel-details.html">Bonus</a>
									</li>
									<li><a href="db-payment.html">Statut du Payement<span class="db-done">Fait</span></a>
									</li>
									<li><a href="db-travel-details.html">Remaining Days - 14</a>
									</li>
									<li><a href="db-travel-details.html">Ending Date - 16 may 2018</a>
									</li>
									<li><a href="db-refund.html">Cancel this booking</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="db-2-main-1">
							<div class="db-2-main-2"> <img src="/assets/images/icon/db3.png" alt="" /><span>Nos Formation</span>
								<ul>
									<li><a href="db-hotel-details.html">Bonus</a>
									</li>
									<li><a href="db-payment.html">Payment Status <span class="db-not-done">not-Done</span></a>
									</li>
									<li><a href="db-hotel-details.html">Remaining Days - 14</a>
									</li>
									<li><a href="db-hotel-details.html">Ending Date - 16 may 2020</a>
									</li>
									<li><a href="db-refund.html">Cancel this booking</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="db-2-main-1">
							<div class="db-2-main-2"> <img src="/assets/images/icon/db1.png" alt="" /><span>Bibliothèque</span>
								<ul>
									<li><a href="db-event-details.html">Bonus</a>
									</li>
									<li><a href="db-payment.html">Payment Status <span class="db-not-done">Not-Done</span></a>
									</li>
									<li><a href="db-event-details.html">Remaining Days - 14</a>
									</li>
									<li><a href="db-event-details.html">Ending Date - 16 may 2020</a>
									</li>
									<li><a href="db-refund.html">Cancel this booking</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--RIGHT SECTION-->
			<div class="db-3">
				<h4>Publication</h4>
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
							<p></p>
						</a>
					</li>
					<li>
						<a href="#!"> <img src="/assets/images/icon/dbr4.jpg" alt="" />
							<h5>world best travel agency</h5>
							<p></p>
						</a>
					</li>
					<li>
						<a href="#!"> <img src="/assets/images/icon/dbr5.jpg" alt="" />
							<h5>special travel coupons</h5>
							<p></p>
						</a>
					</li>
					<li>
						<a href="#!"> <img src="/assets/images/icon/dbr6.jpg" alt="" />
							<h5>70% Offer 2018</h5>
							<p></p>
						</a>
					</li>
					<li>
						<a href="#!"> <img src="/assets/images/icon/dbr7.jpg" alt="" />
							<h5>Popular Cities</h5>
							<p></p>
						</a>
					</li>
					<li>
						<a href="#!"> <img src="/assets/images/icon/dbr8.jpg" alt="" />
							<h5>variations of passages</h5>
							<p></p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
@endsection	