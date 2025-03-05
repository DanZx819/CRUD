<?php 

include 'config.php';

$id_pessoa_cidade = $_GET['id'];

$query = "DELETE FROM usuarios_cidade WHERE id = $id_pessoa_cidade";

mysqli_query($conexao, $query);
header('location:index.php?pagina=usuario_cidade');
?>