
<?php
include_once "topo.php"
?>
<h3>Novo Produto</h3>
<form action="gravar.php" method="post">
Nome:
<input type="text" name="nome" id="nome"/><br><br>
Estoque:
<input type="text" name="estoque" id="estoque"/><br><br>
Valor:
<input type="text" name="valor" id="valor"/><br><br>
Categoria:
<select name="categoria" id="categoria">
    <option value="eletronico">Eletronico</option>
    <option value="roupas">Roupas</option>
    <option value="dvd">DVD</option>
</select>
<input type="submit" value="Cadastrar Produto"/>
</form>

<body background="lucas12.png">
</body>

<?php
include_once "rodape.php"
?>
