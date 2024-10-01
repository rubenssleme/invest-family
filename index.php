<?php

require __DIR__.'/vendor/autoload.php';

use \App\Controller\Pages\Header;

use \App\Entity\Vaga;
//$vagas = Vaga::getVagas();


//include __DIR__.'/includes/header.php';
echo Header::getHeader();
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';
