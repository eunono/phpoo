<?php
class usuario {
public $nome;
public $email;
public $senha;

function construct($nome, $email, $senha){
    $this->nome = $nome;
    $this->email = $email;
    $this->senha = $senha;

}
function set_nome(){
    return $this->nome;
}
function set_nome($nome){
   

}
