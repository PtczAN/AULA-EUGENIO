<?php
class funcionarios{
private $re;
private $nome;
private $dataNascimento;
private $salario;

function __construct($re,$nome,$dataNascimento,$salario){
    $this->re = $re;
    $this->nome = $nome;
    $this->dataNascimento = $dataNascimento;
    $this->salario = $salario;
}
function getRe(){
    return $this->re;
}
function setRe($re){
    return $this->re ;
}
function getNome(){
    return $this->nome;
}
function setNome($nome){
    return $this->nome ;
}
function getDataNascimento(){
    return $this->dataNascimento;
}
function setDataNascimento($dataNascimento){
    return $this->dataNascimento ;
}
function getSalario(){
    return $this->salario;
}
function setSalario($salario){
    return $this->salario;
}
}

?>