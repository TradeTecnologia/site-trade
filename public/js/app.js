jQuery(function($){
    
    var MANGUE = window.LOAD || {};

    MANGUE.effects = function(){

        $('body').on('click', '.alert i', function(){
            $('.alert').fadeOut().remove();
        });

        $('.tabs ul li').on('click', function(){
            $('.tabs ul li').removeClass('active');
            $(this).toggleClass('active');
            $('.tabs-content .tab').removeClass('active');
            tab = $(this).data('tab');
            $('.tabs-content .tab-'+tab).addClass('active');
        });

        $('.overlay').on('click', function(){
            $(this).fadeOut();
            $('.account a').removeClass('active');
            $('.account-logged a').removeClass('active');
            $('.modal').fadeOut().remove();
            $('.general').removeClass('open');
            $('.nav-mobile').removeClass('open');
        });

        $('body').on('click', '.modal-close', function(){
            $('.overlay').trigger('click');
        });

        $('.menu-mobile').on('click', function(){
            $('.nav-mobile').addClass('open');
            $('.general').addClass('open');
            $('.overlay').fadeIn();
        });

        $('.open-submenu').on('click', function(){
            $(this).children('ul').toggleClass('opened');
        });

        $('.subtipo-consignado').on('click', function(){
            e = $(this).val();
            
            if (e == 1) {
                $('.texto-valor-desejado').text('Digite o valor que deseja');
                $('.lista-parcelas-consiginado').css({'display': 'block'});
                $('.info-cartao').css({'display':'none'});
                $('.valor-liberado').css({'display':'none'});
                var parcelas = $('.quantidade_parcelas:checked').val();
                var juros_ajustado = (1 + ('2.23' / '100'));
                var valor_elevado = Math.pow(juros_ajustado, parcelas);
                var valor_solicitado = parseFloat($('.valor').val()) * 1000;
                var retorno = ( ( valor_solicitado * ('2.23' / 100) ) / (1 - ( 1 / Math.abs(valor_elevado) ) ));
                $('.retorno').text('R$ '+retorno.toFixed(2));
            }
            if (e == 2) {
                $('.texto-valor-desejado').text('Digite o valor do salário / aposentadoria');
                $('.lista-parcelas-consiginado').css({'display': 'none'});
                $('.info-cartao').css({'display':'block'});
                $('.valor-liberado').css({'display':'block'});
                $("#quantidade_parcelas_6").prop("checked", true);

                var parcelas = 72;
                var valor_solicitado = parseFloat($('.valor').val()) * 1000;
                var valor_elevado = (1 - (1 / Math.pow(1.037, 72))) / 0.037;
                
                var valor_liberado = valor_elevado * (valor_solicitado * 0.05); //jogar formula aqui

                console.log(valor_liberado);

                $('.retorno').text('R$ '+(valor_solicitado * 0.05).toFixed(2));
                $('#retorno_valor_liberado').text('R$ '+(valor_liberado).toFixed(2));
            }
        });

        $('.quantidade_parcelas').on('change', function(){
            e = $('.subtipo-consignado').val();
            if (e == 1) {
                $('.texto-valor-desejado').text('Digite o valor que deseja');
                $('.lista-parcelas-consiginado').css({'display': 'block'});
                $('.info-cartao').css({'display':'none'});
                var parcelas = $('.quantidade_parcelas:checked').val();
                var juros_ajustado = (1 + ('2.23' / '100'));
                var valor_elevado = Math.pow(juros_ajustado, parcelas);
                var valor_solicitado = parseFloat($('.valor').val()) * 1000;
                var retorno = ( ( valor_solicitado * ('2.23' / 100) ) / (1 - ( 1 / Math.abs(valor_elevado) ) ));
                $('.retorno').text('R$ '+retorno.toFixed(2));
            }
        });

        $('.valor').on('change', function(){
            e = $('.subtipo-consignado').val();
            let tipo = $('input[name="subtipo"]:checked').val();
            
            if (tipo == 1) {
                $('.texto-valor-desejado').text('Digite o valor que deseja');
                $('.lista-parcelas-consiginado').css({'display': 'block'});
                var parcelas = $('.quantidade_parcelas:checked').val();
                var juros_ajustado = (1 + ('2.23' / '100'));
                var valor_elevado = Math.pow(juros_ajustado, parcelas);
                var valor_solicitado = parseFloat($('.valor').val()) * 1000;
                var retorno = ( ( valor_solicitado * ('2.23' / 100) ) / (1 - ( 1 / Math.abs(valor_elevado) ) ));
                $('.retorno').text('R$ '+retorno.toFixed(2));
            }

            if (tipo == 2) {
                $('.texto-valor-desejado').text('Digite o valor do salário / aposentadoria');
                $('.lista-parcelas-consiginado').css({'display': 'none'});
                $('.info-cartao').css({'display':'block'});
                $("#quantidade_parcelas_6").prop("checked", true);

                var parcelas = 72;
                var valor_solicitado = parseFloat($('.valor').val()) * 1000;
                var valor_elevado = (1 - (1 / Math.pow(1.037, 72))) / 0.037;
                
                var valor_liberado = valor_elevado * (valor_solicitado * 0.05); //jogar formula aqui

                $('.retorno').text('R$ '+(valor_solicitado * 0.05).toFixed(2));
                $('#retorno_valor_liberado').text('R$ '+(valor_liberado).toFixed(2));
            }
        });

    }

    MANGUE.scrollToDiv = function(){
        
        /*$(".scrollToDiv").click(function(e) {
            e.preventDefault();
            var href = $(this).attr('href');

            $('html,body').animate({
                scrollTop: $(href).offset().top
            }, 'slow');
        });*/

        $(window).scroll(function() {
            if ($(this).scrollTop() > 115) {
                $('#header').addClass('active');
            } else {
                $('#header').removeClass('active');
            }
        });


        var topMenu = jQuery("#header"),
            offset = 115,
            topMenuHeight = topMenu.outerHeight()+offset,
            // All list items
            menuItems =  topMenu.find('a[href*="#"]'),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function(){
              var href = jQuery(this).attr("href"),
              id = href.substring(href.indexOf('#')),
              item = jQuery(id);
              //console.log(item)
              if (item.length) { return item; }
            });

        // so we can get a fancy scroll animation
        menuItems.click(function(e){
          var href = jQuery(this).attr("href"),
            id = href.substring(href.indexOf('#'));
              offsetTop = href === "#" ? 0 : jQuery(id).offset().top-topMenuHeight+1;
          $('html, body').stop().animate({ 
              scrollTop: offsetTop
          }, 1800);
          e.preventDefault();
        });

        // Bind to scroll
        $(window).scroll(function(){
           // Get container scroll position
           var fromTop = jQuery(this).scrollTop()+topMenuHeight;

           // Get id of current scroll item
           var cur = scrollItems.map(function(){
             if (jQuery(this).offset().top < fromTop)
               return this;
           });

           // Get the id of the current element
           cur = cur[cur.length-1];
           var id = cur && cur.length ? cur[0].id : "";              

           menuItems.removeClass("active");
           if(id){
                menuItems.filter("[href*='#"+id+"']").addClass("active");
           }

        });
    
    }

    MANGUE.select = function(){

        $('body').on('click', '.select .selected', function(){
            var text = $(this).find('i').text();
            $(this).find('i').text(text == "keyboard_arrow_down" ? "keyboard_arrow_up" : "keyboard_arrow_down");
            $(this).parent().find('.options').toggle();
        });

        $('body').on('click', '.select .options input', function(){
            $(this).parent().parent().parent().parent().children().children('.input-show').val($(this).val());
            $(this).parent().parent().parent().parent().children().children('.input-hidden').val($(this).data('value'));
            $(this).parent().parent().parent().parent().children().children('.input-hidden').trigger('change');
            $(this).parent().parent().parent().parent().children().children('.toggle').trigger('click');
            $(this).parent().parent().parent().parent().children().children('input').trigger('keyup');
        });

        $('.select .selected input').on('keyup', function(){
            if($(this).val() <= 0 || $(this).val() == 'e') {
                $(this).val(1);
            }
        });

        $(document).mouseup(function(e) {
            var container = $('.select');
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.find('.options').hide();
                container.find('i').text("keyboard_arrow_down");
            }
        });

    }

    MANGUE.masks = function(){

        var FormataNumero = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },

        Options = {
            onKeyPress: function(val, e, field, options) {
                field.mask(FormataNumero.apply({}, arguments), options);
            }
        };

        $('.numero').mask(FormataNumero, Options);

        $('.preco').mask('#.##0,00', {reverse: true});

    }

    MANGUE.fancybox = function(){
        $(".fancybox").fancybox();
    }

    MANGUE.buscacep = function(){

        $('.cep i').on('click', function(){

            var cep = $(this).parent().parent().find('input').val().replace(/[^0-9]/, "");

            if(cep.length != 8){
                $('body').append(
                    '<div class="alert">'+
                        '<div class="alert-warning"></div>'+
                        '<h1>CEP incompleto</h1>'+
                        '<i class="material-icons">close</i>'+
                    '</div>'
                );
                setTimeout(function (){
                    $('.alert').fadeOut().remove();
                }, 2000);
                
                return false;
            }    
            
            var url = "https://viacep.com.br/ws/"+cep+"/json/";

            $.getJSON(url, function(dadosRetorno){
                try{
                    $(".logradouro").val(dadosRetorno.logradouro);
                    $(".bairro").val(dadosRetorno.bairro);
                    $(".cidade").val(dadosRetorno.localidade);
                    $(".estado").val(dadosRetorno.uf);
                }catch(ex){}
            });

        });

    }

    MANGUE.slick = function(){

        // miniaturas 

        
        $('.miniaturas ul').slick({
            slidesToSwow: 4,
            slidesToScroll: 4,
            dots: false,
            arrows: false,
            focusOnSelect: false,
            loop: true,
            autoplay: false,
            vertical: true,
            verticalSwiping: true,
            arrows: false,
            adaptiveHeight: false,
            //prevArrow: $('.marcas .titulo .arrows .prev'),
            //nextArrow: $('.marcas .titulo .arrows .next'),
            infinite: false,
            responsive: [
                {
                  breakpoint: 1920,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    infinite: false,
                  }
                },
                {
                  breakpoint: 1280,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    infinite: false,
                  }
                },
                {
                  breakpoint: 767,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 3,
                    infinite: false,
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                  }
                }
            ]
        });

        $('.multiple-itens').each( function() {

            var slick = $(this),
            autoplay = $(this).data('autoplay'),
            arrows = $(this).data('arrows'),
            dots = $(this).data('dots'),
            center = $(this).data('center'),
            infinite = $(this).data('infinite'),
            loop = $(this).data('loop'),
            itens = $(this).data('itens');

            slick.slick({
                slidesToSwow: itens,
                slidesToScroll: itens,
                dots: dots,
                arrows: arrows,
                focusOnSelect: false,
                loop: loop,
                autoplay: autoplay,
                center: center,
                //prevArrow: $('.paginate .arrows .prev'),
                //nextArrow: $('.paginate .arrows .next'),
                infinite: infinite,
                responsive: [
                {
                    breakpoint: 1920,
                    settings: {
                        slidesToShow: itens,
                        slidesToScroll: itens,
                        infinite: infinite
                    }
                },
                {
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: itens,
                        slidesToScroll: itens,
                        infinite: infinite
                    }
                },
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: infinite
                    }
                },
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: infinite
                    }
                },
                {
                    breakpoint: 560,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true
                    }
                }
                ]
            });

        });


        

        /*$('.single-item').each( function() {

            console.log($(this));

            var slick = $(this),
            autoplay = $('.single-item').data('autoplay'),
            arrows = $('.single-item').data('arrows'),
            dots = $('.single-item').data('dots'),
            center = $('.single-item').data('center'),
            infinite = $('.single-item').data('infinite'),
            speed = $(this).data('speed'),
            autoplaySpeed = $('.single-item').data('autoplaySpeed'),
            loop = $('.single-item').data('loop');

            $('.single-item').slick({
                slidesToSwow: 1,
                slidesToScroll: 1,
                dots: dots,
                arrows: arrows,
                focusOnSelect: false,
                loop: loop,
                autoplay: autoplay,
                speed: speed,
                autoplaySpeed: autoplaySpeed,
                center: center,
                //appendDots: //$('.dots'),
                //prevArrow: $('.multiple-itens .paginate .arrows .prev'),
                //nextArrow: $('.multiple-itens .paginate .arrows .next'),
                infinite: infinite
            });
        });*/

        $(".single-item").not('.slick-initialized').slick({
            slidesToSwow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            focusOnSelect: false,
            loop: true,
            autoplay: true,
            speed: 2000,
            autoplaySpeed: 4000,
            center: true,
            infinite: true
        });
    


        $('.slider-for').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          fade: true,
          asNavFor: '.slider-nav',
          responsive: true
        });

        $('.slider-nav').slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          asNavFor: '.slider-for',
          centerPadding: '0',
          dots: false,
          centerMode: true,
          focusOnSelect: true,
          responsive: true
        });
    
    }
 
    MANGUE.validate = function(){

        jQuery.validator.addMethod("alphanumeric", function(value, element) {
            return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);
        }, 'Só são permitidos letras ou números');

        $('.form-submit').each(function(){
            $(this).validate();
        });

    }

    MANGUE.mapa = function(){
        
        $('.nossas-unidades .cidades .grupo ul li').on('click', function(e){
            var cidade = $(this).data('cidade');
            var endereco = $(this).data('endereco');
            var mapa = $(this).data('mapa');
            var telefone = $(this).data('telefone');
            var email = $(this).data('email');
            $('.nossas-unidades .mapa .caption ul li:nth-child(1)').html('<i class="material-icons">location_on</i> '+endereco);
            $('.nossas-unidades .mapa .caption ul li:nth-child(2)').html('<i class="material-icons">email</i> '+email);
            $('.nossas-unidades .mapa .caption ul li:nth-child(3)').html('<i class="material-icons">local_phone</i> '+telefone);
            $('.nossas-unidades .mapa .iframe iframe').attr('src', mapa);
            $('.nossas-unidades .cidades .grupo ul li').removeClass('active');
            $(this).addClass('active');
        });

        $('.select-group .select .contato-cidade').on('click', function(e){
            var endereco = $(this).data('endereco');
            var telefone = $(this).data('telefone');
            var email = $(this).data('email');
            $('.contact .left address ul li:nth-child(1)').html('<i class="material-icons">location_on</i> '+endereco);
            $('.contact .left address ul li:nth-child(2)').html('<i class="material-icons">email</i> '+email);
            $('.contact .left address ul li:nth-child(3)').html('<i class="material-icons">local_phone</i> '+telefone);
        });

    }

    MANGUE.steps = function(){

        $(".steps form .btn-step").on('click', function(e){

            e.preventDefault();

            window.retorno = false;

            var action = $(this).data('action');

            if(action == "next"){

                var current = $(this).data('current');

                $('.step-'+current+ ' .required').map(function(e){

                    if ($(this).val() == "") {
                        window.retorno = true;
                        $(this).addClass('error');
                    } else {
                        $(this).removeClass('error');
                    }

                });

                if (window.retorno == true) {
                    return false;
                }

            }

            /*$('html,body').animate({
                scrollTop: $('#header').offset().top - 100
            }, 'slow');*/

            next_step = $(this).data('step');

            if (next_step == 3) {
                $('.steps .progress ul li').addClass('active');
            } else if(next_step == 2){
                $('.steps .progress ul li:nth-child(3)').removeClass('active');
                $('.steps .progress ul li:nth-child(2)').addClass('active');
                $('.steps .progress ul li:nth-child(1)').addClass('active');
            } else if(next_step == 1){
                $('.steps .progress ul li:nth-child(3)').removeClass('active');
                $('.steps .progress ul li:nth-child(2)').removeClass('active');
                $('.steps .progress ul li:nth-child(1)').addClass('active');
            }

            var progress = 100 * next_step / 9;

            $('.progress').css('width', progress+'%');

            $('.step').removeClass('active');
            $('.step-'+next_step).addClass('active');

        });

        $('.step-form .required').on('keyup', function(){
            $(this).removeClass('error');
            //$(this).parent().children('.label-content').removeClass('error');
        });

        $('.step-form .required').on('change', function(){
            $(this).removeClass('error');
            //$(this).parent().children('.label-content').removeClass('error');
        });

        $('.ponto_comercial').on('click', function(){
            var e = $(this).val();
            if (e == "s") {
                $('.ponto_comercial_caracteristicas').removeClass('disabled');
                $('.ponto_comercial_caracteristicas').find('textarea').removeAttr('disabled');
            } else {
                $('.ponto_comercial_caracteristicas').addClass('disabled');
                $('.ponto_comercial_caracteristicas').find('textarea').attr('disabled', 'true').text('');
            }
        });
    
    }

    MANGUE.form_send = function(){

        $('body').on('submit', '.form-submit', function(e){

            e.preventDefault();

            var dados = new FormData($(this)[0]); 

            var button = $(this).find('.send');
            var button_text = $(this).find('.send').text();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: $(this)[0].method,
                url: $(this)[0].action,
                data: dados,
                contentType: false,
                processData: false,

                beforeSend: function(data){
                    button.text(button.data('button-action'));
                },

                success: function(data) {

                    if (data.codigo == 200 ) {
                        if(data.limpar_campos != false){
                            $('.form-submit input').val('');
                            $('.form-submit textarea').val('');
                        }
                    }

                }, 

                complete: function(data) {

                    retorno = data.responseJSON;

                    if (retorno.codigo == undefined) {
                        retorno.status = "error";
                        retorno.mensagem = "Ocorreu um erro interno, informe o administrador.";
                    }

                    if (retorno.redirect != undefined) {
                        window.location.href = retorno.redirect;
                        return false;
                    }

                    if (retorno.response != undefined) {
                        $('.form-submit input').val('');
                        $('.response').html(retorno.response);
                        button.text(button_text);
                        return false;
                    }

                    if (retorno.modal != undefined) {
                        $('.form-submit input').val('');
                        $('.modal').fadeOut().remove();
                        $("body").append(retorno.modal);
                        $('.overlay').show();
                        button.text(button_text);
                        return false;
                    }

                    if (retorno.call_modal != undefined) {
                        $('.'+retorno.call_modal.c_antiga+' span').text(retorno.call_modal.texto);
                        $('.'+retorno.call_modal.c_antiga).addClass(retorno.call_modal.c_nova).removeClass(retorno.call_modal.c_antiga);
                        if (retorno.call_modal.forcar_clique == true) {
                            $('.modal').fadeOut().remove();
                            $('.overlay').fadeOut();
                            $('.'+retorno.call_modal.c_nova).removeClass('active').trigger('click');
                        }
                        return false;
                    }
                    
                    button.text(button_text);

                    if (retorno.status == 'success') {
                        status_icon = 'check_circle';
                    } else if(retorno.status == 'error'){
                        status_icon = 'error';
                    } else if(retorno.status == 'warning'){
                        status_icon = 'warning';
                    } else if(retorno.status == 'info'){
                        status_icon = 'info';
                    }

                    $('body').append(
                        '<div class="alert">'+
                            '<div class="status">'+
                                '<div class="alert-'+retorno.status+'"></div>'+
                                '<i class="material-icons">'+status_icon+'</i>'+
                            '</div>'+
                            '<h1>'+retorno.mensagem+'</h1>'+
                            '<i class="material-icons">close</i>'+
                        '</div>'
                    );

                    setTimeout(function (){
                        $('.alert').fadeOut().remove();
                    }, 10000);

                },

                /*error: function(data) {

                    status = "warning";
                    mensagem = "Ocorreu um erro interno, informe o administrador.";

                    $('body').append(
                        '<div class="alert">'+
                            '<div class="alert-'+status+'"></div>'+
                            '<h1>'+mensagem+'</h1>'+
                            '<i class="material-icons">close</i>'+
                        '</div>'
                    );

                    setTimeout(function (){
                        //$('.alert').fadeOut().remove();
                    }, 5000);

                }*/

            });

            return false;

        });

        $('body').on('click', '.click-action', function(e){

            e.preventDefault();

            //var dados = new FormData($(this)[0]); 

            var button = $(this);
            var button_text = $(this).text();

            var form = $('.click-action-form').serialize();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: $(this).data('action'),
                data: form,
                beforeSend: function(data){
                    button.text(button.data('button-action'));
                },

                success: function(data) {

                    if (data.codigo == 200 ) {
                    }

                }, 

                complete: function(data) {

                    retorno = data.responseJSON;

                    if (retorno.codigo == undefined) {
                        retorno.status = "error";
                        retorno.mensagem = "Ocorreu um erro interno, informe o administrador.";
                    }

                    if (retorno.redirect != undefined) {
                        window.location.href = retorno.redirect;
                        return false;
                    }

                    if (retorno.response != undefined) {
                        $('.form-submit input').val('');
                        $('.response').html(retorno.response);
                        button.text(button_text);
                        return false;
                    }

                    if (retorno.modal != undefined) {
                        $('.form-submit input').val('');
                        $("body").append(retorno.modal);
                        $('.overlay').show();
                        button.text(button_text);
                        return false;
                    }

                    if (retorno.call_modal != undefined) {
                        $('.'+retorno.call_modal.c_antiga+' span').text(retorno.call_modal.texto);
                        $('.'+retorno.call_modal.c_antiga).addClass(retorno.call_modal.c_nova).removeClass(retorno.call_modal.c_antiga);
                        if (retorno.call_modal.forcar_clique == true) {
                            $('.modal').fadeOut().remove();
                            $('.overlay').fadeOut();
                            $('.'+retorno.call_modal.c_nova).removeClass('active').trigger('click');
                        }
                        return false;
                    }
                    
                    button.text(button_text);

                    if (retorno.status == 'success') {
                        status_icon = 'check_circle';
                    } else if(retorno.status == 'error'){
                        status_icon = 'error';
                    } else if(retorno.status == 'warning'){
                        status_icon = 'warning';
                    } else if(retorno.status == 'info'){
                        status_icon = 'info';
                    }

                    $('body').append(
                        '<div class="alert">'+
                            '<div class="status">'+
                                '<div class="alert-'+retorno.status+'"></div>'+
                                '<i class="material-icons">'+status_icon+'</i>'+
                            '</div>'+
                            '<h1>'+retorno.mensagem+'</h1>'+
                            '<i class="material-icons">close</i>'+
                        '</div>'
                    );

                    setTimeout(function (){
                        $('.alert').fadeOut().remove();
                    }, 10000);

                },

            });

            return false;

        });

    }
		
	MANGUE.slider_depoimentos = function(){
		
		$('#box-depoimentos').carousel({
		  // the number of images to display
		  num: 20, 
		  // max width of the active image
		  maxWidth: 500,
		  // min width of the active image
		  maxHeight: 363, 
		  // enable auto play
		  autoPlay: true,
		  // autoplay interval
		  showTime: 5000,
		  // animation speed
		  animationTime: 500,
		  // 0.0 - 1.0
		  scale: 0.8,
		  // the distance between images
		  distance: 50
		});
		
	}

    /* ==================================================
    Init
    ================================================== */

    $(document).ready(function(){

        $('div[onload]').trigger('onload');

        MANGUE.effects();
        MANGUE.scrollToDiv();
        MANGUE.select();
        MANGUE.masks();
        MANGUE.slick();
        MANGUE.validate();
        MANGUE.steps();
        MANGUE.form_send();
        MANGUE.buscacep();
        MANGUE.mapa();
		$('.info-cartao').css({'display':'none'});
        
    });    
});