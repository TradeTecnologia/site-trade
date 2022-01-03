@extends('layouts.usuario')

@section('title', 'Login')

@section('content')


<section id="login" class="flex-row flex-center">
	<div class="card box" style="margin-left: 5rem;">
		<div class="logo flex-row flex-center">
			<img src="https://s3.amazonaws.com/arquivostradeoff.stormfin.com.br/imagens/logo_topo.jpg">
		</div>
		<h1 class="heading-3 weight-700" style="text-align: center;">Storm</h1>
		<div class="buttons align">
			<ul class="flex-column">
				
				<li>
					<a href="http://tradeoff.stormfin.com.br/" target="_blank" class="btn btn-100" style="color: #2a4f77;background: white;border: 2px solid #2a4f77;">
						Acessar
					</a>
				</li>
			</ul>
		</div>
	</div>
</section>


<section id="login" class="flex-row flex-center">
	<div class="card box" style="margin-right:  10rem;">
		<div class="logo flex-row flex-center">
			<img src="/img/logo.png">
		</div>
		<h1 class="heading-3 weight-700" style="text-align: center;">Acessar Central de Conteúdo</h1>
		<form method="post" action="/login" onsubmit="return false;" class="form-submit">
			
			<div class="align">
				<span>E-mail</span>
				<input type="email" name="email" class="input input-100 required">
			</div>

			<div class="align">
				<span>Senha</span>
				<input type="password" name="senha" class="input input-100 required">
			</div>

			<div class="align">
				<a href="/recuperar-senha" class="link">Esqueci minha senha</a>
            </div>

			<div class="buttons align">
				<ul class="flex-column">
					<li>
						<button  class="btn btn-primary btn-100 send" data-button-action="Entrando...">Entrar</button>
					</li>
				</ul>
			</div>
		</form>
	</div>
</section>

<style type="text/css">
	.sistema {
		display: flex !important;
    	width: 100% !important;
	}
	.sistema #login {
		flex: 1 !important;
	}

	@media(max-width: 1024px) {
		.sistema {
			display: block !important;
	    	width: 100% !important;
		}	
		.sistema #login .card {
			margin-left: 0 !important;
			margin-right: 0 !important;
		}
	}
</style>


@stop