<?php

require("classes/Produtos.class.php");
$produtos = new Produtos();

$id = $_POST['id'];
$query = " SELECT * FROM produtos WHERE id = '$id'";
$result = $produtos->getData($query);

foreach($result as $res){
    $nomeProd = $res['nomeProd'];
    $descrProd = $res['descrProd'];
    $valorProd = $res['valorProd'];
}


?>

<?php
require("topSite.html");
?>
<center>
<form method="POST" action="editaction.php">
<table>

<tr>
    <td>Nome do Produto: </td>
    <td><input type="text" name="nomeProd" value="<?php echo $nomeProd; ?>"></td>
</tr>
<tr>
    <td>Descrição do Produto: </td>
    <td><input type="textarea" name="descrProd" value="<?php echo $descrProd; ?>"></td>
</tr>
<tr>
    <td>Valor Produtos: </td>
    <td><input type="number" name="valorProd" value="<?php echo $valorProd; ?>"></td>
</tr>
<tr>
    <td><input type="hidden" name="idProd" value="<?php echo $id; ?>"></td>
    <td><input type="submit" name="editarSubmit" value="Editar"></td>
</tr>


</table>
</form>
</center>











</body>
</table>