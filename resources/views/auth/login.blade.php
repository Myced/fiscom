@extends('layouts.front')

@section('content')
    <section>
		<div class="tr-register">
			<div class="tr-regi-form">
				<h4>Identification</h4>
				<p>Facile, rapide et gratuit.</p>

				@if(!empty($errors))
					@foreach($errors->all() as $error)
						<div class="alert alert-danger">
							{{ $error }}
						</div>
						<br>
					@endforeach
				@endif

				<form class="col s12" action="{{ route('login') }}" method="POST">
					@csrf

					<div class="row">
						<div class="input-field col s12">
							<input type="text" class="validate" name="email" required>
							<label>Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="password" class="validate"  name="password" required>
							<label>Password</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="submit" value="Connect-Toi" class="waves-effect waves-light btn-large full-btn"> </div>
					</div>
				</form>
				<p><a href="forgot-pass.html">Mot de pass oublié</a> | C'est ta premier fois ? <a href="{{ route('register') }}">Abonne-Toi</a>
				</p>
				<div class="soc-login">
					<h4>S'identifier en utilisant</h4>
					<ul>
						<li><a href="#"><i class="fa fa-facebook fb1"></i> Facebook</a> </li>
						<li><a href="#"><i class="fa fa-twitter tw1"></i> Twitter</a> </li>
						<li><a href="#"><i class="fa fa-google-plus gp1"></i> Google</a> </li>
					</ul>
				</div>
			</div>
		</div>
	</section>
@endsection
