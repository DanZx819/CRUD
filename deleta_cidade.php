<?php 

include 'config.php';

$id_cidade = $_GET['id_cidade'];

$query = "DELETE FROM cidades where id_cidade = $id_cidade";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cidades');

?>