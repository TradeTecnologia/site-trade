@extends('layouts.site')

@section('title', 'Simulação')

@section('content')

<main id="simulacao">
    <div class="simulacao-financiamento-content">
        <div class="box card">
            <form method="post" onsubmit="return false;" action="/simulacao/financiamento/acao" class="form-submit">
                <div class="title">
                    <h1 class="display-1">Financiamento do imóvel</h1>
                </div>
                <div class="step">
                    <div class="align">
                        <ul class="flex-row">
                            <li class="li-30">
                                <span>Nome</span>
                                <input type="text" name="nome" class="input input-100 required" placeholder="Nome">
                            </li>
                            <li class="li-30">
                                <span>Telefone</span>
                                <input type="text" name="telefone" class="input input-100 numero required" placeholder="Telefone">
                            </li>
                            <li class="li-30">
                                <span>Email</span>
                                <input type="email" name="email" class="input input-100 required" placeholder="Email">
                            </li>
                        </ul>
                    </div>
                    <div class="align">
                        <span>Tipo de imóvel</span>
                        <ul class="flex-row">
                            <li class="flex-row">
                                <div class="radiobox">
                                    <input type="radio" name="tipo_imovel" value="1" id="categoria_imovel_1" checked>
                                    <label for="categoria_imovel_1"></label>
                                </div> 
                                <p class="uppercase">Imóvel novo</p>
                            </li>
                            <li class="flex-row">
                                <div class="radiobox">
                                    <input type="radio" name="tipo_imovel" value="2" id="categoria_imovel_2">
                                    <label for="categoria_imovel_2"></label>
                                </div> 
                                <p class="uppercase">Imóvel usado</p>
                            </li>
                        </ul>
                    </div>
                    <div class="align">
                        <ul class="flex-row">
                            <li class="li-40">
                                <span>Valor do imóvel</span>
                                <input type="text" name="valor_imovel" data-mask="#.##0,00" data-mask-reverse="true" class="input input-100 required" placeholder="Valor do imóvel">
                            </li>
                            <li class="li-40">
                                <span>Valor desejado para financiamento</span>
                                <input type="text" name="valor_financiamento" data-mask="#.##0,00" data-mask-reverse="true" class="input input-100 required" placeholder="Valor desejado para financiamento">
                            </li>
                        </ul>
                    </div>
                    <div class="align">
                        <div class="flex-row">
                            <div class="li-30">
                                <span>Cidade</span>
                                <input type="text" name="cidade" class="input input-100 required" placeholder="Cidade">
                            </div>
                            <div class="li-30">
                                <span>Estado</span>
                                <div class="select select-medium select-100">
                                    <div class="selected flex-row selected-mobile">
                                        <input type="text" name="estado" placeholder="Selecione" class="input input-show required" value="">
                                        <input type="hidden" name="estado" class="input-hidden">
                                        <div class="toggle flex-row flex-center gradient-2">
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </div>
                                    </div>
                                    <div class="options">
                                        <ul>
                                            <li>
                                                <input type="radio" id="select1-value-1" data-value="AC" value="AC">
                                                <label for="select1-value-1" class="content-1">AC</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-2" data-value="AL" value="AL">
                                                <label for="select1-value-2" class="content-1">AL</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-3" data-value="AM" value="AM">
                                                <label for="select1-value-3" class="content-1">AM</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-4" data-value="BA" value="BA">
                                                <label for="select1-value-4" class="content-1">BA</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-5" data-value="CE" value="CE">
                                                <label for="select1-value-5" class="content-1">CE</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-6" data-value="DF" value="DF">
                                                <label for="select1-value-6" class="content-1">DF</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-7" data-value="ES" value="ES">
                                                <label for="select1-value-7" class="content-1">ES</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-8" data-value="GO" value="GO">
                                                <label for="select1-value-8" class="content-1">GO</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-9" data-value="MA" value="MA">
                                                <label for="select1-value-9" class="content-1">MA</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-10" data-value="MT" value="MT">
                                                <label for="select1-value-10" class="content-1">MT</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-11" data-value="MS" value="MS">
                                                <label for="select1-value-11" class="content-1">MS</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-12" data-value="MG" value="MG">
                                                <label for="select1-value-12" class="content-1">MG</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-13" data-value="PA" value="PA">
                                                <label for="select1-value-13" class="content-1">PA</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-14" data-value="PB" value="PB">
                                                <label for="select1-value-14" class="content-1">PB</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-15" data-value="PR" value="PR">
                                                <label for="select1-value-15" class="content-1">PR</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-16" data-value="PE" value="PE">
                                                <label for="select1-value-16" class="content-1">PE</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-17" data-value="PI" value="PI">
                                                <label for="select1-value-17" class="content-1">PI</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-18" data-value="RJ" value="RJ">
                                                <label for="select1-value-18" class="content-1">RJ</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-19" data-value="RN" value="RN">
                                                <label for="select1-value-19" class="content-1">RN</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-20" data-value="RS" value="RS">
                                                <label for="select1-value-20" class="content-1">RS</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-21" data-value="RO" value="RO">
                                                <label for="select1-value-21" class="content-1">RO</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-22" data-value="RR" value="RR">
                                                <label for="select1-value-22" class="content-1">RR</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-23" data-value="SC" value="SC">
                                                <label for="select1-value-23" class="content-1">SC</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-24" data-value="SP" value="SP">
                                                <label for="select1-value-24" class="content-1">SP</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-25" data-value="SE" value="SE">
                                                <label for="select1-value-25" class="content-1">SE</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="select1-value-26" data-value="TO" value="TO">
                                                <label for="select1-value-26" class="content-1">TO</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="align">
                        <ul class="flex-row">
                            <li class="li-30">
                                <span>Data de nascimento</span>
                                <input type="text" name="data_nascimento" class="input input-100 required" placeholder="DD/MM/AAAA" data-mask="00/00/0000">
                            </li>
                            <li class="li-30">
                                <span>Renda familiar bruta</span>
                                <input type="text" name="renda_familiar" data-mask="#.##0,00" data-mask-reverse="true" class="input input-100 required" placeholder="Renda familiar bruta">
                            </li>
                        </ul>
                    </div>
                    <div class="align">
                        <div class="flex-row flex-between">
                            <div class="valor"></div>
                            <div class="button">
                                <button type="submit" class="btn btn-primary btn-100 btn-larger send" data-button-action="Enviando...">Solicitar análise</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

@stop