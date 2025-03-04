<?php 
include "config.php";

$nome_cidade = $_POST['nome_cidade'];
$cep_cidade = $_POST['cep_cidade'];

$query = "INSERT INTO CIDADES(nome_cidade, cep_cidade) VALUES('$nome_cidade', '$cep_cidade')";


mysqli_query($conexao, $query);
header('location:index.php?pagina=cidades');
?>