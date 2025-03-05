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

$query = "SELECT usuarios.nome_usuario, cidades.nome_cidade, usuarios_cidade.id FROM usuarios, cidades, usuarios_cidade WHERE usuarios_cidade.id_usuarios = usuarios.id_usuario AND usuarios_cidade.id_cidades = cidades.id_cidade; ";

$consulta_cidadeUsuario = mysqli_query($conexao, $query);
?>