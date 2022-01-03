@extends('layouts.usuario')

@section('title', 'Login')

@section('content')

<section id="recuperar" class="flex-row flex-center">
	<div class="card box">
		<div class="logo flex-row flex-center">
			<img src="/img/logo.png">
		</div>
		<h1 class="heading-3 weight-700">Recuperação de senha</h1>
		<form method="post" action="/recuperar-senha" onsubmit="return false;" class="form-submit">
			
			<div class="align">
				<span>E-mail</span>
				<input type="email" name="email" class="input input-100 required">
			</div>

			<div class="buttons align">
				<ul class="flex-column">
					<li>
						<button type="submit" class="send btn btn-primary btn-100" data-button-action="Enviando...">Recuperar senha</button>
					</li>
					<li>
						<a href="/login" class="btn btn-outline btn-100">Voltar ao login</a>
					</li>
				</ul>
			</div>
		</form>
	</div>
</section>

@stop