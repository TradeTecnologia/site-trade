@extends('layouts.usuario')

@section('title', 'Reset Senha')

@section('content')

<section id="reset" class="flex-row flex-center">
	<div class="card box">
		<div class="logo flex-row flex-center">
			<img src="/img/logo.png">
		</div>
	
		<h1 class="heading-3 weight-700">Trocar senha</h1>

		<form method="post" onsubmit="return false;" method="post" class="form-submit" action="/resetar-senha">
			
			<div class="align">
				<span>Nova senha</span>
				<input type="password" name="password" class="input input-100 required" id="password">
			</div>

			<div class="align">
				<span>Confirmar nova senha</span>
				<input type="password" name="confirm_password" class="input input-100 required" equalTo="#password">
			</div>

			<input type="hidden" name="email" value="{{ app('request')->input('email') }}" class="required">
            <input type="hidden" name="token" value="{{ app('request')->input('tk') }}" class="required">

			<div class="align instrucoes">
				<p class="fcontent-2">Após a troca da senha você será redirecionado a página de login.</p>
			</div>

			<div class="buttons align">
				<ul class="flex-column">
					<li>
						<button type="submit" class="send btn btn-primary btn-100" data-button-action="Salvando...">Salvar</button>
					</li>
					<li>
						<a href="/login" class="btn btn-outline btn-100">Voltar ao login</a>
					</li>
				</ul>
			</div>

			<div class="response-reset"></div>

		</form>

	</div>
</section>

@stop