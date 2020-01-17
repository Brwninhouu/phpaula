<?php
// 1 Pegar os dados para atualizar
$id = $_POST["id"];
$nome = $_POST["nome"];
$estoque = $_POST["estoque"];
$valor = $_POST["valor"];
$categoria = $_POST["categoria"];
// 2 Abrir a conexao com o banco
include_once "conexao.php";
// 3 criar a instrução sql para atualizar 
$sql = "update produto set nome = '".$nome."', estoque = '".$estoque."', valor = '".$valor."', categoria = '".$categoria."' where idproduto =".$id;
// 4 executar a instrução no banco 
if(mysqli_query($con,$sql))
   $msg = "Produto atualizado com sucesso!!";
    else
   $msg = "Não deu certo, culpa do lucas que copia!";
// 5 fechar conexão
mysqli_close($con);
echo "<script> 
alert('".$msg."');
location.href='consultar.php';
</script>";
?>
