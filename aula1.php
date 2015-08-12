<?php
/**
 * Created by PhpStorm.
 * User: igneel
 * Date: 07/08/15
 * Time: 06:55
 */
class Pessoa
{
    public $name;
    public $idade;

    public function __construct($name, $idade)
    {
    $this->name = $name;
        $this->idade = $idade;
    }

    public function correr($km)
    {
        echo $this->name.    " esta correndo!";
        for($i=0; $km > $i; $i++) {
            echo ".";
        }
       echo $this->name." chegou!";
    }

}


