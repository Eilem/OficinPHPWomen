<?php

namespace Catalogo;

class Categoria{

    public $id;
    public $nome;
    public $descricao;
}

$minhaCategoria = new Categoria();
$minhaCategoria->nome = "Móveis";
$minhaCategoria->descricao = "Móveis de madeira";

$outraCategoria = new Categoria();
$outraCategoria->nome = "Eletrodomesticos";
$outraCategoria->descricao = "Linha Branca";

var_dump( $minhaCategoria);
var_dump( $outraCategoria);
