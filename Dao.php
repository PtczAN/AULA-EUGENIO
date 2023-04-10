<?php
include_once "funcionarios.php";
include_once "conexao.php";

class funcionarioDao{
    function inserir (funcionarios $funcionarios){
        global $conn;
        $sql = $conn->prepare("INSERT INTO FUNCIONARIOS VALUES(?,?,?,?)");
        $sql-> bind_param("issd",$p1,$p2,$p3,$p4);
        $p1 = $funcionarios->getRe();
        $p2 = $funcionarios->getNome();
        $p3 = $funcionarios->getDataNascimento();
        $p4 = $funcionarios->getSalario();
        $sql-> execute();
        if($sql->affected_rows>0){
            return true;
        }
}
    function excluir ($funcionarios){
        global $conn;
        $sql = $conn->prepare("DELETE FROM FUNCIONARIOS WHERE RE=?");
        $sql-> bind_param("i",$p1);
        $p1 = $funcionarios->getRe();
        $sql-> execute();
        if($sql->affected_rows>0){
            return true;
        }
    }
    function alterar ($funcionarios){
        
    }
    function lista (){
        
    }
    function buscarpeloRe ($re){
        
    }
}
?>