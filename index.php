<?php

require __DIR__.'/vendor/autoload.php';

use \App\Controller\Pages\Home;
//use \App\Entity\Vaga;
//$vagas = Vaga::getVagas();

echo Home::getHome();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';