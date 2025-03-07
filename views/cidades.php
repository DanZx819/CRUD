<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered border border-black" id="cidades">
        <thead>
            <th>Nome</th>
            <th>CEP</th>
            <th>Editar</th>
            <th>Excluir</th>
        </thead>
        <tbody>
            <?php 
            while($linha = mysqli_fetch_array($consulta_cidade)){
                echo '<tr><td>' . $linha['nome_cidade'] . '</td>';
                echo '<td>'. $linha['cep_cidade'].'</td>';
            
            ?>
            <td><a href="?pagina=inserir_cidade&editar=<?php echo $linha['id_cidade'];?>" class="text-success"><i class="fa-solid fa-user-pen" ></i></a></td>
            <td><a href="?pagina=deleta_cidade&id_cidade=<?php echo $linha['id_cidade'];?>" class="text-danger"><i class="fa-solid fa-user-slash"></i></a></td>

            <?php }?>
        </tbody>
    </table>

    <a href="?pagina=inserir_cidade"><button class="btn btn-success">Inserir Cidades</button></a>
</body>
</html>