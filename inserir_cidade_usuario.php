<h1>Cadastrar Pessoas</h1>
<form method="post" action="processa_cidade_usuario.php">
    <select name="escolha_usuario" class="form-control">
        <option value="">Selecione o usuario</option>
        <?php 
        while($linha = mysqli_fetch_array($consulta_usuario)){
            echo '<option value="' . $linha['id_usuario'] . '">' . $linha['nome_usuario'] . '</option>';
        }
        ?>
    </select>
    <select name="escolha_cidade" class="form-control">
        <option value="">Selecione a cidade</option>
        <?php 
        while($linha = mysqli_fetch_array($consulta_cidade)){
            echo '<option value="' . $linha['id_cidade'] . '">' . $linha['nome_cidade'] . '</option>';
        }
        ?>
    </select>
    <input class="btn btn-success" type="submit" value="Cadastrar">
</form>
