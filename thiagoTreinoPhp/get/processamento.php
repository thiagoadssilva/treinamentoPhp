<?php
    var_dump($_GET);

    if(isset($_GET["nome"])) {
        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
    }else{
        echo "Cadastro invalido";
        $idade = "";
        $nome = "";
    }
?>

<h1>Seu nome é <?= $nome ?> e você tem <?= $idade ?></h1>