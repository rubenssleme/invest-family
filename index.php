<?php

require __DIR__.'/vendor/autoload.php';

use \App\Controller\Pages\Header;
use \App\Controller\Pages\Footer;

use \App\Entity\Vaga;
//$vagas = Vaga::getVagas();


//include __DIR__.'/includes/header.php';
echo Header::getHeader();
include __DIR__.'/includes/listagem.php';
echo Footer::getFooter();
//include __DIR__.'/includes/footer.php';
