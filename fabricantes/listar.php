<?php
require "../includes/funcoes-fabricantes.php";
$listaDeFabricantes = lerFabricantes($conexao);
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Fabricantes | SELECT - CRUD com PHP e MySQL </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <h1>Fabricantes | SELECT -
    <a href="../index.php">Home</a> </h1>
</div>
      

<div class="container">
    
    <h2>Lendo e carregando todos os fabricantes</h2>
    <p><a class="btn btn-outline-success" href="inserir.php">Inserir</a></p>    

    <table class="table table-dark">
        <caption> Lista de Fabricantes </caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Operação</th>
            </tr>
        </thead>
                
        <tbody>
<?php foreach($listaDeFabricantes as $fabricante){ ?>
            <tr>
                <td> <?=$fabricante["id"]?></td>
                <td> <?=$fabricante["nome"]?></td>
                <td>
                    <a class=" btn btn-outline-warning" href="atualizar.php?id=<?=$fabricante["id"]?>">Atualizar</a> <a  class="btn btn-outline-danger" href="excluir.php?id=<?=$fabricante["id"]?>">Excluir</a>
                    <!-- estudar :páginas dinâmicas -->
                </td>
            </tr>
<?php 
} 
require "../includes/desconecta.php"; //opcional
?>

        </tbody>

    </table>
 
</div>



</body>
</html>