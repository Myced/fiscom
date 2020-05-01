@extends('layouts.front')

@section('content')	
	<!--DASHBOARD-->
	<section>
		<div class="tr-register">
			<div class="tr-regi-form v2-search-form">
				<h4>Méthode <span> Payement</span></h4>
				<p>Simple, Rapide et Sécurisé</p>
				<form class="contact__form" method="post" action="http://rn53themes.net/themes/demo/travelz/mail/tourbooking.php">
							<div class="alert alert-success contact__msg" style="display: none" role="alert">
								
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text"  class="validate" name="name" required>
									<label>Entrez votre nom</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="number"  class="validate" name="phone" required>
									<label>Entrez votre numéro</label>
								</div>
								<div class="input-field col s6">
									<input type="email"  class="validate" name="email" required>
									<label>Entrez votre email</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text" id="select-city-1" class="autocomplete validate" name="city">
									<label for="select-city-1">Adresse & Ville</label>
								</div>
								<div class="input-field col s12">
									<select name="package">
										<option value="" disabled selected>Méthode de Payement</option>
										<option value="Honeymoon Package">Après livraisons</option>
										<option value="Family Package">Transfert Mobile</option>
										<option value="Holiday Package">Hand Shake</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="text" id="to" name="departure" readonly>
									<label for="to">Date de Livraisons</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<select name="minprice">
										<option value="" disabled selected> Prix</option>
										<option value="$200">200</option>
										<option value="$500">500</option>
										<option value="$1000">1000</option>
										<option value="$5000">5000</option>
										<option value="$10,000">10,000</option>
										<option value="$50,000">50,000</option>
									</select>
								</div>
													
							</div>							
							<div class="row">
								<div class="input-field col s12">
									<input type="submit" value="Payer Content" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
								</div>
							</div>
						</form>
			</div>
		</div>
	</section>
@endsection