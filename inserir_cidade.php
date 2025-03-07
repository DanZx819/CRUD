<?php 
if(!isset($_GET['editar'])){?>
<h1>Inserir Cidade</h1>
<form method="post" action="processa_cidade.php">
    <label for="">Nome</label>
    <input type="text" class="form-control" name="nome_cidade">
    <label for="">CEP</label>
    <input type="text" class="form-control" name="cep_cidade">
    <input type="submit" class="btn btn-success" value="Inserir Cidade">
</form>

<?php }else{
    while($linha = mysqli_fetch_array($consulta_cidade)){
        if ($linha['id_cidade'] == $_GET['editar']) {?>

<h1>Editar Cidade</h1>
<form action="?pagina=edita_cidade" method="post">
    <input type="hidden" name="id_cidade" value="<?php echo $linha['id_cidade']?>" class="form-control">
    <label for="">Cidade</label>
    <input type="text" name="nome_cidade" value="<?php echo $linha['nome_cidade'] ?>" class="form-control">
    <label for="">CEP</label>
    <input type="text" name="cep_cidade" value="<?php echo $linha['cep_cidade'] ?>" class="form-control">
    
    <button type="submit" class="btn btn-success">Editar</button>
</form>

<?php }?>
<?php }?>
<?php }?>