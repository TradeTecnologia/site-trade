<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Hash;
use View;
use Validator;

class CadastroController extends Controller {

	public function __construct(){

	}

	public function cadastro(){

        if (Auth::check() == true) {
            return redirect('/sistema');
        } else {
            return View('usuario.cadastro');
        }
                
    }

    public function cadastro_acao(Request $request){

        $validator = Validator::make(
            [
                'nome' => $request['nome'],
                'email' => $request['email'],
                'telefone' => $request['telefone'],
                'senha' => $request['senha']
            ],
            [
                'nome' => 'required|max:100',
                'email' => 'required|email|max:120',
                'telefone' => 'required|max:15',
                'senha' => 'required|max:16',
            ]
        );

        if (count($validator->errors()->all()) == 0) {

            $table = DB::table('usuarios_sistema');

            if ($table->where('email', $request['email'])->count() <= 0){

                DB::beginTransaction();

                try {

                    $table->insert(
                        array(
                            'nome' => $request['nome'],
                            'email' => $request['email'],
                            'celular' => $request['telefone'],
                            'password' => Hash::make($request['senha']),
                            'token' => Hash::make($request['senha'].date('d/m/y h:i:s'))
                        )
                    );

                    $this->fazer_login($request['email'], $request['senha']);

                    $retorno = array(
                        'codigo' => 200,
                        'mensagem' => 'Cadastrado com sucesso, Aguarde...',
                        'redirect' => '/sistema',
                        'status' => 'success'
                    );

                    DB::commit();

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
                    'codigo' => 503,
                    'mensagem' => 'O endereço de e-mail já se encontra cadastrado',
                    'status' => 'warning'
                );

            }

        } else {

            $retorno = array(
                'codigo' => 501,
                'mensagem' => 'Ocorreu um erro na validacao de dados',
                'status' => 'warning',
                'exception' => $validator->errors()
            );

        }

        return $retorno;

    }


    private function fazer_login($email, $senha){
        
        $usuario = auth()->guard('web');

        if ($usuario->attempt(['email' => $email, 'password' => $senha])) {
            return true;
        } else {
            return false;
        }

    }
 
}
