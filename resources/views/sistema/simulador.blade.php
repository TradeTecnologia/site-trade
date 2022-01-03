@extends('layouts.app')

@section('title', 'Simulador')

@section('content')

<section class="application">
	<div class="container">
		<div class="breadcrumb">
			<ul>
				<li>
					<a href="/sistema">Inicial</a>
				</li>
				<li>
					<a href="/sistema/simulador">Simulador</a>
				</li>
			</ul>
		</div>
		<div class="title bottom-5">
			<h1 class="display-4 weight-600">Simulador</h1>
		</div>
		<div class="add-form">
			<form method="post" onsubmit="return false;" class="form-submit" action="/configuracoes/servicos/editar/{{ $item['id'] }}">
				<div class="group">
					<div class="form-group">
						<div class="align">
							<span>Operação</span>
							<div class="select select-medium select-100">
                                <div class="selected flex-row">
                                    <input type="text" name="operacao" placeholder="Selecione" class="input input-show required" value="{{ $item['setor'] }}">
                                    <input type="hidden" name="operacao" class="input input-hidden required">
                                    <div class="toggle flex-row flex-center gradient-2">
                                        <i class="material-icons">arrow_drop_down</i>
                                    </div>
                                </div>
                                <div class="options">
                                    <ul>
                                        <li>
                                            <input type="radio" id="select1-value-1" data-value="Margem Livre (Novo)" value="Margem Livre (Novo)">
                                            <label for="select1-value-1" class="content-1">Margem Livre (Novo)</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="select1-value-2" data-value=">Empréstimo Complementar (INSS)" value="Empréstimo Complementar (INSS)">
                                            <label for="select1-value-2" class="content-1">Empréstimo Complementar (INSS)</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="select1-value-3" data-value="Refinanciamento + Margem Livre" value="Refinanciamento + Margem Livre">
                                            <label for="select1-value-3" class="content-1">Refinanciamento + Margem Livre</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="select1-value-4" data-value="Refinanciamento" value="Refinanciamento">
                                            <label for="select1-value-4" class="content-1">Refinanciamento</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="select1-value-5" data-value="Refinanciamento Rec" value="Refinanciamento Rec">
                                            <label for="select1-value-5" class="content-1">Refinanciamento Rec</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="select1-value-6" data-value="Cartão" value="Cartão">
                                            <label for="select1-value-6" class="content-1">Cartão</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="select1-value-7" data-value="Cartão" value="Cartão c/saque complementar">
                                            <label for="select1-value-7" class="content-1">Cartão c/saque complementar</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
						</div>
						<div class="align">
							<span>Órgão</span>
							<div class="select select-medium select-100">
                                <div class="selected flex-row">
                                    <input type="text" name="orgao" placeholder="Selecione" class="input input-show required" value="{{ $item['setor'] }}">
                                    <input type="hidden" name="orgao" class="input input-hidden required">
                                    <div class="toggle flex-row flex-center gradient-2">
                                        <i class="material-icons">arrow_drop_down</i>
                                    </div>
                                </div>
                                <div class="options">
                                    <ul>
                                        <li>
                                            <input type="radio" id="select2-value-1" data-value="Aeronáutica" value="Aeronáutica">
                                            <label for="select2-value-1" class="content-1">Aeronáutica</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="select2-value-2" data-value="Marinha" value="Marinha">
                                            <label for="select2-value-2" class="content-1">Marinha</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="select2-value-3" data-value="Assembléia Legislativa" value="Assembléia Legislativa">
                                            <label for="select2-value-3" class="content-1">Assembléia Legislativa</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
						</div>
						<div class="align">
							
						</div>
						<div class="align">
							<ul class="align-double">
								<li class="li-45">
									<span>Valor da parcela (R$)</span>
							        <input type="text" name="valor_parcela" class="input input-100 preco required" placeholder="0,00" data-mask-reverse="true">
								</li>
								<li class="li-45">
									<span>Valor liberado (R$)</span>
							        <input type="text" name="valor_liberado" class="input input-100 preco required" placeholder="0,00" data-mask-reverse="true">
								</li>
							</ul>
						</div>
						<div class="align">
							<ul class="align-double">
								<li class="li-45">
									<span>Idade</span>
							        <input type="number" name="idade" class="input input-100 required">
								</li>
								<li class="li-45">
									<span>Prazo</span>
									<div class="select select-medium select-100">
										<div class="selected flex-row">
											<input type="text" name="prazo" placeholder="Selecione" class="input input-show required">
											<input type="hidden" name="prazo" class="input input-hidden required" value="{{ $item['setor'] }}">
											<div class="toggle flex-row flex-center gradient-2">
												<i class="material-icons">arrow_drop_down</i>
											</div>
										</div>
										<div class="options">
											<ul>
												<?php $i = 1; ?>
                                                @while($i <= 64)
                                                <li>
                                                    <input type="radio" id="select3-value-{{ $i }}" data-value="{{ $i }}" value="{{ $i }}X">
                                                    <label for="select3-value-{{ $i }}" class="content-1">{{ $i }}X</label>
                                                </li>
                                                <?php $i++; ?>
                                                @endwhile
											</ul>
										</div>
                                    </div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="group-action">
					<ul>
						<li>
							<button type="submit" class="btn btn-primary btn-default send" data-button-action="Simulando...">Simular</button>
						</li>
					</ul>
				</div>
			</form>
		</div>
	</div>
</section>

@stop