<?php
class ProdutoRepositorio 
{
    private $conn; // sua conexão com o bnco de dados
    public function __construct($conn)
{
        $this ->conn;
    
}
public function cadastrar(Produto $produto)
{
    $sql = "INSERT INTO produtos (tipo, nome descricao, imagem, preco VALUES (?,?,?,?,?)";
    $stmt = $this ->conn->prepare($sql);
    $stmt->bind_param("ssssd", $produto->getTipo(),
        $produto->getNome(), $produto->getDescricao(),
        $produto->getImagem(), $produto->getPreco());
        $stmt->execute();
        $stmt->close();

    
}
}