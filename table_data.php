<?php 
require 'setting.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM cadastrolojas");

if($sql->rowCount() > 0){
  $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleComponets/stylebtn.css">
</head>
<body>
    
    <h1>Bem vindo a DropVision</h1>

    <table class="table table-dark .table-group-divider">
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome da Loja</th>
      <th scope="col">Link da loja</th>
      <th scope="col">Loja Ninchada</th>
      <th scope="col">Opções</th>
    </tr>

    <?php foreach($lista as $usuario):?>
 
      <tr>
        <td><?=$usuario['id'];?></td>
        <td><?=$usuario['nomeDaLoja'];?></td>
        <td><?=$usuario['linkDaLoja'];?></td>
        <td><?=$usuario['lojaNichada'];?></td>
        <td>
            <a class="btnUpdate" href="edit.php?id=<?=$usuario['id'];?>">Editar</a>
            <a class="btnUpdate" href="delete.php?id=<?=$usuario['id'];?>:" onclick="return confirm('Tem certeza que deseja deletar?')">Apagar</a>
        </td>
      </tr>
      <?php endforeach; ?>
</table>

<!-- <button type="button" class="btn btn-primary" >Cadastra Loja</button> -->
    <a class="btnUpdate" href="product_registration.php">Cadastra Loja</a>


</body>
</html>