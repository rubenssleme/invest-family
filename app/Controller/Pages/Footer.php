<?php
namespace app\Controller\Pages;

use \App\Utils\View;

class Footer{
    /**
     * Retorna a conteudo da pagina generica
     * 
     */
    public static function getFooter(){
        return  View::render('pages/footer',[
            'name' => 'INVEST Family',
            'description' => 'Gerenciador de Investimentos Familiares'
        ]);
    
    }
}