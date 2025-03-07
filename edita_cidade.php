<?php 

include "config.php";

$nome_cidade = $_POST['nome_cidade'];
$cep_cidade = $_POST['cep_cidade'];
$id_cidade = $_POST['id_cidade'];


$query = "UPDATE cidades SET nome_cidade = '$nome_cidade', cep_cidade='$cep_cidade' WHERE id_cidade = '$id_cidade'";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cidades');
?>