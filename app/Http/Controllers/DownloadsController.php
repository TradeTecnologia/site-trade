<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use App\Download;
use View;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;
use SebastianBergmann\Environment\Console;


class DownloadsController extends Controller {
    
    public function listar() {

        return View::make('sistema.downloads')
            ->with('categorias', DB::table('arquivos_categorias')
                ->where('status', 'A')
                ->whereNull('categoria_mae')
                ->orderBy('nome', 'asc')->get());
    }

    public function arquivos_categoria($categoria){
        return View::make('sistema.arquivos')
            ->with('data', DB::table('arquivos_franqueados')->where('categoria', $categoria)->orderBy('id', 'desc')->get())
            ->with('categoria', Categoria::where('id', $categoria)->first())
            ->with('categorias', DB::table('arquivos_categorias')
                ->where('status', 'A')
                ->where('categoria_mae', $categoria)
                ->orderBy('nome', 'asc')->get());
    }

    public function baixar_arquivo($filename){

        $folder = "app/files"; 

        $fullpath="{$folder}/{$filename}";

        return response()->download(storage_path($fullpath), null, [], null);

    }   
}
