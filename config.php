<?php 

$servidor = "localhost:3312";
$usuario = "root";
$senha = "";
$data_base = "cidades";

$conexao = mysqli_connect($servidor, $usuario, $senha, $data_base);

$query = "SELECT * FROM CIDADES";

$consulta_cidade = mysqli_query($conexao, $query);

$query = "SELECT * FROM USUARIOS";

$consulta_usuario = mysqli_query($conexao, $query);
?>