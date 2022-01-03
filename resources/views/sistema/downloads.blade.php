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
			</ul>
		</div>
		<div class="controls flex-row flex-between">
			<div class="title">
				<h1 class="display-4 weight-600">Downloads</h1>
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
	</div>
</section>

<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Roboto');

	body{
	  font-family: 'Roboto', sans-serif;
	  font-size:12px;
	}

	
	.main-wrapper{
	  width:70%;
	  margin: 0 auto;
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
	  border-bottom: 2px solid #e0e0e0;
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

</style>

@stop
