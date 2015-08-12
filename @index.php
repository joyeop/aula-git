<?php
/**
 * Created by PhpStorm.
 * User: igneel
 * Date: 07/08/15
 * Time: 07:27
 */
require_once "aula1.php";

$pessoa1 = new Pessoa();
$pessoa1->name = "igneel";
$pessoa1->idade = 25;

$pessoa2 = new Pessoa();
$pessoa2->name = "ragnarok";
$pessoa2->idade = 25;


echo $pessoa1->correr(50);