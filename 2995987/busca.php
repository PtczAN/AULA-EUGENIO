<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    
    <title>busca</title>
</head>
<body>
    <?php
    include_once "Dao.php";
    include_once "funcionarios.php";
    $re = intval($_GET["re"]);
    $dao = new Dao();
    $f = $dao->buscarpeloRe($re);
    $formato="Y-m-d";
    $dataNascimento = DateTime::createFromFormat($form,$f->getDatanascimento());
    
    ?>
<form>
    RE:<input type="text" name="re" value="<?php echo $f->getRe()?>"/>
    Nome:<input type="text" name="nome" value="<?php echo $f->getNome()?>"/>
    Data de Nasciemnto:<input type="text" name="dataNascimento" value="<?php echo $dataNascimento->fromat("d-m-Y")?>"/>
    Salário:<input type="text" name="salario" value="<?php echo $f->getSalario()?>"/>
    <input type="submit" name="alterar"/>
</form>
<a href="/2995987">voltar</a>
</body>
</html>