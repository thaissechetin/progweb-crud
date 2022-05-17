<?php
//parâmetros do servidor de BD
$servidor = "localhost"; //enedereço doservidor
$usuario  = "root"; //padrão
$senha = ""; //vazio padrão
$banco = "vendas_thais"; //bd que foi criado no mysql

//conectando ao servidor
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

//habilitando o suporte ao charset utf8
mysqli_set_charset($conexao, "utf8");

/* Teste (provisório) */
// if($conexao){
//     echo "tudo ok!";
// }