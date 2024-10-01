<?php
namespace app\Controller\Pages;

use \App\Utils\View;

class Header{
    /**
     * Retorna a conteudo da pagina generica
     * 
     */
    public static function getHeader(){
        return  View::render('pages/header',[
            'name' => 'INVEST Family Rubens',
            'description' => 'Gerenciador dos Investimento Familiares'
        ]);
    
    }
}