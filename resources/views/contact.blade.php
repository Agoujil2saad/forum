@extends('layouts.master_1')
@section('styles')
<style type="text/css">
ul li{
	color: #000;
}
</style>
@endsection
@section('content')
<div class="ui internally celled stackable grid">
	<div class="row">
		<div class="eight wide column">
					<div class="centered nine wide column">
			<h4 class="ui dividing blue header">Notre Emplacement</h4>
			<div class="ui compact segment">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13248.039954432086!2d-5.5149547720447565!3d33.8893965904066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda045b10ef1d8d9%3A0xf3836ee445283474!2sEl+Bassatine%2C+Mekn%C3%A8s%2C+Maroc!5e0!3m2!1sfr!2s!4v1506772883259" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		</div>

		<div class="eight wide column">
			<form class="ui form segment centered form_animation" method="POST" action="{{ url('/contact_us') }}">
				{{ csrf_field() }}
				<h4 class="ui dividing blue header">Contact</h4>
				<div class="field">
					<label>Nom *</label>
					<div class="ui left icon input">
						<input type="text" name="nom" required placeholder="Nom...">
						<i class="user icon blue"></i>
					</div>
				</div>
				<div class="field">
					<label>Adresse e-mail *</label>
					<div class="ui left icon input">
						<input type="email" name="email" placeholder="jesuisafrica@example.com" required>
						<i class="mail outline icon blue"></i>
					</div>
				</div>
				<div class="field">
					<label>Téléphone *</label>
					<div class="ui left icon input">
						<input type="tel" name="telephone" required placeholder="telephone...">
						<i class="phone icon blue"></i>
					</div>
				</div>
				<div class="field">
					<label>Objet *</label>
					<div class="ui left icon input">
						<input type="text" name="objet" required placeholder="objet...">
						<i class="align left icon blue"></i>
					</div>
				</div>
				<div class="field">
					<label>Description*</label>
					<textarea rows="3" name="msg"></textarea>
				</div>
				<button class="ui blue button" type="submit">Envoyer</button>
			</form>
		</div>
	</div>


</div>
@endsection