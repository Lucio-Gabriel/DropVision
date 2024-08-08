<?php

require 'setting.php';

$id = filter_input(INPUT_POST, 'id');
$nomeDaLoja = filter_input(INPUT_POST, 'nome_da_loja');
$linkDaLoja = filter_input(INPUT_POST, 'link_loja');
$lojaNinchada = filter_input(INPUT_POST, 'loja_ninchada');

if( $id && $nomeDaLoja && $linkDaLoja && $lojaNinchada){

    $sql = $pdo->prepare("UPDATE cadastrolojas SET nomeDaLoja =:nome_da_loja, linkDaLoja =:link_loja, lojaNichada =:loja_ninchada WHERE id = :id");
    $sql->bindValue(':nome_da_loja', $nomeDaLoja);
    $sql->bindValue(':link_loja', $linkDaLoja);
    $sql->bindValue(':loja_ninchada', $lojaNinchada);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("Location: table_data.php");
    exit;
    
}

else{
    header("Location: table_data.php");
    exit;
}