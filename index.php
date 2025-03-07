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
}elseif($pagina == 'inserir_cidade_usuario'){
    include 'inserir_cidade_usuario.php';
}elseif($pagina == 'deleta_cidade'){
    include 'deleta_cidade.php';
}elseif($pagina == 'deleta_usuario'){
    include 'deleta_usuario.php';
}elseif($pagina == 'editar_usuario'){
    include 'editar_usuario.php';
}elseif($pagina == 'edita_cidade'){
    include 'edita_cidade.php';
}
else{
    include 'views/home.php';
}






#footer

include "views/footer.php";
?>