@extends('layouts.usuario')

@section('title', 'Cadastro')

@section('content')


<section id="cadastro" class="flex-row flex-center">
	<div class="card box">
		<div class="logo flex-row flex-center">
			<img src="/img/logo.png">
		</div>
		<h1 class="heading-3 weight-700">Primeira vez por aqui?</h1>
		<form method="post" onsubmit="return false;" action="/cadastro" class="form-submit">

			<div class="align">
				<span>Nome</span>
				<input type="text" name="nome" class="input input-100 required">
			</div>
			
			<div class="align">
				<span>E-mail</span>
				<input type="email" name="email" class="input input-100 required">
			</div>

			<div class="align">
				<span>Telefone/Celular</span>
				<input type="text" name="telefone" class="input input-100 required numero">
			</div>

			<div class="align">
				<span>Senha</span>
				<input type="password" name="senha" class="input input-100 required" id="senha" alphanumeric="true">
			</div>

			<div class="align">
				<span>Confirmar senha</span>
				<input type="password" name="confirmar_senha" class="input input-100 required" equalto="#senha">
			</div>
			
			<div class="buttons align">
				<ul class="flex-column">
					<li>
						<button class="btn btn-primary btn-100 send" data-button-action="Cadastrando...">Cadastrar</button>
					</li>
					<li>
						<a href="/login" class="btn btn-outline btn-100">Voltar para o login</a>
					</li>
				</ul>
			</div>
		</form>
	</div>
</section>


@stop