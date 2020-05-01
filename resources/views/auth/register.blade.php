@extends('layouts.front')

@section('content')
    <form class="" action="{{ route('register') }}" method="post">
        @csrf
        <section>
    		<div class="tr-register">
    			<div class="tr-regi-form">
    				<h4>Creer ton Profile</h4>
    				<p>Simple, Rapide et Sécurisé.</p>
    				<form class="col s12">
    					<div class="row">
    						<div class="input-field col m6 s12">
    							<input type="text" class="validate" name="first_name" required>
    							<label>Nom</label>
    						</div>
    						<div class="input-field col m6 s12">
    							<input type="text" class="validate" name="last_name" required>
    							<label>Prenom</label>
    						</div>
    					</div>
    					<div class="row">
    						<div class="input-field col s12">
    							<input type="number" class="validate" name="phone" required>
    							<label>Téléphone</label>
    						</div>
    					</div>
    					<div class="row">
    						<div class="input-field col s12">
    							<input type="email" class="validate" name="email" required>
    							<label>Email</label>
    						</div>
    					</div>
    					<div class="row">
    						<div class="input-field col s12">
    							<input type="password" class="validate" name="password" required>
    							<label>Mot de pass</label>
    						</div>
    					</div>
    					<div class="row">
    						<div class="input-field col s12">
    							<input type="password" class="validate" name="password_confirmation" required>
    							<label>Confirme Mot de pass</label>
    						</div>
    					</div>
    					<div class="row">
    						<div class="input-field col s12">
    							<input type="submit" value="Validé" class="waves-effect waves-light btn-large full-btn">
                            </div>
    					</div>
    				</form>
    				<p>click <a href="{{ route('login') }}"> Login</a>
    				</p>
    			</div>
    		</div>
    	</section>
    </form>
	<!--END DASHBOARD-->
	
@endsection
