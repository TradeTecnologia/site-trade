<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Mail;

class EmailController extends Controller {
	
	public function recebe_parametros($template, $assunto, $email, $name, $token){
		$this->envia_email($template, $assunto, $email, $name, $token);
	}

	public function recebe_parametros_pedido($template, $assunto, $pedido, $data, $produtos){
		$this->envia_email_pedido($template, $assunto, $pedido, $data, $produtos);
	}

	private function envia_email($template, $assunto, $email, $name, $token){

		Mail::send( $template, ['token' => $token, 'name' => $name, 'email' => $email], function($message) use ($email, $name, $assunto) {
            $message->to($email, $name)->subject($assunto);
        });

	}

	private function envia_email_pedido($template, $assunto, $pedido, $data, $produtos){

		$email = $data['email'];
		$name = $data['nome'];

		Mail::send( $template, [
			'pedido' => $pedido, 
            'usuario' => $data,
			'produtos' => $produtos], function($message) use ($email, $name, $assunto) {
            $message->to($email, $name)->subject($assunto);
        });

	}
	
}