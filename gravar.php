<?php
include_once "topo.php";
//pegar os dados do formulário
$nome = trim($_POST["nome"]);
$estoque = trim($_POST["estoque"]);
$valor = trim($_POST["valor"]);
$categoria = trim($_POST["categoria"]);

include_once "conexao.php";

$sql="insert into produto values(null,'".$nome."','".$estoque."','".$valor."','".$categoria."')";

if(mysqli_query($con,$sql)){
    echo"Produto cadastrado com sucesso!";
    }else{
        echo"Não deu certo, culpa do lucas que copia!";
    }
    mysqli_close($con);
    

?>

<!-- 
    1* PEGAR OS DADOS DA TELA!!!
    2* ABRIR CONEXÃO ($CON)
    3* MONTAR INSTRUÇÃO PARA GRAVAÇÃO
    4* MONTAR O if(mysqli_query($con,$sql)){
    echo"Produto cadastrado com sucesso!";
    }else{
        echo"Não deu certo, culpa do lucas que copia!";
    }
    mysqli_close($con);
    -->