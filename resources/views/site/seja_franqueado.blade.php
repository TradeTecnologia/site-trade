@extends('layouts.site')

@section('title', 'Seja um franqueado')

@section('content')


<main id="seja-franqueado">

    <div class="slider" id="inicio">

        <div class="itens single-item">
            
            <div class="item" style="background: linear-gradient(58.48deg, #002955 0%, #D18B2F 100%), url('/img/slider-franqueado-2.jpg'); background-size: cover !important;">
                <div class="container">
                    <div class="description">
                        
                        <h1 class="display-1">Seja um franqueado</h1>
                       
                        <h2>
                            Invista entre R$50 mil a R$80 mil e seja dono de um negócio rentável e com propósito. Entre para o time que busca entregar as melhores soluções financeiras e realmente ajudar aos nossos clientes. Cadastre-se.
                        </h2>
                        
                    </div>
                </div>
            </div>

            <div class="item" style="background: linear-gradient(58.48deg, #002955 0%, #D18B2F 100%), url('/img/slide-franqueado-1.jpeg'); background-size: cover !important;">
                <div class="container">
                    <div class="description">
                        
                        <h1 class="display-1">Seja um franqueado</h1>
                       
                        <h2>
                            Invista entre R$50 mil a R$80 mil e seja dono de um negócio rentável e com propósito. Entre para o time que busca entregar as melhores soluções financeiras e realmente ajudar aos nossos clientes. Cadastre-se.
                        </h2>
                        
                    </div>
                </div>
            </div>
            
        </div>

    </div>

    <div class="info">
        <div class="container flex-row flex-between" style="align-items: initial;">
            <div class="left">
                <h1 class="display-1">Faça parte do nosso time</h1>
                <div class="text">
                    <p>
                        Tenha o seu próprio negócio rentável e com proprósito. Contamos com uma equipe altamente qualificada e trabalhamos para entregar as melhores soluções para o crescimento do seu negócio.
                    </p>
                </div>
                <!--<div class="acao">
                    <a href="/seja-franqueado/plano-negocios/{{ $data['fraqueado']->plano_negocio_arquivo }}" class="btn btn-outline"><i class="material-icons">get_app</i> Ver plano de negócio</a>
                </div>-->
            </div>
            <div class="right">
                <div class="card">
                    <h1 class="heading-1" style="text-align: center;">Chegue mais longe conosco</h1>
                    <!--<h2>Chegue mais longe conosco</h2>-->
                    <div class="acoes flex-row flex-center">
                        <ul class="flex-column flex-center">
                            <li>
                                <a href="/seja-franqueado/pre-cadastro" class="btn btn-primary">Cadastre-se</a>
                            </li>
                            <li>
                                <a href="http://tradeoff.stormfin.com.br/" class="btn btn-outline">Já tenho cadastro</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vantagens">
        <div class="container">
            <div class="title">
                <h1 class="display-2">Vantagens</h1>
            </div>
            <div  class="itens multiple-itens" data-autoplay="false" data-arrows="true" data-itens="5" data-center="true" data-infinite="true" data-loop="true" data-dots="false">

                @foreach($data['vantagens'] as $key => $value)
                <div class="item">
                    <h1 class="uppercase">{{ $value->titulo }}</h1>
                    <p>{{ $value->texto }}</p>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="como-funciona" style="padding-top: 40px;">
        <div class="container">
            <h1 class="heading-1 text-center">Como funciona</h1>
            <ul class="flex-row flex-between">
                <li>
                    <div class="icone flex-row flex-center">
                        <img src="/img/icons/test.svg">
                    </div>
                    <h2 class="text-center">Faça um cadastro</h2>
                    <p>
                       <?= $data['fraqueado']->texto_faca_cadastro; ?>     
                    </p>
                </li>
                <li>
                    <div class="icone flex-row flex-center">
                        <img src="/img/icons/review.svg">
                    </div>
                    <h2 class="text-center">Avaliaremos o seu perfil</h2>
                    <p>
                        <?= $data['fraqueado']->texto_avaliar_perfil; ?>     
                    </p>
                </li>
                <li>
                    <div class="icone flex-row flex-center">
                        <img src="/img/icons/mailing.svg">
                    </div>
                    <h2 class="text-center">Entraremos em contato</h2>
                    <p>
                        <?= $data['fraqueado']->texto_entrar_contato; ?>
                    </p>
                </li>
            </ul>
        </div>
    </div>
</main>

@stop