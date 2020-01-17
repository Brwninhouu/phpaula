

<?php
include_once "topo.php";
?>
<script>
    function excluir(id){
    if(confirm("Deseja realmente mandar esse cara pelos ares?")){
    location.href="excluir.php?id="+id;}
    

    }
    </script>

<center><h3>Consultar produtos</h3>
<hr>
<?php
include_once "conexao.php";
$sql = "select * from produto order by nome ASC";
$resultado = mysqli_query($con,$sql);
if(mysqli_num_rows($resultado) > 0){
    ?>
    <body background="lucas12.png">
        <table width="100%" border="2">
            <tr>
                <th>Nome</th>
                <th>Estoque</th>
                <th>Valor (R$)</th>
                <th>Categoria</th>
                <th>...</th>
                <th>Excluir</th>
            </tr>
         <?php
         while($linha = mysqli_fetch_array($resultado)){
             ?>
             <tr>
                 <td><?php echo $linha["nome"];?></td>
                 <td><?php echo $linha["estoque"];?></td>
                 <td><?php echo $linha["valor"];?></td>
                 <td><?php echo $linha["categoria"];?></td>
                 <td><a href="editar.php?id=<?php echo $linha["idproduto"];?>"><img src="editar.png" width=30 height=30></a></td>
                 <td><a href="#" onclick="excluir(<?php echo $linha['idproduto'];?>)"><img src="lixeira.png" width=30 height=30></a></td>              
         <?php }
         ?>
         </table>
       
<?php
}else {
    echo "Nenhum Produto Encontrado!!!!!!!!!!!!!!!!";
}
?>