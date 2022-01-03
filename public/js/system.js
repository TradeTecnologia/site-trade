jQuery(function($){
    
    var MANGUE = window.LOAD || {};

    MANGUE.effects = function(){

        $(".anchor").click(function() {
            window.location = $(this).data("href");
        });

        $('body').on('click', '.alert i', function(){
            $('.alert').fadeOut().remove();
        });

        $('.help ul .block').on('click', function(){
            $(this).toggleClass('active');
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

        $('#checkout .step-3 .radiobox input').on('click', function(){
            if($(this).val() == "cartao"){
                $('#checkout').find('.creditcard').show();
                $('#checkout').find('.boleto').hide();
            } else {
                $('#checkout').find('.creditcard').hide();
                $('#checkout').find('.boleto').show();
            }
        });

        $('body').on('click', '.modal-close', function(){
            $('.overlay').trigger('click');
        });

    }

    MANGUE.scrollToDiv = function(){
        
        $(".scrollToDiv").click(function(e) {
            e.preventDefault();
            var href = $(this).attr('href');

            $('html,body').animate({
                scrollTop: $(href).offset().top
            }, 'slow');
        });
    
    }
    
    MANGUE.select = function(){

        $('body').on('click', '.select .selected', function(){
            var text = $(this).find('i').text();
            $(this).find('i').text(text == "arrow_drop_down" ? "arrow_drop_up" : "arrow_drop_down");
            $(this).parent().find('.options').toggle();
        });

        $('body').on('click', '.select .options input', function(){
            $(this).parent().parent().parent().parent().children().children('.input-show').val($(this).val());
            $(this).parent().parent().parent().parent().children().children('.input-hidden').val($(this).data('value'));
            $(this).parent().parent().parent().parent().children().children('.input-hidden').trigger('change');
            $(this).parent().parent().parent().parent().children().children('.toggle').trigger('click');
            $(this).parent().parent().parent().parent().children().children('input').trigger('keyup');
        });

        $('body').on('keyup', '.select .selected input', function(){
            if($(this).val() <= 0 || $(this).val() == 'e') {
                $(this).val(1);
            }
            if($(this).val() != ""){
                $(this).removeClass('error');
            }
        });

        $('body').on('keyup', 'input[type=number]', function(){
            if($(this).data('min') != undefined){
                if($(this).val() <= $(this).data('min') || $(this).val() == 'e') {
                    $(this).val($(this).data('min'));
                }
            } else {
                if($(this).val() < 0 || $(this).val() == 'e') {
                    $(this).val(1);
                }
            }
        });

        $('body').on('change', 'input[type=number]', function(){
            if($(this).data('min') != undefined){
                if($(this).val() <= $(this).data('min') || $(this).val() == 'e') {
                    $(this).val($(this).data('min'));
                }
            } else {
                if($(this).val() < 0 || $(this).val() == 'e') {
                    $(this).val(1);
                }
            }
        });

        $(document).mouseup(function(e) {
            var container = $('.select');
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.find('.options').hide();
                container.find('i').text("arrow_drop_down");
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

    MANGUE.datepicker = function(){

        $('.datepicker').datepicker({
            dateFormat: 'dd/mm/yy',
            dayNames: ['Domingo','Segunda','TerÃ§a','Quarta','Quinta','Sexta','SÃ¡bado'],
            dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
            dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','SÃ¡b','Dom'],
            monthNames: ['Janeiro','Fevereiro','MarÃ§o','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
            monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
            nextText: 'PrÃ³ximo',
            prevText: 'Anterior'
        });

    }
    
    MANGUE.validate = function(){

        jQuery.validator.addMethod("alphanumeric", function(value, element) {
            return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);
        }, 'Só são permitidos letra ou números');

        $('.form-submit').each(function(){
            $(this).validate();
        });

    }


    MANGUE.datatable = function(){

        $(document).ready( function () {
            
            var table = $('.datatable').DataTable({
                "order": [],
                "retrieve": true,
                "searching": true,
                "lengthMenu": false,
                "info": false,
                "displayLength": 10,
                "responsive": true,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ Itens por página",
                    "zeroRecords": "Nao há registros",
                    "info": "Página _PAGE_ de _PAGES_",
                    "infoEmpty": "Nao há registros",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": "Filtrar",
                    "paginate": {
                        "first":  "Primeiro",
                        "last":  "Último",
                        "next": "<i class='material-icons'>keyboard_arrow_right</i>",
                        "previous": "<i class='material-icons'>keyboard_arrow_left</i>"
                    }
                },
                "fnDrawCallback": function(oSettings) {
                    if (oSettings._iDisplayLength > oSettings.fnRecordsDisplay()) {
                        $(oSettings.nTableWrapper).find('.dataTables_paginate').hide();
                    }
                }
            });

            $('.search-box input').on('keyup', function () {
                table.search( this.value ).draw();
            });

            $(".pagination").append($(".dataTables_paginate"));

        });

        $("body").on('click', '.anchor-fake', function() {
            window.location = $(this).data("href");
        });

        $("body").on('change', '.table .checkbox input', function(){
            $(this).parent().parent().parent().toggleClass('active');
            
            var checkbox_array = [];
            
            $('.table .checkbox input:checked').each(function(){
                checkbox_array.push($(this).val());
            });

            if(checkbox_array != ""){
                $('.footer .actions button').addClass('active');
            } else {
                $('.footer .actions button').removeClass('active');
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
                    }, 5000);

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
                    }, 5000);

                },

            });

            return false;

        });

    }

    MANGUE.open_modal = function(){

        $('body').on('click', '.call-modal', function(e){

            view = $(this).data('modal');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: '/modal',
                data: {view: view},
                beforeSend: function(data){
                },

                success: function(data) {

                }, 

                complete: function(data) {

                    retorno = data.responseJSON;

                    if (retorno.status == undefined) {
                        retorno.status = "error";
                        retorno.mensagem = "Ocorreu um erro interno, informe o administrador.";
                    }

                    if (retorno.status == 200) {
                        $("body").append(retorno.modal);
                        $('.overlay').show();
                        return false;
                    }

                },

            });

            return false;

        });

    }

    /* ==================================================
    Init
    ================================================== */

    $(document).ready(function(){

        $('div[onload]').trigger('onload');

        MANGUE.effects();
        MANGUE.select();
        MANGUE.masks();
        MANGUE.validate();
        MANGUE.form_send();
        MANGUE.open_modal();
        
        
    });    

});