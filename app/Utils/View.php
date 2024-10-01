<?php

namespace app\Utils;


class View{

/**
 * Retoprna o conteudo de uma View
 * @parm string $view
 * return string 
 */
private static function getContentView($view){
    $file = __DIR__.'/../../resources/view/'.$view.'.html';
    return file_exists($file) ? file_get_contents($file) : '';
}

/**
 * Retoprna o conteudo renderizado de uma View
 * @parm string $view
 * return string 
 */
public static function render($view){
    /**
     * Conteudo da View
     */
    $contentView = self::getContentView($view);
    return $contentView;
}

}