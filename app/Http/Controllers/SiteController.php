<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Validator;
use View;
use Mail;

class SiteController extends Controller {

	public function home(){

        $data = array(
            'sliders' => DB::table('sliders')->where('status', 'A')->orderBy('ordem', 'asc')->get(),
            'servicos' => DB::table('servicos')->where('status', 'A')->orderBy('id', 'desc')->get(),
			'parceiros' => DB::table('parceiros')->where('status', 'A')->orderBy('id', 'desc')->get(),
            'fraqueado' => DB::table('franqueados')->where('id', 1)->first(),
            'unidades' => $this->unidades_home(),
            'unidades_contato' => DB::table('unidades')->where('status', 'A')->get()
        );
        
		return View::make("site.home")->with('data', $data);

	}

    private function unidades_home() {

        $array = [];

        $table = DB::table('unidades')->where('status', 'A')->get();

        foreach ($table as $key => $value) {
            
            if($value->uf == 'BA') {
                $array['BA'][$key] = array(
                   'uf' => $value->uf,     
                   'cidade' => $value->cidade,
                   'endereco' => $value->endereco,
                   'iframe' => $value->iframe,
                   'telefone' => $value->telefone,
                   'email' => $value->email
                );
            } else if($value->uf == 'PE') {

                $array['PE'][$key] = array(
                   'uf' => $value->uf,     
                   'cidade' => $value->cidade,
                   'endereco' => $value->endereco,
                   'iframe' => $value->iframe,
                   'telefone' => $value->telefone,
                   'email' => $value->email
                );
            } else {

                $array['OUTROS'][$key] = array(
                   'uf' => $value->uf,     
                   'cidade' => $value->cidade,
                   'endereco' => $value->endereco,
                   'iframe' => $value->iframe,
                   'telefone' => $value->telefone,
                   'email' => $value->email
                );

            }
        }

        return $array;
    }

    public function sobre(){

        $data = [];
        $tableSobre = DB::table('sobre')->where('id', 1)->first();
        $tableGallery = DB::table('galeria_sobre')->get();

        $imagens = [];
        foreach ($tableGallery as $key => $value) {

            $imagens[$key] = array(
                'id' => $value->id,
                'imagem' => '/img/about/gallery/'.$value->imagem
            );
        }

        $data = array(
            'sobre' => $tableSobre,
            'galeria' => $imagens
        );

        return View::make("site.sobre")->with('data', $data);

    }

    public function servicos(){

        $table = DB::table('servicos')->where('status', 'A')->orderBy('id', 'desc')->get();

        return View::make("site.servicos")->with('data', $table);

    }

    public function simulacao_consignado(){
        return View::make("site.simulacao_consignado");
    }

    public function simulacao_financiamento(){
        return View::make("site.simulacao_financiamento");
    }

    public function seja_franqueado(){

        $data = [];
        $tableFraqueado = DB::table('franqueados')->where('id', 1)->first();
        $vantagens = DB::table('vantagens_franqueados')->where('status', 'A')->get();

        $data = array(
            'fraqueado' => $tableFraqueado,
            'sliders' => DB::table('sliders')->where('status', 'A')->orderBy('ordem', 'asc')->get(),
            'vantagens' => $vantagens
        );

        return View::make("site.seja_franqueado")->with('data', $data);
        
    }

    public function seja_franqueado_pre_cadastro(){
        return View::make("site.seja_franqueado_pre_cadastro");
    }

    public function contato(){

        $data = array();

        return View::make("site.contato")->with('data', $data);

    }

    public function simulacao_consignado_acao(Request $request) {


        $retorno = [];

        $array = array(
            'nome' => $request['nome'],
            'email' => $request['email'],
            'telefone' => $request['telefone'],
            'tipo_emprestimo' => ($request['subtipo'] == 1 ? 'Empréstimo Consignado INSS/Servidores' : 'Cartão Consignado INSS/Servidores'),
            'valor_solicitado' => $request['valor'],
            'quantidade_parcelas' => ($request['subtipo'] == 1 ? $request['quantidade_parcelas'] : '72')
        );

        $table = DB::table('emails')->get();

        foreach ($table as $key => $value) {

            try {

                $email = $value->email;
                $name = $request['nome'];
                $template = "emails.simulacao_emprestimo";
                $assunto = 'Solicitação de empréstimo Consignado';


                Mail::send( $template, $array, function($message) use ($email, $name, $assunto) {
                    $message->to($email, $name)->subject($assunto);
                });


                $retorno = array(
                    'codigo' => 200,
                    'mensagem' => 'Enviado com sucesso. Um dos nossos consultores entrará em contato.',
                    'status' => 'success'
                );

                
                
            } catch (Exception $e) {

                $retorno = array(
                    'codigo' => 500,
                    'mensagem' => 'Ocorreu um erro interno, informe o administrador.',
                    'status' => 'warning',
                    'exception' => $e
                );

                break;
                
            }

        }

        return $retorno;

    }


    public function simulacao_financiamento_acao(Request $request) {


        $retorno = [];

        $array = array(
            'nome' => $request['nome'],
            'email' => $request['email'],
            'telefone' => $request['telefone'],
            'tipo_imovel' => ($request['tipo_imovel'] == 1 ? 'Novo' : 'Usado'),
            'valor_imovel' => $request['valor_imovel'],
            'valor_financiamento' => $request['valor_financiamento'],
            'estado' => $request['estado'],
            'cidade' => $request['cidade'],
            'data_nascimento' => $request['data_nascimento'],
            'renda_familiar' => $request['renda_familiar']
        );

        $table = DB::table('emails')->get();

        foreach ($table as $key => $value) {

            try {

                $email = $value->email;
                $name = $request['nome'];
                $template = "emails.simulacao_financiamento";
                $assunto = 'Solicitação de análise de crédito - Simulação de financiamento';


                Mail::send( $template, $array, function($message) use ($email, $name, $assunto) {
                    $message->to($email, $name)->subject($assunto);
                });

                $retorno = array(
                    'codigo' => 200,
                    'mensagem' => 'Um dos nossos consultores fará o estudo da melhor linha de financiamento e em qual banco e entrará em contato em 24hs.',
                    'status' => 'success'
                );
                
            } catch (Exception $e) {

                $retorno = array(
                    'codigo' => 500,
                    'mensagem' => 'Ocorreu um erro interno, informe o administrador.',
                    'status' => 'warning',
                    'exception' => $e
                );

                break;
                
            }

        }

        return $retorno;

    }


    public function seja_franqueado_pre_cadastro_acao(Request $request){

        $retorno = array();

        $validator = Validator::make(
            [
                'email' => $request['email'],
            ],
            [
                'email' => 'required|email|max:100'
            ]
        );

        if (count($validator->errors()->all()) == 0) {

            $array = array(
                'nome' => $request['nome'],
                'cpf' => $request['cpf'],
                'rg' => $request['rg'],
                'estado_civil' => $request['estado_civil'],    
                'data_nascimento' => $request['data_nascimento'],
                'escolariedade' => $request['escolariedade'],
                'profissao' => $request['profissao'],
                'dados_pessoais_cep' => $request['dados_pessoais_cep'],
                'dados_pessoais_logradouro' => $request['dados_pessoais_logradouro'],
                'dados_pessoais_numero' => $request['dados_pessoais_numero'],
                'dados_pessoais_complemento' => $request['dados_pessoais_complemento'],
                'dados_pessoais_cidade' => $request['dados_pessoais_cidade'],
                'dados_pessoais_uf' => $request['dados_pessoais_uf'],
                'telefone_residencial' => $request['telefone_residencial'],
                'telefone_celular' => $request['telefone_celular'],
                'historico_situacao_atual' => $request['historico_situacao_atual'],
                'historico_cargo_funcao' => $request['historico_cargo_funcao'],
                'historico_qto_tempo' => $request['historico_qto_tempo'],
                'historico_empresa' => $request['historico_empresa'],
                'historico_ramo_atividade' => $request['historico_ramo_atividade'],
                'experiencia_profissional' => $request['experiencia_profissional'],
                'ramo_atividade' => $request['ramo_atividade'],
                'numero_funcionarios' => $request['numero_funcionarios'],
                'faturamento_anual' => $request['faturamento_anual'],
                'participacao_acionaria' => $request['participacao_acionaria'],
                'experiencia_em_exercicio' => $request['experiencia_em_exercicio'],
                'data_abertura' => $request['data_abertura'],
                'data_encerramento' => $request['data_encerramento'],
                'motivo_encerramento' => $request['motivo_encerramento'],

                'interesse_pergunta1' => $request['interesse_pergunta1'],
                'interesse_pergunta2' => $request['interesse_pergunta2'],
                'franquia_lugar' => $request['franquia_lugar'],
                'ponto_comercial' => $request['ponto_comercial'],
                'ponto_comercial_caracteristicas' => $request['ponto_comercial_caracteristicas'],

                'referencia_comercial_nome_1' => $request['referencia_comercial_nome_1'],
                'referencia_comercial_telefone_1' => $request['referencia_comercial_telefone_1'],
                'referencia_comercial_nome_2' => $request['referencia_comercial_nome_2'],
                'referencia_comercial_telefone_2' => $request['referencia_comercial_telefone_2'],
                'referencia_comercial_nome_3' => $request['referencia_comercial_nome_3'],
                'referencia_comercial_telefone_3' => $request['referencia_comercial_telefone_3'],

                'banco1_nome' => $request['banco1_nome'],
                'banco1_agencia' => $request['banco1_agencia'],
                'banco1_gerente' => $request['banco1_gerente'],
                'banco1_telefone' => $request['banco1_telefone'],

                'banco2_nome' => $request['banco2_nome'],
                'banco2_agencia' => $request['banco2_agencia'],
                'banco2_gerente' => $request['banco2_gerente'],
                'banco2_telefone' => $request['banco2_telefone'],

                'banco3_nome' => $request['banco3_nome'],
                'banco3_agencia' => $request['banco3_agencia'],
                'banco3_gerente' => $request['banco3_gerente'],
                'banco3_telefone' => $request['banco3_telefone'],


                'capital_proprio' => $request['capital_proprio'],
                'emprestimo_de_terceiros' => $request['emprestimo_de_terceiros'],
                'doacoes_de_terceiros' => $request['doacoes_de_terceiros'],
                'outras_fontes' => $request['outras_fontes'],
                'total_disponivel' => $request['total_disponivel'],
                'resultado_financeiro' => $request['resultado_financeiro'],


            );

            DB::beginTransaction();

            try {

                $table = DB::table('emails')->get();

                foreach ($table as $key => $value) {

                    try {

                        $email = $value->email;
                        $template = "emails.solicitacao_franqueado";
                        $assunto = 'Solicitação de Novo Franqueado';

                        Mail::send( $template, $array, function($message) use ($email, $name, $assunto) {
                            $message->to($email, $name)->subject($assunto);
                        });

                        $retorno = array(
                            'codigo' => 200,
                            'mensagem' => 'Enviado com sucesso. Um de nossos consultores entrará em contato.',
                            'status' => 'success'
                        );
                        
                    } catch (Exception $e) {

                        $retorno = array(
                            'codigo' => 500,
                            'mensagem' => 'Ocorreu um erro interno, informe o administrador.',
                            'status' => 'warning',
                            'exception' => $e
                        );

                        break;
                        
                    }

                }
                
            } catch (Exception $e) {

                $retorno = array(
                    'codigo' => 500,
                    'mensagem' => 'Ocorreu um erro interno, informe o administrador.',
                    'status' => 'warning',
                    'exception' => $e
                );

                DB::rollback();
                
            }

        } else {

            $retorno = array(
                'codigo' => 501,
                'mensagem' => 'Ocorreu um erro na validação de dados',
                'status' => 'warning',
                'exception' => $validator->errors()
            );

        }
        
        return $retorno;

    }


    public function contato_enviar(Request $request){

        $retorno = array();

        $validator = Validator::make(
            [
                'nome' => $request['nome'],
                'email' => $request['email'],
                'assunto' => $request['assunto'],
                'mensagem' => $request['mensagem']
            ],
            [
                'nome' => 'required|max:100',
                'email' => 'required|email|max:150',
                'assunto' => 'required|max:150',
                'mensagem' => 'required|max:500'
            ]
        );

        if (count($validator->errors()->all()) == 0) {

            $array = array(
                'nome' => $request['nome'],
                'email' => $request['email'],
                'assunto' => $request['assunto'],
                'mensagem' => $request['mensagem'],
            );

            $table = DB::table('emails')->get();

            foreach ($table as $key => $value) {

                try {

                    $email = $value->email;
                    $template = "emails.contato";
                    $assunto = $request['assunto'];

                    Mail::send( $template, $array, function($message) use ($email, $name, $assunto) {
                        $message->to($email, $name)->subject($assunto);
                    });

                    $retorno = array(
                        'codigo' => 200,
                        'mensagem' => 'Enviado com sucesso!',
                        'status' => 'success'
                    );
                    
                } catch (Exception $e) {

                    $retorno = array(
                        'codigo' => 500,
                        'mensagem' => 'Ocorreu um erro interno, informe o administrador.',
                        'status' => 'warning',
                        'exception' => $e
                    );

                    break;
                    
                }

            }

        
        } else {

            $retorno = array(
                'codigo' => 501,
                'mensagem' => 'Ocorreu um erro na validação de dados',
                'status' => 'warning',
                'exception' => $validator->errors()
            );

        }
        
        return $retorno;

    }
	
	
	public function patologias_enviar(Request $request){

        $retorno = array();

        $validator = Validator::make(
            [
                'nome' => $request['nome'],
                'email' => $request['email'],
                'celular' => $request['celular'],
                'cpf' => $request['cpf']
            ],
            [
                'nome' => 'required|max:100',
                'email' => 'required|email|max:150',
                'celular' => 'required',
                'cpf' => 'required'
            ]
        );

        if (count($validator->errors()->all()) == 0) {

            $array = array(
                'nome' => $request['nome'],
                'email' => $request['email'],
                'celular' => $request['celular'],
                'cpf' => $request['cpf'],
            );

            $table = DB::table('emails')->get();

            foreach ($table as $key => $value) {

                try {

                    $email = $value->email;
                    $template = "emails.contato_patologia";
                    $assunto = 'Solicitação de lista de patologias';

                    Mail::send( $template, $array, function($message) use ($email, $name, $assunto) {
                        $message->to($email, $name)->subject($assunto);
                    });

                    $retorno = array(
                        'codigo' => 200,
                        'mensagem' => 'Enviado com sucesso!',
						'redirect' => '/download/lista_patologias.pdf',
                        'status' => 'success'
                    );
                    
                } catch (Exception $e) {

                    $retorno = array(
                        'codigo' => 500,
                        'mensagem' => 'Ocorreu um erro interno, por favor tente mais tarde.',
                        'status' => 'warning',
                        'exception' => $e
                    );

                    break;
                    
                }

            }

        
        } else {

            $retorno = array(
                'codigo' => 501,
                'mensagem' => 'Ocorreu um erro na validação de dados',
                'status' => 'warning',
                'exception' => $validator->errors()
            );

        }
        
        return $retorno;

    }
	


     public function baixar_arquivo($filename){

        $folder = "app/files"; 

        $fullpath="{$folder}/{$filename}";

        return response()->download(storage_path($fullpath), null, [], null);

    }   
}
