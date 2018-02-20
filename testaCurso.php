<?php
/** Created by PhpStorm. ...*/
include 'vendor/autoload.php';


$c =new App\Model\Curso();
$c->setNome("Android");
$c->setValor(500.50);

$cDAO= new App\DAO\CursoDAO();
$cDAO->inserir($c);

echo $c->getNome() . " - " . $c->getValor();
