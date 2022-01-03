@extends('layouts.app')

@section('title', 'Minhas Comissões')

@section('content')

<section class="application">
	<div class="container">
		<div class="breadcrumb">
			<ul>
				<li>
					<a href="/sistema/">Inicial</a>
				</li>
				<li>
					<a href="/sistema/comissoes">Minhas Comissões</a>
				</li>
			</ul>
		</div>
		<div class="controls flex-row flex-between">
			<div class="title">
				<h1 class="display-4 weight-600">Minhas Comissões</h1>
			</div>
			<div class="tools flex-row">
				<div class="search">
					<div class="search-box">
						<input type="text" name="buscar" placeholder="Buscar">
						<button type="button">
							<i class="material-icons">search</i>
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="data">
			<div class="table">
				<table class="datatable">
                    <thead>
                        <td class="<?= (!empty($data)) ? '' : 'not_sorting'; ?>">Cliente</td>
                        <td class="<?= (!empty($data)) ? '' : 'not_sorting'; ?>">Valor empréstimo</td>
                        <td class="<?= (!empty($data)) ? '' : 'not_sorting'; ?>">Valor comissão</td>
                        <td class="<?= (!empty($data)) ? '' : 'not_sorting'; ?>">Situação</td>
                        <td class="not_sorting width-0"></td>
                    </thead>
                    <tbody>
                    	@foreach($data as $key => $value)
                    	<tr>
                    		<td>{{ $value['cliente'] }}</td>
                    		<td>{{ $value['valor_emprestimo'] }}</td>
                    		<td>{{ $value['valor_comissao'] }}</td>
                    		<td>{{ $value['situacao'] }}</td>
                    	</tr>
                    	@endforeach
                    </tbody>
                </table>
			</div>
		</div>
		@include('includes.pagination')
	</div>
</section>

@stop