<?php

require 'setting.php';

$id = filter_input(INPUT_POST, 'id');
$nomeDaLoja = filter_input(INPUT_POST, 'nome_da_loja');
$linkDaLoja = filter_input(INPUT_POST, 'link_loja');
$lojaNinchada = filter_input(INPUT_POST, 'loja_ninchada');


if ( $nomeDaLoja && $linkDaLoja ){

    $sql = $pdo->prepare("INSERT INTO cadastrolojas (nomeDaLoja, linkDaLoja, lojaNichada) VALUES (:nome_da_loja, :link_loja, :loja_ninchada)");
    $sql->bindValue(':nome_da_loja', $nomeDaLoja);
    $sql->bindValue(':link_loja', $linkDaLoja);
    $sql->bindValue(':loja_ninchada', $lojaNinchada);
    $sql->execute();

    header("Location: table_data.php");
    exit;

}else{

    header("Location: table_data.php");
    exit;

}