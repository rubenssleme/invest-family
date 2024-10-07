<?php
namespace app\Controller\Pages;

use \App\Utils\View;

class Cadastro {
    /**
     * Retorna a Home
     * 
     */
    public static function getCadastro(){
        return  View::render('pages/cadastro',[
            'name' => 'INVEST Family Rubens',
            'description' => 'Gerenciador dos Investimento Familiares'
        ]);
    
    }
}