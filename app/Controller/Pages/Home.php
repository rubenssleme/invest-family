<?php
namespace app\Controller\Pages;

use \App\Utils\View;

class Home{
    /**
     * Retorna a Home
     * 
     */
    public static function getHome(){
        return View::render('pages/home');
    }
}