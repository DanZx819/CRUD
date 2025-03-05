<?php 

include 'config.php';
$id_usuario = $_POST['id_usuario'];
$nome_usuario = $_POST['nome_usuario'];
$cpf_usuario = $_POST['cpf_usuario'];

$query = "UPDATE usuarios SET nome_usuario = '$nome_usuario', cpf_usuario = '$cpf_usuario' WHERE id_usuario = '$id_usuario'";

mysqli_query($conexao, $query);

header('location:index.php?pagina=usuarios');
?>