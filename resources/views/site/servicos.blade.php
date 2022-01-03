@extends('layouts.site')

@section('title', 'Serviços')

@section('content')

<main id="servicos">
    <div class="breadcrumb">
        <div class="container">
            <h3 class="heading-4 fwhite uppercase weight-700">Nossos serviços</h3>
            <h1 class="display-2 fwhite weight-700">O que podemos fazer por você</h1>
        </div>
    </div>
    <div class="servicos-itens">
        <div class="container">
            <div class="itens">
                
                @foreach($data as $key => $value)

                <div class="item">
                    <div class="image"><img src="/img/servicos/{{$value->icone}}"></div>
                    <h2>{{ $value->nome }}</h2>
                    <div class="text">
                        <?= $value->descricao_curta; ?>
                    </div>
                </div>   

                @endforeach

            </div>
        </div>
    </div>
</main>

@stop