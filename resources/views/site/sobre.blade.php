@extends('layouts.site')

@section('title', 'Sobre')

@section('content')

<main id="sobre">
    <div class="breadcrumb">
        <div class="container">
            <h3 class="heading-4 fwhite uppercase weight-700">Sobre</h3>
            <h1 class="display-2 fwhite weight-700">{{ $data['sobre']->titulo }}</h1>
        </div>
    </div>
    <div class="sobre-content" id="sobre-content">
        <div class="container flex-row flex-between">
            <div class="left">
                <h6 class="display-1 weight-700">Trade Off</h1>
                <div class="paragraph-2 text">
                    <?= $data['sobre']->texto ?>
                </div>
            </div>
            <div class="itens right single-item" data-autoplay="false" data-arrows="true" data-itens="1" data-center="true" data-infinite="true" data-loop="true" data-dots="false">
                @foreach($data['galeria'] as $key => $value)
                <div class="item" style="background-image: url({{ $value['imagem'] }});"></div>    
                @endforeach
            </div>
        </div>
    </div>
    <div class="skills" id="skills">
        <div class="container">
            <div class="itens flex-row flex-between">
                <div class="item">
                    <h1 class="paragraph-1">Missão</h1>
                    <p><?= $data['sobre']->missao ?></p>
                </div>
                <div class="item">
                    <h1 class="paragraph-1">Visão</h1>
                    <p><?= $data['sobre']->visao ?></p>
                </div>
                <div class="item">
                    <h1 class="paragraph-1">Valores</h1>
                    <p><?= $data['sobre']->valores ?></p>
                </div>
            </div>
        </div>
    </div>
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
                            <ul>
                                <li data-cidade="Salvador" data-endereco="Av. Tancredo Neves, 620, Ed. Mundo Plaza, Sala 1001 - Salvador - BA" data-mapa="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.8866333294136!2d-38.4608229!3d-12.979102099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7161b191eecab09%3A0xe8294703b63bc36b!2sEmpresarial%20Mundo%20Plaza!5e0!3m2!1spt-BR!2sbr!4v1579142768566!5m2!1spt-BR!2sbr" data-email="suporte@tradeoff.com.br" data-telefone="71 3901-0745" class="active">Salvador</li>
                                <li data-cidade="Lauro de freitas" data-endereco="Condomínio Aero Empresarial, 1883, Av. Santos Dumont, 8º andar, SL 807. Estrada do Coco" data-mapa="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.1002644103055!2d-38.33670228560474!3d-12.901273961894844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x716163ef73e6155%3A0x2f091b949038ad75!2sAero%20Empresarial!5e0!3m2!1spt-BR!2sbr!4v1579142883214!5m2!1spt-BR!2sbr" data-email="suporte@tradeoff.com.br" data-telefone="71 3027-2586">Lauro de freitas</li>
                                <li data-cidade="Feira de Santana" data-endereco="Ed. Multiplace, Shopping Boulevard, 3665, Av. João Durval, 8ª andar, SL 805. São João" data-mapa="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.102814703996!2d-38.950842035614954!3d-12.241317298882029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x714382ae56627b3%3A0x5948a2555c283044!2sBoulevard%20Shopping!5e0!3m2!1spt-BR!2sbr!4v1579143009140!5m2!1spt-BR!2sbr" data-email="suporte@tradeoff.com.br" data-telefone="75 3021-1073">Feira de Santana</li>
                                <li data-cidade="Ilhéus" data-endereco="Ed. Premier Business, 74, Av Osvaldo Cruz, 1º andar, SL 101. Cidade Nova" data-mapa="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3857.63279483426!2d-39.036116585573!3d-14.789701602984069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7390a59eef64bf5%3A0x1e0188098276cec9!2sPremier%20Business%20Center!5e0!3m2!1spt-BR!2sbr!4v1579143095376!5m2!1spt-BR!2sbr" data-email="suporte@tradeoff.com.br" data-telefone="73 99191-7069">Ilhéus</li>
                                <li data-cidade="Vitória da Conquista" data-endereco="d. Empresarial Olivia Flores, 286, Av. Olivia Flores, 1º andar, SL 102. Candeias" data-mapa="ttps://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.380304069433!2d-40.82958668557197!3d-14.859998004623495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7463a50a027c569%3A0x8c3a35dd4a77f13a!2sDEKRA!5e0!3m2!1spt-BR!2sbr!4v1579143183065!5m2!1spt-BR!2sbr" data-email="suporte@tradeoff.com.br" data-telefone="77 3028-6230">Vitória da Conquista</li>
                            </ul>
                        </div>
                        <div class="grupo">
                            <span class="uppercase">Pernambuco</span>
                            <ul>
                                <li data-cidade="Petrolina" data-endereco="Ed. Empresarial Thais Maria, 36, Rua Santa Luzia, 1º andar, SL 103. Centro" data-mapa="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3936.289242131606!2d-40.499221085654625!3d-9.395993500812573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x773706a19b7c4dd%3A0xd41ba570aa32b134!2sRua%20Santa%20Luzia%2C%2036%20-%20Centro%2C%20Petrolina%20-%20PE%2C%2056304-100!5e0!3m2!1spt-BR!2sbr!4v1579143319788!5m2!1spt-BR!2sbr" data-email="suporte@tradeoff.com.br" data-telefone="87 99914-8525">Petrolina</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="mapa">
                        <div class="iframe">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3936.289242131606!2d-40.499221085654625!3d-9.395993500812573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x773706a19b7c4dd%3A0xd41ba570aa32b134!2sRua%20Santa%20Luzia%2C%2036%20-%20Centro%2C%20Petrolina%20-%20PE%2C%2056304-100!5e0!3m2!1spt-BR!2sbr!4v1579143319788!5m2!1spt-BR!2sbr" width="100%" height="342" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                        <div class="caption">
                            <ul class="flex-column">
                                <li>
                                    <i class="material-icons">location_on</i> Av. Tancredo Neves, 620, Ed. Mundo Plaza, Sala 1001 - Salvador - BA
                                </li>
                                <li>
                                    <i class="material-icons">email</i> salvador@tradeoff.com.br
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
    <div class="franqueado-home" id="franqueado-home">
        <div class="container">
            <div class="title">
                <h1 class="heading-1 fwhite text-center">Seja um franqueado</h1>
            </div>
            <div class="text flex-column flex-center">
                <p class="heading-3 fwhite">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
                <a href="/seja-franqueado" class="btn btn-action btn-larger">Me cadastrar</a>
            </div>
        </div>
    </div>
</main>

@stop