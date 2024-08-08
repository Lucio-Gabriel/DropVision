<?php

require 'setting.php';

$info = [];

$id = filter_input(INPUT_GET, 'id');

if($id){

    $sql = $pdo->prepare("SELECT * FROM cadastrolojas WHERE id = :id");
    $sql->bindValue(':id',$id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $info = $sql->fetch( PDO::FETCH_ASSOC );
    }
    else{
        header("Location: table_data.php");
        exit;
    }
}else{
        header("Location: table_data.php");
        exit;
}

?>


<h1>Editar Informações</h1>

<form method="POST" action="edit_update.php">

    <input type="hidden" name="id" value="<?=$info['id'];?>"/>

    <label>
        Nome da loja:<br/>
        <input type="text" name="nome_da_loja" value="<?=$info['nomeDaLoja'];?>"/>
    </label><br/><br/>

    <label>
        Link da loja:<br/>
        <input type="text" name="link_loja" value="<?=$info['linkDaLoja'];?>"/>
    </label><br/><br/>

    <label>
        Loja Ninchada:<br/>
        <input type="text" name="loja_ninchada" value="<?=$info['lojaNichada'];?>"/>
    </label><br/><br/>


    <input type="submit" value="Salvar"/>

</form>