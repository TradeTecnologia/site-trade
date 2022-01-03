<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use DB;
use Auth;
use Session;
use Mail;
use Validator;
use App\Usuario;

class LoginController extends Controller {

    public function login(){

        if (Auth::check() == true) {
            return redirect('/sistema');
        } else {
            return view('usuario.login');
        }

    }

	public function login_acao(Request $request){

        $usuario = null;

        sleep(2);

        if (!empty($request->input('email')) and !empty($request->input('senha'))) {

            $qry = Db::table('usuarios_sistema')->where('email', '=', $request['email'])->first();

            if (!empty($qry)) {

                try {

                    $usuario = auth()->guard('web');

                    if ($usuario->attempt(['email' => $request->input('email'), 'password' => $request->input('senha')])) {

                        $retorno = array(
                            'codigo' => 201,
                            'mensagem' => 'Concluído',
                            'redirect' => '/sistema',
                            'status' => 'success',
                            'icon' => 'check_circle'
                        );

                    } else {
                        $retorno = array(
                            'codigo' => 502,
                            'mensagem' => 'Email ou senhas incorretos',
                            'status' => 'warning'
                        );
                    }

                } catch (Exception $e) {
                    $retorno = array(
                        'codigo' => 500,
                        'mensagem' => 'Ocorreu um erro interno, informe o administrador.',
                        'status' => 'warning',
                        'exception' => $e
                    );
                }               

            } else {
                $retorno = array(
                    'codigo' => 501,
                    'mensagem' => 'O email não se encontra cadastrado',
                    'status' => 'warning'
                );
            }
            
        } else {
            $retorno = array(
                'codigo' => 501,
                'mensagem' => 'Preencha todos os campos obrigatórios',
                'status' => 'warning'
            );
        }

        return $retorno;

    }

    public function recuperar(Request $request){

        if (Auth::check() == true) {
            return redirect('/');
        } else {
            return view('usuario.recuperar');
        }

    }

    public function recuperar_acao(Request $request){

        if (!empty($request->input('email'))) {

            $table = Db::table('usuarios_sistema')->where('email', $request->input('email'))->first();

            if (!empty($table)) {

                (new EmailController)->recebe_parametros(
                    'emails.recuperar', 
                    'Recuperação de senha', 
                    $request->input('email'), 
                    $table->nome,
                    $table->token
                );

                $retorno = array(
                    'codigo' => 200,
                    'mensagem' => 'Concluído',
                    'modal' => view('usuario.resposta_recuperar')->render(),
                    'status' => 'success'
                );

            } else {
                $retorno = array(
                    'codigo' => 502,
                    'mensagem' => 'Esse email não existe em nossos registros',
                    'status' => 'warning'
                );
            }

        } else {
            $retorno = array(
                'codigo' => 501,
                'mensagem' => 'Preencha os campos obrigatórios',
                'status' => 'warning'
            );
        }

        return $retorno;

    }

    public function reset(Request $request){

        if(Auth::check() != true) {

            if (!empty($request['email']) or !empty($request['tk'])) {

                $qry = DB::table('usuarios_sistema')->where('email', $request['email'] )->where('token', $request['tk'] )->first();

                if (!empty($qry)) {
                    return view('usuario.reset');
                } else {
                    return redirect('/');
                }

            } else {
                return redirect('/');
            }

        } else {
            return redirect('/');
        }

    }

    public function reset_acao(Request $request){

        if (!empty($request->input('password')) || !empty($request->input('confirm_password')) || !empty($request->input('email')) || !empty($request->input('token'))) {

            if (strlen( $request->input('password')) < 6 ) {
                $retorno = array(
                    'codigo' => 504,
                    'mensagem' => 'A senha precisa ter mais de 6 caracteres',
                    'status' => 'warning'
                );
            } else if ( strlen( $request->input('password')) > 16) {
                $retorno = array(
                    'codigo' => 504,
                    'mensagem' => 'A senha precisa ter menos de 16 caracteres',
                    'status' => 'warning'
                );
            } else if ( $request->input('password') != $request->input('confirm_password' )) {
                $retorno = array(
                    'codigo' => 504,
                    'mensagem' => 'Os campos precisam ter o mesmo valor',
                    'status' => 'warning'
                );
            } else {

                $table = DB::table('usuarios_sistema')->where('email', $request->input('email') )->where('token', $request->input('token') )->first();

                if ( !empty( $table ) ) {

                    $password = $request->input('password');
                    
                    $date = date('d/m/y h:i:s');

                    DB::table('usuarios_sistema')->where('email', $request->input('email') )->update( array (
                        'password' => bcrypt($password), 
                        'token' => bcrypt($date) )
                    );

                    //$this->fazer_login($request->input('email'), $password);

                    $retorno = array(
                        'codigo' => 200,
                        'mensagem' => 'Sucesso',
                        'redirect' => '/login',
                        'status' => 'success'
                    );

                } else {
                    $retorno = array(
                        'codigo' => 505,
                        'mensagem' => 'Token inválido',
                        'status' => 'warning'
                    );
                }
            }
            
        } else {
            $retorno = array(
                'codigo' => 501,
                'mensagem' => 'Preencha os campos obrigatórios',
                'status' => 'warning'
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

    public function logout(){
       
        Auth::logout();

        //Session::flush();

        return redirect('/login');
    
    }
 
}
