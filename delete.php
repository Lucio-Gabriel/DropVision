<?php

require 'setting.php';

$id = filter_input(INPUT_GET, 'id');

if($id){
 
    $sql = $pdo->prepare("DELETE FROM cadastrolojas WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
}

header("Location: table_data.php");
exit;