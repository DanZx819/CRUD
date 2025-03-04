<?php 
include "config.php";

$nome_usuario = $_POST['nome_usuario'];
$cpf_usuario = $_POST['cpf_usuario'];

$query = "INSERT INTO USUARIOS(nome_usuario, cpf_usuario) VALUES('$nome_usuario', '$cpf_usuario')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=usuarios');



?>