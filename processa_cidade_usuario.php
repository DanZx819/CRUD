<?php 

include "config.php";

$nome_cidade = $_POST['escolha_cidade'];
$nome_usuario = $_POST['escolha_usuario'];


$query = "INSERT INTO USUARIOS_CIDADE(id_usuarios, id_cidades) VALUES('$nome_usuario', '$nome_cidade')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=usuario_cidade');

?>