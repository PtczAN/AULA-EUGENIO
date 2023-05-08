<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    <?php
    include_once "funcionarios.php";
    include_once "Dao.php";
    $re = intval($_GET["re"]);
    $funcionarios = new funcionarios($re,NULL,NULL,NULL);
    $dao = new funcionarioDao();
    if ($dao->excluir($funcionarios)){
        echo "excluido";
    } else {
        echo "não encontrado";
    }
    ?>
    <a href="/2995987">voltar</a>
</body>
</html>