
<table class="table table-bordered border border-black">
    <thead>
        <th>Usuario</th>
        <th>Cidade</th> 
        <th>Excluir</th>
    </thead>
    <tbody>
        <?php 
            while($linha = mysqli_fetch_array($consulta_cidadeUsuario)){
                echo '<tr><td>'. $linha['nome_usuario'] .'</td>';
                echo '<td>' . $linha['nome_cidade'] . '</td>';
             ?>
                <td><a href="deleta_usuario_cidade.php?id=<?php echo $linha['id']; ?>">Deletar</a></td>
            <?php 
            }
            ?>
            
    </tbody>
</table>
<a href="?pagina=inserir_cidade_usuario"><button class="btn btn-success">Inserir Usuario/Cidade</button></a>