<?php
require("pessoa.php");
class Fruta {
    // atributos
    public $nome;
    public $cor;

    //Métodos 
    function __construct ($nome, $cor)
    {
        $this->nome = $nome;
        $this->cor = $cor;
    }
    function get_name (){
        return $this->nome;
    }

    function set_cor ($cor){
        $this->cor = $cor;
    }
    function get_cor(){
        return $this_>cor;
    }
}

/*$maca = new Fruta("maca_ifsp_turmaB","vermelha");
$banana = new Fruta ("banana_ifsp_turmaB","amarela");

$maca->get_name("maca_ifsp_turmaB");
$banana->get_name("banana.ifsp_turmaB");


echo $banana->get_name();
echo "<br>".$maca->get_name();*/

$aluno1  =new Pessoa ("Noemi",17, "futura vet");
$aluno2 =new Pessoa ("Pantor",12, "Gato");

echo $aluno1->apresentar();
echo $aluno2->apresentar();

$retangulo = new retangulo

?>