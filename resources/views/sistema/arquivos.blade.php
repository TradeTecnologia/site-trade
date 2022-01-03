@extends('layouts.app')

@section('title', 'Downloads')

@section('content')

<section class="application">
	<div class="container">
		<div class="breadcrumb">
			<ul>
				<li>
					<a href="/sistema/">Inicial</a>
				</li>
				<li>
					<a href="/sistema/downloads">Downloads</a>
				</li>
				<?php
				if($categoria['categoria_mae'] != null){
				?>
				<li>
					<a href="/sistema/downloads/categorias/<?= $categoria['categoria_mae']; ?>">Categoria Anterior</a>
				</li>
				<?php
				}
				?>
			</ul>
		</div>
		<div class="controls flex-row flex-between">
			<div class="title">
				<h1 class="display-4 weight-600"><?= $categoria['nome']; ?></h1>
			</div>
		</div>

		<div style="margin-top: 20px;">
			<div class="categorias-pastas">
				<?php
				foreach($categorias as $keyCat => $valueCat):
				?>
				<div class="box box-categorias">
					<a href="/sistema/downloads/categorias/<?= $valueCat->id; ?>">
						<div class="box-align">
							<div class="icon">
								<i class="material-icons">folder</i>
							</div>
							<div class="texto">
								<h1><?= $valueCat->nome; ?></h1>
							</div>
						</div>
					</a>
				</div>
				<?php
				endforeach;
				?>
			</div>
		</div>

		<div class="main-wrapper">
					<div class="card card-body">
						@foreach($data as $key => $value)

							<div class="table-row">
								<div class="wrapper text-4">
									<div class="wrapper text-2">
										<div class="text">{{ $value->titulo }}</div>
										<div class="text">
											<?php
											if(empty($value->arquivo)){
											?>
											<a href="{{ $value->url }}" style="color: black; font-weight: 600;" target="_blank">
												<i class="material-icons">publish</i> Acessar Conteúdo
											</a>
												<?php
												} else {
												?>
												<a href="/sistema/downloads/{{ $value->arquivo}}" style="color: black; font-weight: 600;">
													<i class="material-icons">file_download</i> Download
												</a>
												<?php
												}
												?>
										</div>
									</div>
								</div>
							</div>
						@endforeach

					</div>
		</div>
	</div>
</section>

<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Roboto');

	body{
	  font-family: 'Roboto', sans-serif;
	  font-size:12px;
	}


	.main-wrapper{
	  margin: 20px 0 0 0;
	}

	.table-row {
	  display: flex;
	  display: -webkit-flex;
	  flex-direction: row;
	  -webkit-flex-direction: row;
	  flex-wrap: no-wrap;
	  -webkit-flex-wrap: no-wrap;
	  width: 100%;
	  padding-left: 15px;
	  padding-right: 15px;
	}
	.wrapper {
	  display: flex;
	  display: -webkit-flex;
	  flex-direction: row;
	  -webkit-flex-direction: row;
	  flex-grow: 0;
	  -webkit-flex-grow: 0;
	  color:white;
	}
	.text-4{
		padding-top: 5px;
	}
	.text-4,
	.text-2,
	.text {
	  flex-grow: 1;
	  -webkit-flex-grow: 1;
	}
	.text {
	  overflow: hidden;
	  white-space: nowrap;
	  text-overflow: ellipsis;
	  padding-right: 20px;
	  color: black;
	  font-family: "Montserrat";
      font-size: 16px;
	}
	.text {
	  width: 180px;
	}
	.num {
	  width: 80px;
	  text-align: right;
	}
	/*
	 * Media queries: optimize for different screen widths.
	 */
	@media all and (max-width: 1100px) {
	  .text-2,
	  .num-2 {
	    flex-direction: column;
	    -webkit-flex-direction: column;
	  }
	  .text-2 div,
	  .num-2 div {
	    flex-grow: 0;
	    -webkit-flex-grow: 0;
	    width: 100%;
	  }
	  .text-2 {
	    width: 180px;
	  }
	  .num-2 {
	    width: 80px;
	  }
	}
	@media all and (max-width: 580px) {
	  .text-4,
	  .num-4 {
	    flex-direction: column;
	    -webkit-flex-direction: column;
	  }
	  .text-4 div,
	  .num-4 div {
	    flex-grow: 0;
	    -webkit-flex-grow: 0;
	    width: 100%;
	  }
	  .text-4 {
	    width: 180px;
	  }
	  .num-4 {
	    width: 80px;
	  }
	}
	@media all and (max-width: 320px) {
	  .table-row {
	    flex-direction: column;
	    -webkit-flex-direction: column;
	  }
	  .table-row div {
	    flex-grow: 0;
	    -webkit-flex-grow: 0;
	    width: 100%;
	  }
	  .num {
	    text-align: left;
	  }
	}
	/*
	 * General good-look styles, not mandatory.
	 */
	body {
	  font-size: 20px;
	}
	.table-row {
	  border-bottom: 11px solid transparent;
	  border-collapse: collapse;
	  padding-top: 5px;
	}
	.table-row.header {
	  background-color: #234d75;
	  font-weight: bold;
	  padding-top: 8px;
	  padding-bottom: 8px;
	}
	.btn.btn-primary{
		margin: 10px 0;
		width: 100%;
	}


	.categorias-content .tabelas .tabela {
		margin-bottom: 2em;
	}

	.categorias-content .tabelas .tabela .titulo {
		display: flex;
		align-items: center;
		width: fit-content;
		color: #0F245D;
		font-family: "Open Sans";
		font-size: 20px;
		height: 34px;
		border-radius: 3px;
		margin-bottom: 3px;
		cursor: pointer;
		transition: 0.3s ease-out;
		margin-bottom: 20px;
		padding-right: 1em;
	}

	.categorias-content .tabelas .tabela .titulo:hover {
		background-color: rgba(157,167,179,0.3);
	}

	.categorias-content .tabelas .tabela .itens > ul {
		display: flex;
		align-items: center;
		justify-content: space-between;
		position: relative;
		padding: 0.3em 1em;
		margin-bottom: 31px;
		background: #FFF;
		width: 100%;
		border: 1px solid #D6DEE4;
		border-radius: 5px;
		transition: 0.3s ease-out;
		box-sizing: border-box;
	}

	.categorias-content .tabelas .tabela .itens > ul:nth-last-child(1) {
		margin-bottom: 0px;
	}

	.categorias-content .tabelas .tabela .itens > ul:hover {
		box-shadow: 0 1px 10px 1px rgba(14, 49, 55, 0.6);
	}

	.categorias-content .tabelas .tabela .itens > ul > li > span{
		color: #333F52;
		font-size: 17px;
		line-height: 24px;
	}

	.categorias-content .tabelas .tabela .itens > ul > li:nth-child(1){
		display: flex;
		align-items: center;
		width: 30%;
	}

	.categorias-content .tabelas .tabela .itens > ul > li:nth-child(1) span{
		white-space: nowrap;
		overflow: hidden !important;
		text-overflow: ellipsis;
		width: 90%;
	}

	.categorias-content .tabelas .tabela .itens > ul > li:nth-child(2){
		display: flex;
		align-items: center;
		width: 60%;
	}

	.categorias-content .tabelas .tabela .itens > ul > li:nth-child(2) span{
		white-space: nowrap;
		overflow: hidden !important;
		text-overflow: ellipsis;
		width: 90%;
	}

	.categorias-content .tabelas .tabela .itens > ul > li:nth-child(3){
		display: flex;
		justify-content: center;
		width: 5%;
	}

	.categorias-content .tabelas .tabela .itens > ul > li:nth-child(4){
		display: flex;
		justify-content: flex-end;
		width: 5%;
	}

	.categorias-content .tabelas .tabela .itens > ul > li:nth-child(1) > i{
		margin-right: 31px;
		font-size: 22px;
		color: #0F245D;
	}

	.categorias-content .tabelas .tabela .itens > ul > li > div{
		display: flex;
		align-items: center;
		border-radius: 500px;
		width: 30px;
		height: 30px;
		justify-content: center;
		cursor: pointer;
	}

	.categorias-content .tabelas .tabela .itens > ul > li > div:hover, .categorias-content .tabelas .tabela .itens > ul > li > div:focus{
		background: rgba(157,167,179,0.3);
	}

	.categorias-content .tabelas .tabela .itens > ul > li > div > i{
		color: #717171;
		font-size: 22px;
	}

	.categorias-content .tabelas .tabela .itens > ul > li > div .opcoes{
		display: none;
		background: #FFFFFF;
		z-index: 999;
	}

	.categorias-content .tabelas .tabela .itens > ul > li > div .opcoes.opcoes-show{
		display: block;
		position: absolute;
		top: 25px;
		right: 15px;
		transition: 0.3s ease-out;
	}

	.categorias-content .tabelas .tabela .itens > ul > li > div .opcoes.opcoes-show ul{
		display: flex;
		flex-direction: column;
		width: 153px;
		padding: 10px 0px;
		border-radius: 3px;
		background-color: #FFFFFF;
		box-shadow: 0 0 6px 3px rgba(48,98,179,0.62);
	}

	.categorias-content .tabelas .tabela .itens > ul > li > div .opcoes.opcoes-show ul li{
		width: 100%;
	}

	.categorias-content .tabelas .tabela .itens > ul > li > div .opcoes.opcoes-show ul li a{
		display: flex;
		justify-content: center;
		align-items: center;
		height: 30px;
		color: #717171;
		font-size: 17px;
		width: 100%;
		border-radius: 0px;
	}

	.categorias-content .tabelas .tabela .itens > ul > li > div .opcoes.opcoes-show ul li a:hover{
		background: rgba(157,167,179,0.3);
		color: #1B1D1F;
	}


</style>

@stop
