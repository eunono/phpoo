<?php
require 'conexao.php';
require 'modelo\Produto.php';
require "Repositorio\ProdutoRepositorio.php";

//if (isset($_POST[' cadastro])){ou
if ($_SERVER["REQUEST_METHOD"]=="post"){
    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $imagem = $_POST["imagem"];


    $Produto = new Produo(0,
    $tipo,
    $nome,
    $desricao,
    $preco,
    $imagem,  
);

$produtoRepositorio = new ProdutosRepositorio($conn);
$produtoRepositorio->cadastrar($produto);
header("Lpcation:cadastrar-produtos-sucesso.php");
}
