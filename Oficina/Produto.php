<?php

namespace Catalogo;

require 'Categoria.php';

class Produto{

    public $id;
    public $nome;
    public $preco;
    public $descricao;
    public $categoria;
}

$produto = new Produto();
$produto->nome = "Mesa";
$produto->preco = "45.00";
$produto->descricao = "Mesa de escritório";
$produto->categoria = new Categoria();
$produto->categoria->nome = " teste";

var_dump($produto);
