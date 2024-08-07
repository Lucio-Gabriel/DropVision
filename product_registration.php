<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    

<h1>Adicionar Loja</h1>

<form method="POST" action="add_update_products.php">


    <label>
        Nome da loja:<br/>
        <input type="text" name="nome_da_loja"/>
    </label><br/><br/>

    <label>
        Link da loja:<br/>
        <input type="text" name="link_loja"/>
    </label><br/><br/>

    <label>
        Loja Ninchada:<br/>
        <input type="text" name="loja_ninchada"/>
    </label><br/><br/>


    <input type="submit" value="Adicionar" />

</form>

</body>
</html>