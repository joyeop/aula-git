<?php
/**
 * Created by PhpStorm.
 * User: igneel
 * Date: 07/08/15
 * Time: 07:27
 */
//require_once "aula1.php";

//$pessoa1 = new Pessoa("igneel",25);
//$pessoa2 = new Pessoa("ragnarok",26);

//echo $pessoa1->correr(3);


require_once "Produto.php";
require_once "Tenis.php";

$tenis = new Tenis();

if ($tenis instanceof Produto){
    echo "é nois";
} else { echo " casa caiu";}
