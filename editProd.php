<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    </head>
</html>
<?php
require("classes/Produtos.class.php");

$mostrar = new Produtos();
$query = "SELECT * FROM produtos";
$result = $mostrar->getData($query);


?>
<?php
require("topSite.html");
?>
<center>
    <div class="container">
    <table border="1">
        <thead>
        <tr>
            <td>ID:</td>
            <td>Produto</td>
            <td>Descrição</td>
            <td>Valor</td>
            <td></td>
        </tr>
        </thead>
<form action="edit.php" method="POST">
        <?php

        foreach ($result as $res){
            echo "<tr>";
            echo "<td>".$res['id']."</td>";
            echo "<td>".$res['nomeProd']."</td>";
            echo "<td>".$res['descrProd']."</td>";
            echo "<td>".$res['valorProd']."</td>";
            echo "<td><input type='hidden' name='id' value='".$res['id']."'";
            echo "<td><input type='submit' value='Editar'";
            echo "</tr>";
        }
        ?>

</form>
    </table>
    </div>
</center>