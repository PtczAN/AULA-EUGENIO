<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
    <table border="1">
    <tr>
        <th>RE</th>
        <th>Nome</th>
        <th>Data de nascimento</th>
        <th>Salario</th>
    </tr>
<?php
include_once "Dao.php";
include_once "funcionarios.php";
$dao = new funcionarioDao();
$lista = $dao->lista();
$formato = "Y-m-d";
$formatter = new NumberFormatter('pt_BR',NumberFormatter::CURRENCY);
foreach($lista as $f){
    $dataNascimento=DateTime::createFromFormat($formato,$f->getDataNascimento());
    echo "<tr><td>".$f->getRe()."</td>";
    echo "<td>".$f->getNome()."</td>";
    echo "<td>".$dataNascimento ->format("d/m/Y")."</td>";
    echo "<td>".$formatter ->formatCurrency($f->getSalario(),"BRL")."</tr></td>";
}

?>
</table>
</body>
</html>
