<?php
namespace app\Controller\Pages;

use \App\Utils\View;

class Page{
    /**
     * Retorna a conteudo da pagina generica
     * 
     */
    public static function getPage($title, $content){
        return View::render('pages/page',[
            'title' => $title,
            'content' => $content
        ]);
    }
}