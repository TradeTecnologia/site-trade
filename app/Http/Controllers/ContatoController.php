<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use Validator;
use Mail;

class ContatoController extends Controller {

	public function __construct(){

	}

    public function contato_enviar(Request $request){

    	$retorno = array();

    	$validator = Validator::make(
            [
            	'nome' => $request['nome'],
                'email' => $request['email'],
                'mensagem' => $request['mensagem']
            ],
            [
                'nome' => 'required|max:100',
                'email' => 'required|email|max:150',
                'mensagem' => 'required|max:500'
            ]
        );

        if (count($validator->errors()->all()) == 0) {

        	$array = array(
        		'nome' => $request['nome'],
        		'email' => $request['email'],
        		'telefone' => $request['telefone'],
        		'mensagem' => $request['mensagem'],
                'unidade_desejada' => $request['cidade']
        	);

        	$table = DB::table('emails')->get();

        	foreach ($table as $key => $value) {

        		try {

        			$email = $value->email;
        			$name = $request['nome'];
        			$template = "emails.contato";
        			$assunto = 'Solicitação de contato via Site';


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

    public function assinar_newsletter(Request $request){

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
        		'email' => $request['email']
        	);

        	DB::beginTransaction();

        	try {

        		$table = DB::table('newsletter');

        	    if ($table->where('email', $request['email'])->count() <= 0) {
        	   	    
        	   	    $table->insert($array);

        	   	    $retorno = array(
        		        'codigo' => 200,
    		            'mensagem' => 'Cadastrado com sucesso',
    		            'status' => 'success'
    	            );

    	            DB::commit();

        	    } else {

        	    	$retorno = array(
        		        'codigo' => 502,
    		            'mensagem' => 'O e-mail já se encontra cadastrado',
    		            'status' => 'warning'
    	            );

    	            DB::rollback();

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
 
}
