
<?php
include_once "topo.php";
?>

<?php
//pegar o id que o consultar está mandando.
$id = $_GET["id"];
$sql = "select * from produto where idproduto =".$id;
include_once "conexao.php";
$resultado = mysqli_query($con,$sql);
if(mysqli_num_rows($resultado)==1){
$reg = mysqli_fetch_array($resultado);
}
?>

<h3>Atualizar produto</h3>
<form action="atualizar.php" method="post">
Nome:
<input type="text" name="nome" id="nome" value="<?php echo $reg["nome"]; ?>"><br><br>
Estoque:
<input type="text" name="estoque" id="estoque" value="<?php echo $reg["estoque"]; ?>"><br><br>
Valor:
<input type="text" name="valor" id="valor" value="<?php echo $reg["valor"]; ?>"><br><br>
Categoria:
<select name="categoria" id="categoria">
    <option value="<?php echo $reg["categoria"]; ?>"><?php echo $reg["categoria"]; ?></option>
    <option value="eletronico">Eletronico</option>
    <option value="roupas">Roupas</option>
    <option value="dvd">DVD</option>
</select>
<input type="submit" value="Atualizar produto"/>
<input type="hidden" name="id" value="<?php echo $reg["idproduto"]; ?>"/>
</form>

<body background="lucas12.png">
</body>

<?php
include_once "rodape.php";
?>
