<?php

/**
 * Created by PhpStorm.
 * User: igneel
 * Date: 07/08/15
 * Time: 11:40
 */
class Produto
{
    public $nome;
    public $descricao;
    public $valor;
    public $estoque;
/*
    public function __contruct($nome, $descricao , $valor, $estoque)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->estoque = $estoque;
    } */

    public function baixaEstoque()
    {

        $this->estoque = $this->estoque -1;
    }
}