<?php

namespace Catalogo;

require 'Categoria.php';
require 'ConnectDB.php';

$categoria =  new Categoria();

$categoria->nome = $_POST['nome'];
$categoria->descricao = $_POST['descricao'];


$conn =  new ConnectDB();
$conn->connect();
$conn->salvar($categoria);
