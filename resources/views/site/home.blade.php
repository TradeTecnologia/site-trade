@extends('layouts.site')

@section('title', '')

@section('content')

<main id="home">

    <div class="slider" id="inicio">

    	<div class="itens single-item">
            @foreach($data['sliders'] as $key => $value)
            <div class="item" style="background: linear-gradient(58.48deg, #002955 0%, #D18B2F 100%), url('/img/sliders/{{ $value->imagem }}'); background-size: cover !important;">
                <div class="container">
                    <div class="description">
                        @if(!empty($value->titulo))
                        <h1 class="display-1">{{ $value->titulo }}</h1>
                        @endif
                        @if(!empty($value->subtitulo))
                        <h2>{{ $value->subtitulo }}</h2>
                        @endif
                        @if(!empty($value->url))
                        <a href="{{ $value->url }}" target="_blank" rel="noopener" class="btn btn-primary btn-larger">Ver Mais</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="slider-action">
            <div class="content">
                <h1 class="heading-2 fwhite text-center">Faça uma simulação</h1>
                <ul class="flex-row flex-between">
                    <li>
                        <a href="/simulacao/consignado">
                            <div class="image">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="40px" viewBox="0 0 40 40" version="1.1">
                                    <desc></desc>
                                    <g id="Style-guide" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="00-Styleguide" transform="translate(-592.000000, -2818.000000)" fill="#D18B2F" fill-rule="nonzero">
                                            <path d="M610.606217,2845.17791 C610.271313,2845.51213 609.72877,2845.51213 609.393532,2845.17791 C609.059299,2844.84269 609.059299,2844.30017 609.393532,2843.96495 C609.72877,2843.63073 610.271313,2843.63073 610.606217,2843.96495 C610.940785,2844.30017 610.940785,2844.84269 610.606217,2845.17791 Z M606.857143,2826.57128 C606.857143,2821.84508 610.70229,2818 615.428571,2818 C620.154853,2818 624,2821.84508 624,2826.57128 C624,2831.29747 620.154853,2835.14286 615.428571,2835.14286 C610.70229,2835.14286 606.857143,2831.29747 606.857143,2826.57128 Z M622.441724,2826.57128 C622.441724,2822.70458 619.29564,2819.55855 615.428571,2819.55855 C611.561503,2819.55855 608.415418,2822.70458 608.415418,2826.57128 C608.415418,2830.43828 611.561503,2833.5843 615.428571,2833.5843 C619.29564,2833.5843 622.441724,2830.43828 622.441724,2826.57128 Z M600.99901,2857.76888 L592.226741,2848.92645 C591.923912,2848.62107 591.924522,2848.12848 592.227962,2847.82401 L595.944637,2844.09495 C596.508167,2843.53121 597.291493,2843.30645 598.034217,2843.44723 C599.797157,2840.18816 603.082179,2838.4499 606.84434,2838.4499 C608.201575,2838.4499 609.516988,2838.71254 610.756694,2839.23138 L619.468824,2839.23138 C620.427986,2839.23138 621.315714,2839.67816 621.897866,2840.3949 L626.508069,2835.65471 C627.623225,2834.3611 629.583675,2834.2026 630.892372,2835.30596 C632.209312,2836.4197 632.375684,2838.39616 631.263582,2839.71237 C623.765514,2848.67726 624.232274,2848.12726 624.177935,2848.18009 C622.857638,2849.46546 621.116067,2850.17334 619.273451,2850.17334 L608.887214,2850.17334 C608.276672,2850.17334 607.699099,2850.40696 607.260424,2850.83084 L606.445656,2851.6169 C606.728642,2852.44541 606.532963,2853.39852 605.889452,2854.04227 L602.101649,2857.7753 C601.794851,2858.07763 601.301838,2858.07427 600.99901,2857.76888 Z M606.844034,2840.01287 C603.505285,2840.01287 600.821037,2841.53979 599.390536,2844.22443 L605.511221,2850.34711 L606.175186,2849.7061 C606.906004,2848.99975 607.86944,2848.61038 608.887214,2848.61038 L619.273451,2848.61038 C620.693572,2848.61038 622.03707,2848.06954 623.060338,2847.08681 L630.067835,2838.70643 C630.626176,2838.04527 630.542837,2837.05704 629.884672,2836.50032 C629.227119,2835.94574 628.238651,2836.02911 627.681837,2836.68661 C627.654973,2836.71867 627.026114,2837.36304 622.566409,2841.94901 C622.584115,2842.08399 622.593884,2842.22019 622.593884,2842.35761 C622.593884,2844.08151 621.192079,2845.48384 619.468824,2845.48384 L613.094459,2845.48384 C612.663111,2845.48384 612.313271,2845.13418 612.313271,2844.70236 C612.313271,2844.27085 612.663111,2843.92088 613.094459,2843.92088 L619.468824,2843.92088 C620.330604,2843.92088 621.031507,2843.21972 621.031507,2842.35761 C621.031507,2841.48574 620.315951,2840.79465 619.468824,2840.79465 L610.596732,2840.79465 C610.488971,2840.79465 610.382431,2840.77236 610.283523,2840.72899 C609.197674,2840.25381 608.040697,2840.01287 606.844034,2840.01287 Z M597.050329,2845.19953 L593.883141,2848.37706 L601.559793,2856.11522 L604.78895,2852.9328 C605.080178,2852.64147 605.096968,2852.14369 604.784676,2851.83128 C597.764663,2844.81841 598.152968,2845.17205 598.017732,2845.08959 C597.703609,2844.89537 597.307977,2844.94179 597.050329,2845.19953 Z M614.556033,2821.77573 C614.556033,2821.34726 614.893597,2821 615.309809,2821 C615.72602,2821 616.063584,2821.34726 616.063584,2821.77573 L616.063584,2822.67902 C616.408217,2822.7966 616.791143,2823.01204 617.173775,2823.39293 C617.472751,2823.6908 617.480705,2824.18169 617.191154,2824.48956 C616.901603,2824.79712 616.424418,2824.8053 616.125146,2824.50744 C615.858866,2824.24229 615.576973,2824.102 615.309809,2824.102 C614.894187,2824.102 614.556033,2824.45017 614.556033,2824.87772 C614.556033,2825.30528 614.894187,2825.65315 615.309809,2825.65315 C616.556969,2825.65315 617.571429,2826.69674 617.571429,2827.97972 C617.571429,2828.99059 616.941073,2829.85268 616.063584,2830.17297 L616.063584,2831.08172 C616.063584,2831.51019 615.72602,2831.85714 615.309809,2831.85714 C614.893597,2831.85714 614.556033,2831.51019 614.556033,2831.08172 L614.556033,2830.1766 C614.053811,2830.00328 613.579867,2829.65965 613.17691,2829.16664 C612.908862,2828.83878 612.950101,2828.34971 613.268813,2828.07396 C613.587525,2827.79852 614.062942,2827.84064 614.330991,2828.1685 C614.639983,2828.54697 614.987856,2828.75515 615.309809,2828.75515 C615.725431,2828.75515 616.063584,2828.40728 616.063584,2827.97972 C616.063584,2827.55216 615.725431,2827.2043 615.309809,2827.2043 C614.062648,2827.2043 613.048188,2826.1604 613.048188,2824.87772 C613.048188,2823.86655 613.678544,2823.00447 614.556033,2822.68448 L614.556033,2821.77573 Z" id="Combined-Shape-5"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <span class="heading-4 uppercase">Empréstimo consignado</span>
                        </a>
                    </li>

                    <li>
                        <a href="/simulacao/financiamento">
                            <div class="image">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="41px" height="39px" viewBox="0 0 41 39" version="1.1">
                                    <desc></desc>
                                    <g id="Style-guide" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="00-Styleguide" transform="translate(-897.000000, -2819.000000)" fill="#D18B2F" fill-rule="nonzero">
                                            <path d="M937.545789,2838.49262 C937.744724,2838.69156 937.804344,2838.99072 937.696816,2839.25049 C937.589135,2839.51057 937.335447,2839.68 937.054078,2839.68 L932.100618,2839.68 L932.100618,2856.61825 C932.100618,2857.00243 931.789135,2857.31392 931.404952,2857.31392 L904.126778,2857.31392 C903.742595,2857.31392 903.431112,2857.00243 903.431112,2856.61825 L903.431112,2839.68 L898.477044,2839.67954 C898.195675,2839.67939 897.942139,2839.50996 897.834458,2839.25004 C897.726778,2838.99011 897.786397,2838.69095 897.985333,2838.49202 L917.273546,2819.2038 C917.40404,2819.07331 917.580922,2819 917.765409,2819 C917.949895,2819 918.12693,2819.07331 918.257272,2819.2038 L937.545789,2838.49262 Z M931.404952,2838.28882 L935.374838,2838.28882 L917.765561,2820.67954 L900.156435,2838.28852 L904.12693,2838.28882 C904.511112,2838.28897 904.822443,2838.6003 904.822443,2838.98449 L904.822443,2855.92274 L930.709287,2855.92274 L930.709287,2838.98449 C930.709287,2838.6003 931.02077,2838.28882 931.404952,2838.28882 Z M917.0702,2834.85095 C917.0702,2834.46677 917.381682,2834.15544 917.765865,2834.15513 C918.150047,2834.15513 918.46153,2834.46662 918.46153,2834.8508 L918.46153,2835.76319 C920.672785,2836.04243 922.372557,2837.63163 922.372557,2839.54433 C922.372557,2839.92852 922.061074,2840.24 921.676892,2840.24 C921.292709,2840.24 920.981226,2839.92852 920.981226,2839.54433 C920.981226,2838.38327 919.90077,2837.41125 918.46153,2837.16973 L918.46153,2842.02175 C920.672785,2842.30099 922.372557,2843.89019 922.372557,2845.80304 C922.372557,2847.71544 920.672785,2849.30433 918.46153,2849.58357 L918.46153,2850.49658 C918.46153,2850.88076 918.150047,2851.19224 917.765865,2851.19224 C917.381682,2851.19224 917.0702,2850.88076 917.0702,2850.49658 L917.0702,2849.58357 C914.858489,2849.30433 913.15826,2847.71544 913.15826,2845.80304 C913.15826,2845.41886 913.469743,2845.10738 913.853926,2845.10738 C914.238108,2845.10738 914.549591,2845.41886 914.549591,2845.80304 C914.549591,2846.96365 915.630352,2847.93567 917.0702,2848.17703 L917.0702,2843.32578 C914.858489,2843.04654 913.15826,2841.45734 913.15826,2839.54449 C913.15826,2837.63179 914.858489,2836.04243 917.0702,2835.76319 L917.0702,2834.85095 Z M914.549591,2839.54449 C914.549591,2840.70555 915.630504,2841.67802 917.0702,2841.91939 L917.0702,2837.16989 C915.630352,2837.41125 914.549591,2838.38342 914.549591,2839.54449 Z M920.981226,2845.80319 C920.981226,2844.64228 919.90077,2843.66996 918.46153,2843.42844 L918.46153,2848.17703 C919.90077,2847.93567 920.981226,2846.9638 920.981226,2845.80319 Z" id="Combined-Shape-4"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <span class="heading-4 uppercase">Financiamento do imóvel</span>
                        </a>
                    </li>
                </ul>
                <div class="info flex-row flex-center">
                    <i class="material-icons">info_outline</i> Inicie uma simulação escolhendo o tipo
                </div>
            </div>
        </div>
    </div>

    <div class="servicos-home" id="servicos-home">
        <div class="container">
            <div class="title">
                <h1 class="display-2 text-center primary-color">O que podemos fazer por você</h1>
            </div>
            <div class="itens multiple-itens" data-autoplay="true" data-arrows="true" data-itens="4" data-center="false" data-infinite="true" data-loop="true" data-dots="true">

            	@foreach($data['servicos'] as $key => $value)
            	<div class="item card">
                    <div class="icone">
                        <img src="/img/servicos/{{$value->icone}}">
                    </div>
                    <h2>{{ $value->nome }}</h2>
                    <div class="text">
                    	<?= $value->descricao_curta; ?>
                    </div>
                </div>
            	@endforeach
                
            </div>
        </div>
    </div>

    <div class="franqueado-home" id="franqueado-home">
        <div class="container">
            <div class="title" style="margin-top: 6rem;">
                <h1 class="heading-1 fwhite text-center">Seja um franqueado</h1>
            </div>
            <div class="text flex-column flex-center">
                <p class="heading-3 fwhite">
                Invista entre
                R$50 mil a R$80 mil e seja dono de um negócio rentável e com propósito. Entre
                para o time que busca entregar as melhores soluções financeiras e realmente
                ajudar aos nossos clientes. Cadastre-se.
                </p>
                <a href="/seja-franqueado" class="btn btn-action btn-larger">Me cadastrar</a>
            </div>
        </div>
    </div>

    <style type="text/css">
        .franqueado-home .text p span {
            opacity: 1 !important;
            font-family: "Poppins" !important;
            font-size: 20px !important;
            line-height: 33px !important;
            color: #fff !important;
        }
    </style>

    <div class="nossas-unidades" id="nossas-unidades">
        <div class="container">
            <div class="title">
                <h1 class="display-2 primary-color">Nossas unidades</h1>
            </div>
            <div class="item flex-row flex-between">
                <div class="left">
                    <div class="form">
                        <div class="align">
                            <div class="input input-icon input-100">
                                <input type="text" name="pesquisar" placeholder="Pesquisar" class="required">
                                <button type="button">
                                    <i class="material-icons">search</i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="cidades">
                        <div class="grupo">
                            <span class="uppercase">Bahia</span>
                            @if($data['unidades']['BA'])
                            <ul>
                                @foreach($data['unidades']['BA'] as $key => $value)
                                <li data-cidade="{{ $value['cidade'] }}" data-endereco="{{ $value['endereco'] }}" data-mapa="{{ $value['iframe'] }}" data-email="{{ $value['email'] }}" data-telefone="{{ $value['telefone'] }}" class="{{ ($key == 0 ? 'active' : '')}}">{{ $value['cidade'] }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </div>


                        <div class="grupo">
                            <span class="uppercase">Pernambuco</span>
                            @if($data['unidades']['PE'])
                            <ul>
                                @foreach($data['unidades']['PE'] as $key => $value)
                                <li data-cidade="{{ $value['cidade'] }}" data-endereco="{{ $value['endereco'] }}" data-mapa="{{ $value['iframe'] }}" data-email="{{ $value['email'] }}" data-telefone="{{ $value['telefone'] }}">{{ $value['cidade'] }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </div>


                        @if(!empty($data['unidades']['OUTROS']))
                        <div class="grupo">
                            <span class="uppercase">Outras unidades</span>
                            @if($data['unidades']['OUTROS'])
                            <ul>
                                @foreach($data['unidades']['OUTROS'] as $key => $value)
                                <li data-cidade="{{ $value['cidade'] }}" data-endereco="{{ $value['endereco'] }}" data-mapa="{{ $value['iframe'] }}" data-email="{{ $value['email'] }}" data-telefone="{{ $value['telefone'] }}">{{ $value['cidade'] }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                        @endif

                    </div>
                </div>
                <div class="right">
                    <div class="mapa">
                        <div class="iframe">
                           
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.8664336536367!2d-38.45788583554763!3d-12.980393590850154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd26fdc389c655203!2sEdif%C3%ADcio%20Bahia%20Executive%20Center!5e0!3m2!1spt-BR!2sbr!4v1590433986371!5m2!1spt-BR!2sbr"  width="100%" height="342" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                        </div>
                        <div class="caption">
                            <ul class="flex-column">
                                <li>
                                    <i class="material-icons">location_on</i> Rua Cel. Almerindo Rehem, 82, Ed. Bahia Executive Center, Salas 801 a 806 - Caminho das Árvores, Salvador - BA
                                </li>
                                <li>
                                    <i class="material-icons">email</i> contato@tradeoff.com.br
                                </li>
                                <li>
                                    <i class="material-icons">local_phone</i> 71 3901-0745
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="parceiros" id="parceiros">
        <div class="container">
            <div class="title">
                <h1 class="heading-1 weight-700 primary-color">Parceiros</h1>
            </div>
            <div class="itens">
                @foreach($data['parceiros'] as $key => $value)
                <div class="item">
                    <a href="{{ (!empty($value->url) ? $value->url : 'javascript:void(0)') }}" title="{{ $value->nome }}" target="_blank" rel="noopener">
                        <img src="/img/parceiros/{{ $value->imagem }}">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="newsletter" id="newsletter">
        <div class="container">
            <div class="content flex-row flex-between">
                <div class="left">
                    <h1 class="heading-1 fwhite">Fique por dentro</h1>
                    <h2 class="display-3 fwhite">Assina e receba na nossa newsletter</h2>
                </div>
                <div class="right">
                    <div class="form">
                        <form class="form-submit flex-row" method="post" onsubmit="return false;" action="/newsletter">
                            <div class="align">
                                <input type="email" name="email" placeholder="seuemail@email.com.br" class="input input-100 required">
                            </div>
                            <div class="align">
                                <button class="btn btn-transparent btn-medium send" data-button-action="Cadastrando...">Quero receber</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact" id="contato">
        <div class="container">
            <div class="content card">
                <div class="title">
                    <h1 class="display-1 primary-color text-center">Fale conosco</h1>
                </div>
                <div class="contact-align flex-row flex-between">
                    <div class="left">
                        <h1 class="heading-2">Dúvidas e sugestões?</h1>
                        <h2 class="display-3">Entre em contato que responderemos.</h2>
                        <div class="select-group">
                            <span class="fcontent-2">Escolha uma unidade</span>
                            <div class="select select-medium">
                                <div class="selected flex-row">
                                    <input type="text" name="cidade" placeholder="Selecione" class="cidade input input-show required">
                                    <input type="hidden" name="cidade" class="input input-hidden required">
                                    <div class="toggle flex-row flex-center gradient-2">
                                        <i class="material-icons">keyboard_arrow_down</i>
                                    </div>
                                </div>
                                <div class="options">
                                    <ul>
                                        @foreach($data['unidades_contato'] as $key => $value)
                                        <li>
                                            <input type="radio" id="select1-value-{{$key}}" class="contato-cidade" data-endereco="{{$value->endereco}}" data-email="{{$value->email}}" data-telefone="{{$value->telefone}}" data-value="{{$value->ciade}}" value="{{$value->cidade}}">
                                            <label for="select1-value-{{$key}}" class="content-1">{{$value->cidade}}</label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <address>
                                <ul>
                                    <li class="flex-row">
                                        <i class="material-icons">location_on</i> <?= $info_geral['endereco']; ?>
                                    </li>
                                    <li class="flex-row">
                                        <i class="material-icons">email</i> <?= $info_geral['email']; ?>
                                    </li>
                                    <li class="flex-row">
                                        <i class="material-icons">local_phone</i> <?= $info_geral['telefone']; ?>
                                    </li>
                                </ul>
                            </address>
                        </div>
                    </div>
                    <div class="right">
                        <form method="post" onsubmit="return false;" action="/contato" class="form-submit">
							<input type="hidden" name="assunto" value="Contato - Formulário Fale Conosco">
                            <div class="align">
                                <span class="fcontent-2">Nome</span>
                                <input type="text" name="nome" placeholder="Seu Nome" maxlength="100" class="input input-100 required">
                            </div>
                            <div class="align">
                                <span class="fcontent-2">Seu e-mail</span>
                                <input type="email" name="email" placeholder="email@email.com" maxlength="150" class="input input-100 required">
                            </div>
                            <div class="align">
                                <span class="fcontent-2">Seu telefone (Whatsapp)</span>
                                <input type="text" name="whatsapp" placeholder="(00) 00000-0000" class="input input-100 numero required" maxlength="150">
                            </div>
                            <div class="align">
                                <span class="fcontent-2">Sua mensagem</span>
                                <textarea name="mensagem" placeholder="Digite aqui..." maxlength="500" class="input textarea input-100 required"></textarea>
                            </div>
                            <div class="align flex-row flex-end">
                                <button type="submit" class="btn btn-primary send" data-button-action="Enviando...">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@stop