<?php
require '../includes/funcoes-fabricantes.php';

//capturar o parâmentro id da URL
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

//cahamamos a função que irá retornar os dados de UM fabricante
$dados = lerUmFabricante($conexao, $id);

//detectar o acionamento do botão atualizar
if ( isset($_POST['atualizar']) ){
    $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    atualizarUmFabricante($conexao, $id, $nome);
    header("location:listar.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Fabricantes | UPDATE - CRUD com PHP e MySQL </title>
<link href="../css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Fabricantes | SELECT e UPDATE -
    <a href="listar.php">Listar</a> - 
    <a href="../index.php">Home</a> </h1>
</div>

<div class="container">

    <h2>Utilize o formulário abaixo para atualizar os dados de um fabricante.</h2>

    <form action="" method="post" class="w-50 mx-auto">

	    <p>
            <label for="nome">Nome:</label><br>
	        <input value="<?=$dados['nome']?>" type="text" name="nome" id="nome" required>
        </p>   
        <button name="atualizar">Atualizar fabricante</button>
	</form>	

</div>

</body>
</html>