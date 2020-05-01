@extends('layouts.front')

@section('content')
<section>
		<div class="rows inner_banner inner_banner_5">
			<div class="container">
				<h2><span>Our</span> Favourite Events</h2>
				<p>All event list and future events</p>
			</div>
		</div>
	</section>
	<!--====== EVENTS ==========-->
	<section>
		<div class="rows inn-page-bg com-colo">
			<div class="container inn-page-con-bg events events-1 tb-space" id="inner-page-title">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title col-md-12">
					<h2>Best <span> Events</span></h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p></p>
				</div>
				<div class="col-md-12">
					<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Event Name.." title="Type in a name">
					<table id="myTable">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Event Name</th>
                            <th class="e_h1">Date</th>
                            <th class="e_h1">Period</th>
                            <th class="e_h1">Place</th>
                            <th>Join Us</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="/assets/images/iplace-1.jpg" alt="" /><a href="hotels-list.html" class="events-title">Openning ceremonie at the airport</a> </td>
                            <td class="e_h1">2019/10/05</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Airport</td>
                            <td><a href="{{ route('event.detail') }}" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="/assets/images/iplace-1.jpg" alt="" /><a href="hotels-list.html" class="events-title">Football Match</a> </td>
                            <td class="e_h1">2019/10/05</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Ange Raphael</td>
                            <td><a href="{{ route('event.detail') }}" class="link-btn">Book Now</a> </td>
                        </tr>
                       <tr>
                            <td>1</td>
                            <td><img src="/assets/images/iplace-1.jpg" alt="" /><a href="hotels-list.html" class="events-title">Openning ceremonie of bonaberi shop</a> </td>
                            <td class="e_h1">2019/05/09</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Bonaberi</td>
                            <td><a href="{{ route('event.detail') }}" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="/assets/images/iplace-1.jpg" alt="" /><a href="hotels-list.html" class="events-title">Nexttel Big Show</a> </td>
                            <td class="e_h1">2019/05/09</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Bonaberi</td>
                            <td><a href="{{ route('event.detail') }}" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="/assets/images/iplace-1.jpg" alt="" /><a href="hotels-list.html" class="events-title">Handover ceremonie</a> </td>
                            <td class="e_h1">2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Akwa</td>
                            <td><a href="{{ route('event.detail') }}" class="link-btn">Book Now</a> </td>
                        </tr>
                    </tbody>
                </table>
				</div>
			</div>
		</div>
	<h2><center>Latest Events</center></h2>
	<section>
		<div class="rows inn-page-bg com-colo">
			<div class="container inn-page-con-bg tb-space pad-bot-redu-5" id="inner-page-title">
				<!-- TITLE & DESCRIPTION -->
				
				<!--===== POSTS ======-->
				<div class="rows">
                    <div class="posts">
                        <div class="col-md-6 col-sm-6 col-xs-12"> <img src="/assets/images/pom.jpg" alt="" /> </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h3>Openning ceremonie at the airport</h3>
                            <h5><span class="post_author">Valid still</span><span class="post_date">Date: 12th May,2016</span><span class="post_city">City: Douala</span></h5>
                            <p><a href="{{ route('event.detail') }}" class="link-btn">Read more</a> </div>
                    </div>
                    
                </div>
                <div class="rows">
					<div class="posts">
						<div class="col-md-6 col-sm-6 col-xs-12"> <img src="/assets/images/bonaberi.jpg" alt="" /> </div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<h3>Openning ceremonie Bonaberi Shop</h3>
							<h5><span class="post_author">Valid still</span><span class="post_date">Date: 12th May,2016</span><span class="post_city">City: Douala</span></h5>
							<p><a href="{{ route('event.detail') }}" class="link-btn">Read more</a> </div>
					</div>
					
				</div>
				<div class="rows">
					<div class="posts">
						<div class="col-md-6 col-sm-6 col-xs-12"> <img src="/assets/images/Caravane.jpg" alt="" /> </div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<h3>Our Caravanne</h3>
							<h5><span class="post_author">Valid still</span><span class="post_date">Date: 12th May,2016</span><span class="post_city">City: Douala</span></h5>
							<p>Japap vous permet: de maitriser votre consommation ; vous disposez de forfaits dédiés pour vos appels vers les réseaux nationaux & des forfaits dédiés vers vos appels vers l’international. Possibilité d’envoyer des smsvers tous les réseaux nationaux quelque soit votre forfait <a href="{{ route('event.detail') }}" class="link-btn">Read more</a> </div>
					</div>
					
				<!--===== POST END ======-->
			</div>
		</div>
	</section>
	<!--====== TIPS BEFORE TRAVEL ==========-->
	
	</section>


@endsection