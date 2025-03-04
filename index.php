<?php 
#Banco de dados
include "config.php";

#Header

include "views/header.php";


#Conteudo da pagina

@$pagina = $_GET['pagina'];

if($pagina == 'cidades'){
    include 'views/cidades.php';
}elseif($pagina == 'usuarios'){
    include 'views/usuarios.php';
}elseif($pagina == 'usuario_cidade'){
    include 'views/usuarios_cidades.php';
}elseif($pagina == 'inserir_cidade'){
    include 'inserir_cidade.php';
}elseif($pagina == 'inserir_usuario'){
    include 'inserir_usuario.php';
}
else{
    include 'views/home.php';
}






#footer

include "views/footer.php";
?>