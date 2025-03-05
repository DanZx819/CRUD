<?php 
if(!isset($_GET['editar'])){?>
<h1>Inserir usuario</h1>
<form action="processa_usuario.php" method="post">
    <label for="">Nome</label>
    <input type="text" name="nome_usuario" class="form-control">
    <label for="">CPF</label>
    <input type="text" name="cpf_usuario" class="form-control">
    <input type="submit" class="btn btn-success" value="Inserir Usuario">
</form>
<?php }else{
    while($linha = mysqli_fetch_array($consulta_usuario)){
        if ($linha['id_usuario'] == $_GET['editar']) {?>
            
    

<h1>Editar Usuario</h1>
<form action="edita_usuario.php" method="post">
    <input type="hidden" name="id_usuario" value="<?php echo $linha['id_usuario']?>">
    <label for="">Nome</label>
    <input type="text" name="nome_usuario" class="form-control" value="<?php echo $linha['nome_usuario']?>">
    <label for="">CPF</label>
    <input type="text" name="cpf_usuario" class="form-control" value="<?php echo $linha['cpf_usuario']?>">
    <input type="submit" class="btn btn-success" value="Inserir Usuario">
</form>

<?php }?>
<?php }?>
<?php }?>