<?php

Route::get('/inicio', function () {
    return redirect('/');
});

Route::get('/', 'SiteController@home');
Route::get('/servicos', 'SiteController@servicos');
Route::get('/sobre', 'SiteController@sobre');
Route::post('/contato', 'SiteController@contato_enviar');
Route::get('/simulacao/consignado', 'SiteController@simulacao_consignado');
Route::post('/simulacao/emprestimo', 'SiteController@simulacao_consignado_acao');
Route::get('/simulacao/financiamento', 'SiteController@simulacao_financiamento');
Route::post('/simulacao/financiamento/acao', 'SiteController@simulacao_financiamento_acao');
Route::get('/seja-franqueado', 'SiteController@seja_franqueado');
Route::get('/seja-franqueado/pre-cadastro', 'SiteController@seja_franqueado_pre_cadastro');
Route::post('/seja-franqueado/pre-cadastro', 'SiteController@seja_franqueado_pre_cadastro_acao');
Route::post('/seja-franqueado', 'SiteController@seja_franqueado_acao');

Route::get('/central-franqueado', function() {

	return redirect('/sistema');

});



Route::post('/newsletter', 'ContatoController@assinar_newsletter');
Route::post('/contato', 'ContatoController@contato_enviar');

Route::get('/seja-franqueado/plano-negocios/{filename}', 'SiteController@baixar_arquivo')->where('filename', '^[^/]+$');


// SISTEMA

/* rotas de login / logout / recuperação / reset de senha e  confirmação e cadastro */

Route::get('/login', [ 'as' => 'login', 'uses' => 'LoginController@login']);
Route::post('/login', 'LoginController@login_acao');
Route::get('/recuperar-senha', 'LoginController@recuperar');
Route::post('/recuperar-senha', 'LoginController@recuperar_acao');
Route::get('/resetar-senha', 'LoginController@reset');
Route::post('/resetar-senha', 'LoginController@reset_acao');
Route::get('/cadastro', 'CadastroController@cadastro');
Route::post('/cadastro', 'CadastroController@cadastro_acao');


Route::group(['middleware' => 'auth'], function () {

	
	Route::get('/sistema', function () {
	    return redirect('/sistema/downloads');
	});

	Route::get('/sistema/logout', 'LoginController@logout');
	Route::get('/sistema/sair', 'LoginController@logout');

	Route::get('/sistema/downloads', 'DownloadsController@listar');
    Route::get('/sistema/downloads/categorias/{categoria}', 'DownloadsController@arquivos_categoria');
	Route::get('/sistema/downloads/{filename}', 'DownloadsController@baixar_arquivo')->where('filename', '^[^/]+$');


});