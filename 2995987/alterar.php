<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <?php
    include_once "funcionarios.php";
    include_once "Dao.php";
    $re = intval($_GET["re"]);
    $nome = $_GET["nome"];
    $formato = "d/m/Y";
    $dataNascimento = DateTime::createFromFormat($formato, $_GET["dataNascimento"]);
    $salario = floatval($_GET["salario"]);
    $funcionarios = new funcionarios($re,$nome,$dataNascimento->format("Y-m-d"),$salario);
    $dao = new funcionarioDao();
    if ($dao->inserir($funcionarios)){
        echo "Inserido com sucesso";
    } else {
        echo "Ocorreu um erro na inserção";
    }
    ?>

    <a href="/2995987">voltar</a>
</body>

</html>