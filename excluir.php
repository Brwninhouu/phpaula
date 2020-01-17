<?php
//pegar o ID
$id = $_GET["id"];
//fazer a conexão com o banco de dados
include_once "conexao.php";
//montar a instrução para deletar o ID recebido
$sql = "delete from produto where idproduto =".$id;
//igual ao gravar
if(mysqli_query($con,$sql))
   $msg = "Produto excluído com sucesso!!";
    else
   $msg = "Não deu certo, culpa do lucas que copia!";
//fechar conexão
mysqli_close($con);
echo "<script> 
alert('".$msg."');
location.href='consultar.php';
</script>";
?>