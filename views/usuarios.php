

<table class="table table-bordered border border-black" id="usuarios">
    <thead>
        <th>Nome</th>
        <th>CPF</th>
        <th>Editar</th>
        <th> Excluir</th>
    </thead>
    <tbody>
        <?php while ($linha = mysqli_fetch_array($consulta_usuario)) {
            echo '<tr><td>'. $linha['nome_usuario'].'</td>';
            echo '<td>'. $linha['cpf_usuario'].'</td>';
        ?>
        <td ><a href="?pagina=inserir_usuario&editar=<?php echo $linha['id_usuario'];?>" class="text-success"><i class="fa-solid fa-user-pen" ></i></a></td>
        <td><a href="?pagina=deleta_usuario&id_usuario=<?php echo $linha['id_usuario'];?>" class="text-danger"><i class="fa-solid fa-user-slash"></i></a></td>
        <?php 
        }
        ?>
    </tbody>

   
</table>
<a href="?pagina=inserir_usuario" class="btn btn-success">Inserir Usuario</a>