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
    function lista(){
        global $conn;
        $sql = "SELECT re,nome,dataNascimento,salario FROM funcionarios";
        $result = mysqli_query($conn,$sql);
        $lista = array();
        while ($row = $result -> fetch_assoc())
        array_push($lista, new funcionarios($row["re"], $row["nome"], $row ["dataNascimento"], $row["salario"]));
        return $lista;
    }
    function buscarpeloRe ($re){
        global $conn;
        $nome="";
        $dataNascimento="";
        $salario=0.0;
        $sql = "SELECT * FROM funcionarios where re = ?";
        $query = $conn->prepare($sql);
        $result=$query->bind_param("i",$re);
        $query->execute();
        $query->bind_reasult($re,$nome,$dataNascimento,$salario);
        if($query->fetch()){
            return new funcionarios($re, $nome, $dataNascimento, $salario);
        }
    }
}
?>