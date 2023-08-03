<?php
class Retangulo{
    // atributos de class retnagulo 
    public $altura ;
    public $largura;
    
    function ___construct($altura, $largura){
        $this->altura = $altura;
        $this->largura = $largura;
    
    }

    function calcular_area(){
        return $this->nome; 
    }
    function calcular_perimetro(){
        return $this->idade; 
    }

    function apresentar(){
        return "<br>Olá, meu nome é ".$this->get_name().", tenho ".$this->get_idade()." anos e sou".$this->get_profissao(); 
    }


}
