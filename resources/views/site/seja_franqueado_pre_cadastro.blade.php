@extends('layouts.pre-cadastro')

@section('title', 'Pré cadastro do franqueado')

@section('content')

<main id="cadastro-pre-franqueado">
    <div class="container">
        <div class="content">
            <div class="progress"></div>
            <div class="box">
                <div class="top flex-row flex-between">
                    <div class="logo flex-row">
                        <img src="/img/logo.svg" alt="Trade OFF">
                        <h1 class="display-3 weight-700">Pré cadastro do franqueado</h1>
                    </div>
                    <div class="back">
                        <a href="/">
                            <i class="material-icons">close</i>
                        </a>
                    </div>
                </div>
                <div class="bottom">
                    <div class="steps">
                        <form method="post" onsubmit="return false;" action="/seja-franqueado/pre-cadastro" class="form-submit">
                            <div class="step step-1 active">
                                <div class="form flex-row flex-between">
                                    <div class="left">
                                        <div class="title">
                                            <h1 class="heading-2">Dados pessoais</h1>
                                        </div>
                                        <div class="align">
                                            <span>Nome completo</span>
                                            <input type="text" name="nome" placeholder="Nome completo" class="input input-100 required">
                                        </div>
                                        <div class="align">
                                            <span>CPF</span>
                                            <input type="text" name="cpf" placeholder="CPF" class="input input-100 required" data-mask="000.000.000-00">
                                        </div>
                                        <div class="align">
                                            <span>RG</span>
                                            <input type="text" name="rg" placeholder="RG" class="input input-100 required">
                                        </div>
                                        <div class="align">
                                            <span>Estado Civil</span>
                                            <div class="select select-medium select-100">
                                                <div class="selected flex-row">
                                                    <input type="text" name="estado_civil" placeholder="Selecione" class="input input-show required" value="">
                                                    <input type="hidden" name="estado_civil" class="input-hidden">
                                                    <div class="toggle flex-row flex-center gradient-2">
                                                        <i class="material-icons">keyboard_arrow_down</i>
                                                    </div>
                                                </div>
                                                <div class="options">
                                                    <ul>
                                                        <li>
                                                            <input type="radio" id="select2-value-1" data-value="1" value="Casado">
                                                            <label for="select2-value-1" class="content-1">Casado</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="select2-value-2" data-value="2" value="Solteiro">
                                                            <label for="select2-value-2" class="content-1">Solteiro</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="select2-value-3" data-value="3" value="União estável">
                                                            <label for="select2-value-3" class="content-1">União estável</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="select2-value-4" data-value="4" value="Divorciado">
                                                            <label for="select2-value-4" class="content-1">Divorciado</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="title"></div>
                                        <div class="align">
                                            <span>Data de nascimento</span>
                                            <input type="text" name="data_nascimento" placeholder="DD/MM/AAAA" class="input input-100 required" data-mask="00/00/0000">
                                        </div>
                                        <div class="align">
                                            <span>Local de nascimento</span>
                                            <input type="text" name="local_nascimento" placeholder="Cidade/UF" class="input input-100 required">
                                        </div>
                                        <div class="align">
                                            <span>Escolariedade</span>
                                            <div class="select select-medium select-100">
                                                <div class="selected flex-row">
                                                    <input type="text" name="escolariedade" placeholder="Selecione" class="input input-show required" value="">
                                                    <input type="hidden" name="escolariedade" class="input-hidden">
                                                    <div class="toggle flex-row flex-center gradient-2">
                                                        <i class="material-icons">keyboard_arrow_down</i>
                                                    </div>
                                                </div>
                                                <div class="options">
                                                    <ul>
                                                        <li>
                                                            <input type="radio" id="select1-value-1" data-value="1" value="Ensino fundamental">
                                                            <label for="select1-value-1" class="content-1">Ensino fundamental</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="select1-value-2" data-value="2" value="Ensino médio">
                                                            <label for="select1-value-2" class="content-1">Ensino médio</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="select1-value-3" data-value="3" value="Ensino superior incompleto">
                                                            <label for="select1-value-3" class="content-1">Ensino superior incompleto</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="select1-value-4" data-value="4" value="Ensino superior completo">
                                                            <label for="select1-value-4" class="content-1">Ensino superior completo</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="select1-value-5" data-value="5" value="Pós-graduado">
                                                            <label for="select1-value-5" class="content-1">Pós-graduado</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="align">
                                            <span>Profissão</span>
                                            <input type="text" name="profissao" placeholder="Profissão" class="input input-100 required">
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons flex-row flex-end">
                                    <button type="button" class="btn btn-primary btn-medium btn-step" data-current="1" data-step="2" data-action="next">Próximo</button>
                                </div>
                            </div>
                            <div class="step step-2">
                                <div class="form flex-row flex-between">
                                    <div class="left">
                                        <div class="title">
                                            <h1 class="heading-2">Endereço residencial</h1>
                                        </div>
                                        <div class="align">
                                            <span>CEP</span>
                                            <div class="input input-icon input-100 cep">
                                                <input type="text" data-mask="00000-000" name="dados_pessoais_cep" placeholder="00000-000" class="required" autocomplete="off" aria-required="true">
                                                <button type="button">
                                                    <i class="material-icons">search</i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="align">
                                            <ul class="align-double flex-row flex-between">
                                                <li class="li-60">
                                                    <span>Logradouro</span>
                                                    <input type="text" name="dados_pessoais_logradouro" placeholder="Logradouro" class="input input-100 required logradouro">
                                                </li>
                                                <li class="li-30">
                                                    <span>Número</span>
                                                    <input type="text" name="dados_pessoais_numero" placeholder="Número" class="input input-100">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="align">
                                            <span>Complemento</span>
                                            <input type="text" name="dados_pessoais_complemento" placeholder="Complemento" class="input input-100">
                                        </div>
                                        <div class="align">
                                            <ul class="flex-row flex-between">
                                                <li>
                                                    <span>Cidade</span>
                                                    <input type="text" name="dados_pessoais_cidade" placeholder="Cidade" class="input input-100 cidade required" data-mask="00/00/0000">
                                                </li>
                                                <li>
                                                    <span>UF</span>
                                                    <input type="text" name="dados_pessoais_uf" placeholder="UF" class="input input-100 estado required">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="title">
                                            <h1 class="heading-2">Contato pessoal</h1>
                                        </div>
                                        <div class="align">
                                            <span>Telefone residencial</span>
                                            <input type="text" name="telefone_residencial" placeholder="(DDD) 000000000" class="input input-100 required numero">
                                        </div>
                                        <div class="align">
                                            <span>Telefone celular</span>
                                            <input type="text" name="telefone_celular" placeholder="(DDD) 000000000" class="input input-100 numero">
                                        </div>
                                        <div class="align">
                                            <span>Email</span>
                                            <input type="email" name="email" placeholder="Email" class="input input-100 required">
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons flex-row flex-between">
                                    <button type="button" class="btn btn-outline btn-medium btn-step" data-current="2" data-step="1" data-action="prev">Voltar</button>
                                    <button type="button" class="btn btn-primary btn-medium btn-step" data-current="2" data-step="3" data-action="next">Próximo</button>
                                </div>
                            </div>
                            <div class="step step-3">
                                <div class="form flex-row flex-between">
                                    <div class="left">
                                        <div class="title">
                                            <h1 class="heading-2">Histórico profissional</h1>
                                        </div>
                                        <div class="align">
                                            <span>Situação profissional atual</span>
                                            <div class="select select-medium select-100">
                                                <div class="selected flex-row">
                                                    <input type="text" name="historico_situacao_atual" placeholder="Selecione" class="input input-show required" value="">
                                                    <input type="hidden" name="historico_situacao_atual" class="input-hidden">
                                                    <div class="toggle flex-row flex-center gradient-2">
                                                        <i class="material-icons">keyboard_arrow_down</i>
                                                    </div>
                                                </div>
                                                <div class="options">
                                                    <ul>
                                                        <li>
                                                            <input type="radio" id="select3-value-1" data-value="1" value="Empregado">
                                                            <label for="select3-value-1" class="content-1">Empregado</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="select3-value-2" data-value="2" value="Sócio/propietário">
                                                            <label for="select3-value-2" class="content-1">Sócio/propietário</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="select3-value-3" data-value="3" value="Desempregado">
                                                            <label for="select3-value-3" class="content-1">Desempregado</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="select3-value-4" data-value="4" value="Aposentado">
                                                            <label for="select3-value-4" class="content-1">Aposentado</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="align">
                                            <span>Cargo/Função</span>
                                            <input type="text" name="historico_cargo_funcao" placeholder="" class="input input-100">
                                        </div>
                                         <div class="align">
                                            <span>Há quanto tempo?</span>
                                            <input type="text" name="historico_qto_tempo" placeholder="" class="input input-100">
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="title"></div>
                                        <div class="align">
                                            <span>Empresa</span>
                                            <input type="text" name="historico_empresa" placeholder="" class="input input-100 ">
                                        </div>
                                        <div class="align">
                                            <span>Ramo da atividade</span>
                                            <input type="text" name="historico_ramo_atividade" placeholder="" class="input input-100 ">
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons flex-row flex-between">
                                    <button type="button" class="btn btn-outline btn-medium btn-step" data-current="3" data-step="2" data-action="prev">Voltar</button>
                                    <button type="button" class="btn btn-primary btn-medium btn-step" data-current="3" data-step="4" data-action="next">Próximo</button>
                                </div>
                            </div> 
                            <div class="step step-4">
                                <div class="title-100 flex-row">
                                    <h1 class="heading-2">Experiência empresarial</h1>
                                    <div class="checkbox">
                                        <input type="checkbox" name="experiencia_profissional" id="experiencia_profissional">
                                        <label for="experiencia_profissional"></label>
                                        <p>Não possuo experiência empresarial</p>
                                    </div>
                                </div>
                                <div class="form flex-row flex-between">
                                    <div class="left">
                                        <div class="align">
                                            <span>Ramo da atividade</span>
                                            <input type="text" name="ramo_atividade" placeholder="" class="input input-100">
                                        </div>
                                        <div class="align">
                                            <span>Número de funcionários</span>
                                            <input type="number" name="numero_funcionarios" placeholder="" class="input input-100">
                                        </div>
                                        <div class="align">
                                            <span>Faturamento anual (R$)</span>
                                            <input type="text" name="faturamento_anual" data-mask="#.##0,00" data-mask-reverse="true" placeholder="" class="input input-100">
                                        </div>
                                        <div class="align">
                                            <span>Participação acionária (%)</span>
                                            <input type="text" name="participacao_acionaria" data-mask="##0,00%" data-mask-reverse="true" placeholder="de 0,01% a 100%" class="input input-100">
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="align">
                                            <span>Esta é uma experiência em exercício?</span>
                                            <ul class="flex-row" style="height: 48px;align-items: center;">
                                                <li style="margin-right: 38px;">
                                                    <div class="radiobox">
                                                        <input type="radio" name="experiencia_em_exercicio" id="radiobox1-opcao1" value="s" checked>
                                                        <label for="radiobox1-opcao1"></label>
                                                        <p style="margin-top: 0px;">Sim</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radiobox">
                                                        <input type="radio" name="experiencia_em_exercicio" value="n" id="radiobox1-opcao2">
                                                        <label for="radiobox1-opcao2"></label>
                                                        <p style="margin-top: 0px;">Não</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="align">
                                            <ul class="flex-row flex-between">
                                                <li>
                                                    <span>Data de abertura</span>
                                                    <input type="text" name="data_abertura" placeholder="DD/MM/AAAA" class="input input-100" data-mask="00/00/0000">
                                                </li>
                                                <li>
                                                    <span>Data de encerramento</span>
                                                    <input type="text" name="data_encerramento" placeholder="DD/MM/AAAA" class="input input-100" data-mask="00/00/0000">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="align">
                                            <span>Descreva o motivo do desligamento/encerramento da sua atividade</span>
                                            <input type="text" name="motivo_encerramento" placeholder="Descreva..." class="input input-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons flex-row flex-between">
                                    <button type="button" class="btn btn-outline btn-medium btn-step" data-current="4" data-step="3" data-action="prev">Voltar</button>
                                    <button type="button" class="btn btn-primary btn-medium btn-step" data-current="4" data-step="5" data-action="next">Próximo</button>
                                </div>
                            </div>
                            <div class="step step-5">
                                <div class="form flex-row flex-between">
                                    <div class="left">
                                        <div class="title">
                                            <h1 class="heading-2">Interesse na franquia</h1>
                                        </div>
                                        <div class="align">
                                            <span>O que o/a levou a se interessar especificamente por essa franquia?</span>
                                            <textarea class="input textarea input-100" name="interesse_pergunta1" style="height: 139px;"></textarea>
                                        </div>
                                        <div class="align">
                                            <span>Qual o seu conhecimento nesse segmento de negócio?</span>
                                            <textarea class="input textarea input-100" name="interesse_pergunta2" style="height: 139px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="title"></div>
                                        <div class="align">
                                            <span>Onde deseja montar a franquia?</span>
                                            <input type="text" name="franquia_lugar" placeholder="Cidade/Estado" class="input input-100 required">
                                        </div>
                                        <div class="align">
                                            <span>Já tem um ponto comercial para a franquia?</span>
                                            <ul class="flex-row" style="height: 48px;align-items: center;">
                                                <li style="margin-right: 38px;">
                                                    <div class="radiobox">
                                                        <input type="radio" name="ponto_comercial" class="ponto_comercial" id="radiobox2-opcao1" value="s">
                                                        <label for="radiobox2-opcao1"></label>
                                                        <p style="margin-top: 0px;">Sim</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radiobox">
                                                        <input type="radio" name="ponto_comercial" class="ponto_comercial" id="radiobox2-opcao2" value="n" checked>
                                                        <label for="radiobox2-opcao2"></label>
                                                        <p style="margin-top: 0px;">Não</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="align disabled ponto_comercial_caracteristicas">
                                            <span>Descreva a localização e características do ponto comercial</span>
                                            <textarea class="input textarea input-100" name="ponto_comercial_caracteristicas" disabled style="height: 139px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons flex-row flex-between">
                                    <button type="button" class="btn btn-outline btn-medium btn-step" data-current="5" data-step="4" data-action="prev">Voltar</button>
                                    <button type="button" class="btn btn-primary btn-medium btn-step" data-current="5" data-step="6" data-action="next">Próximo</button>
                                </div>
                            </div>
                            <div class="step step-6">
                                <div class="form flex-row flex-between">
                                    <div class="left">
                                        <div class="title">
                                            <h1 class="heading-2">Referências comerciais</h1>
                                        </div>
                                        <div class="align">
                                            <ul class="align-double flex-row flex-between">
                                                <li class="li-45">
                                                    <span>Nome/descrição</span>
                                                    <input type="text" name="referencia_comercial_nome_1" class="input input-100">
                                                </li>
                                                <li class="li-45">
                                                    <span>Telefone</span>
                                                    <input type="text" name="referencia_comercial_telefone_1" placeholder="(DDD) 0000.0000" class="input input-100 numero">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="align">
                                            <ul class="align-double flex-row flex-between">
                                                <li class="li-45">
                                                    <span>Nome/descrição</span>
                                                    <input type="text" name="referencia_comercial_nome_2" class="input input-100">
                                                </li>
                                                <li class="li-45">
                                                    <span>Telefone</span>
                                                    <input type="text" name="referencia_comercial_telefone_2" placeholder="(DDD) 0000.0000" class="input input-100 numero">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="align">
                                            <ul class="align-double flex-row flex-between">
                                                <li class="li-45">
                                                    <span>Nome/descrição</span>
                                                    <input type="text" name="referencia_comercial_nome_3" class="input input-100">
                                                </li>
                                                <li class="li-45">
                                                    <span>Telefone</span>
                                                    <input type="text" name="referencia_comercial_telefone_3" placeholder="(DDD) 0000.0000" class="input input-100 numero">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons flex-row flex-between">
                                    <button type="button" class="btn btn-outline btn-medium btn-step" data-current="6" data-step="5" data-action="prev">Voltar</button>
                                    <button type="button" class="btn btn-primary btn-medium btn-step" data-current="6" data-step="7" data-action="next">Próximo</button>
                                </div>
                            </div>
                            <div class="step step-7">
                                <div class="form flex-row">
                                    <div class="flex-100">
                                        <div class="title">
                                            <h1 class="heading-2">Referências bancárias</h1>
                                        </div>
                                        <div class="align">
                                            <h3>1º banco</h3>
                                            <ul class="align-double flex-row flex-between">
                                                <li class="li-20">
                                                    <span>Nome do banco</span>
                                                    <input type="text" name="banco1_nome" class="input input-100">
                                                </li>
                                                <li class="li-20">
                                                    <span>Agência</span>
                                                    <input type="text" name="banco1_agencia" class="input input-100">
                                                </li>
                                                <li class="li-20">
                                                    <span>Gerente</span>
                                                    <input type="text" name="banco1_gerente" class="input input-100">
                                                </li>
                                                <li class="li-20">
                                                    <span>Telefone</span>
                                                    <input type="text" name="banco1_telefone" placeholder="(DDD) 0000.0000" class="input input-100 numero">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="align">
                                            <h3>2º banco</h3>
                                            <ul class="align-double flex-row flex-between">
                                                <li class="li-20">
                                                    <span>Nome do banco</span>
                                                    <input type="text" name="banco2_nome" class="input input-100">
                                                </li>
                                                <li class="li-20">
                                                    <span>Agência</span>
                                                    <input type="text" name="banco2_agencia" class="input input-100">
                                                </li>
                                                <li class="li-20">
                                                    <span>Gerente</span>
                                                    <input type="text" name="banco2_gerente" class="input input-100">
                                                </li>
                                                <li class="li-20">
                                                    <span>Telefone</span>
                                                    <input type="text" name="banco2_telefone" placeholder="(DDD) 0000.0000" class="input input-100 numero">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="align">
                                            <h3>3º banco</h3>
                                            <ul class="align-double flex-row flex-between">
                                                <li class="li-20">
                                                    <span>Nome do banco</span>
                                                    <input type="text" name="banco3_nome" class="input input-100">
                                                </li>
                                                <li class="li-20">
                                                    <span>Agência</span>
                                                    <input type="text" name="banco3_agencia" class="input input-100">
                                                </li>
                                                <li class="li-20">
                                                    <span>Gerente</span>
                                                    <input type="text" name="banco3_gerente" class="input input-100">
                                                </li>
                                                <li class="li-20">
                                                    <span>Telefone</span>
                                                    <input type="text" name="banco3_telefone" placeholder="(DDD) 0000.0000" class="input input-100 numero">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons flex-row flex-between">
                                    <button type="button" class="btn btn-outline btn-medium btn-step" data-current="7" data-step="6" data-action="prev">Voltar</button>
                                    <button type="button" class="btn btn-primary btn-medium btn-step" data-current="7" data-step="8" data-action="next">Próximo</button>
                                </div>
                            </div>
                            <div class="step step-8">
                                <div class="form">
                                    <div class="title-100">
                                        <h1 class="heading-2">Informações financeiras - patrimônio</h1>
                                    </div>
                                    <div class="flex-row flex-between">
                                        <div class="left">
                                            <div class="align">
                                                <span>Residência: </span>
                                                <div class="select select-medium select-100">
                                                    <div class="selected flex-row">
                                                        <input type="text" name="escolariedade" placeholder="Selecione" class="input input-show required" value="">
                                                        <input type="hidden" name="escolariedade" class="input-hidden">
                                                        <div class="toggle flex-row flex-center gradient-2">
                                                            <i class="material-icons">keyboard_arrow_down</i>
                                                        </div>
                                                    </div>
                                                    <div class="options">
                                                        <ul>
                                                            <li>
                                                                <input type="radio" id="select4-value-1" data-value="1" value="Própria">
                                                                <label for="select4-value-1" class="content-1">Própria</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="select4-value-2" data-value="2" value="Alugada">
                                                                <label for="select4-value-2" class="content-1">Alugada</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="select4-value-3" data-value="3" value="Financiada">
                                                                <label for="select4-value-3" class="content-1">Financiada</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="select4-value-4" data-value="4" value="Outros">
                                                                <label for="select4-value-4" class="content-1">Outros</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="align">
                                                <span>Possui empresas?</span>
                                                <ul class="flex-row" style="height: 48px;align-items: center;">
                                                    <li style="margin-right: 38px;">
                                                        <div class="radiobox">
                                                            <input type="radio" name="experiencia_em_exercicio" id="radiobox3-opcao1" value="s">
                                                            <label for="radiobox3-opcao1"></label>
                                                            <p style="margin-top: 0px;">Sim</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="radiobox">
                                                            <input type="radio" name="experiencia_em_exercicio" value="n" id="radiobox3-opcao2" checked>
                                                            <label for="radiobox3-opcao2"></label>
                                                            <p style="margin-top: 0px;">Não</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons flex-row flex-between">
                                    <button type="button" class="btn btn-outline btn-medium btn-step" data-current="8" data-step="7" data-action="prev">Voltar</button>
                                    <button type="button" class="btn btn-primary btn-medium btn-step" data-current="8" data-step="9" data-action="next">Próximo</button>
                                </div>
                            </div>
                            <div class="step step-9">
                                <div class="form">
                                    <div class="title-100">
                                        <h1 class="heading-2">Informações financeiras - patrimônio</h1>
                                    </div>
                                    <div class="flex-row flex-between">
                                        <div class="left">
                                            <div class="align">
                                                <span>Capital própio (R$)</span>
                                                <input type="text" name="capital_proprio" class="input input-100" data-mask="#.##0,00" data-mask-reverse="true">
                                            </div>
                                            <div class="align">
                                                <span>Empréstimo de terceiros (R$)</span>
                                                <input type="text" name="emprestimo_de_terceiros" data-mask="#.##0,00" data-mask-reverse="true" class="input input-100">
                                            </div>
                                            <div class="align">
                                                <span>Doações de terceiros (R$)</span>
                                                <input type="text" name="doacoes_de_terceiros" data-mask="#.##0,00" data-mask-reverse="true" class="input input-100">
                                            </div>
                                            <div class="align">
                                                <span>Outras fontes (R$)</span>
                                                <input type="text" name="outras_fontes" data-mask="#.##0,00" data-mask-reverse="true" class="input input-100">
                                            </div>
                                        </div>
                                        <div class="right flex-column flex-between">
                                            <div class="top">
                                                <div class="align">
                                                    <span>Total disponível (R$)</span>
                                                    <input type="text" name="total_disponivel" class="input input-100" data-mask="#.##0,00" data-mask-reverse="true">
                                                </div>
                                                <div class="align">
                                                    <span>Dependerá diretamente do resultado financeiro da franquia para se manter?</span>
                                                    <ul class="flex-row" style="height: 48px;align-items: center;">
                                                        <li style="margin-right: 38px;">
                                                            <div class="radiobox">
                                                                <input type="radio" name="resultado_financeiro" id="radiobox4-opcao1" value="s">
                                                                <label for="radiobox4-opcao1"></label>
                                                                <p style="margin-top: 0px;">Sim</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="radiobox">
                                                                <input type="radio" name="resultado_financeiro" value="n" id="radiobox4-opcao2" checked>
                                                                <label for="radiobox4-opcao2"></label>
                                                                <p style="margin-top: 0px;">Não</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="bottom">
                                                <div class="align">
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="checkbox-finalizar-1" id="checkbox-finalizar-1">
                                                        <label for="checkbox-finalizar-1"></label>
                                                        <p>Certifico que nenhuma informação solicitada foi omitida.</p>
                                                    </div>
                                                </div>
                                                <div class="align">
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="checkbox-finalizar-2" id="checkbox-finalizar-2">
                                                        <label for="checkbox-finalizar-2"></label>
                                                        <p>Aceito os <a href="javascript:void(0);" class="link">termos de uso e política de privacidade.</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons flex-row flex-between">
                                    <button type="button" class="btn btn-outline btn-medium btn-step" data-current="9" data-step="8" data-action="next">Voltar</button>
                                    <button class="btn btn-primary btn-medium send" data-button-action="Enviando...">Finalizar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@stop