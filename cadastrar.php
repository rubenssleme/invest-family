<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar vaga');
use \App\Controller\Pages\Header;
use \App\Controller\Pages\Footer;

use \App\Entity\Vaga;
$obVaga = new Vaga;

//VALIDAÇÃO DO POST
if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){

  $obVaga->titulo    = $_POST['titulo'];
  $obVaga->descricao = $_POST['descricao'];
  $obVaga->ativo     = $_POST['ativo'];
  $obVaga->cadastrar();

  header('location: index.php?status=success');
  exit;
}


//include __DIR__.'/includes/header.php';
  echo Header::getHeader();
//include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/formulario.php';
  echo Footer::getFooter();
//include __DIR__.'/includes/footer.php';
