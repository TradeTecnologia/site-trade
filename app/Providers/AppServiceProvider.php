<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;
use DB;

class AppServiceProvider extends ServiceProvider {
    
    /**
     * Register any application services.
     *
     * @return void
     */

    public function register() {
    
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot() {

        error_reporting(0); // opcional
        
        session_start();

        view()->share(array(
            'base_url' => Request::getSchemeAndHttpHost(),
            'info_geral' => $this->info_geral(),
        ));

    }

    private function info_geral(){

        $array = array();

        $table = DB::table('configuracoes')->where('id', 1)->first();

        if (!empty($table)) {

            $table2 = Db::table('configuracoes_redes_sociais')->where('id', 1)->first();

            $array = array(
                'nome' => $table->nome,
                'email' => $table->email,
                'telefone' => $table->telefone,
                'endereco' => $table->endereco,
                'whatsapp' => (!empty($table->whatsapp)) ? 'https://web.whatsapp.com/send?phone=+55'.trim(str_replace('(', '', str_replace(')', '', str_replace('-', '', str_replace(' ', '', $table->whatsapp))))) : '',
                'cnpj' => $table->cnpj,
                'descricao' => $table->descricao,
                'keywords' => $table->keywords,
                'redes_sociais' => array(
                    'facebook' => $table2->facebook,
                    'instagram' => $table2->instagram,
                    'twitter' => $table2->twitter,
                    'youtube' => $table2->youtube
                )
            );

        }

        return $array;

    }

}
