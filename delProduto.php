<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    </head>
</html>
<?php

require("classes/Produtos.class.php");
$produto = new Produtos();
$query = "SELECT * FROM produtos ORDER BY id desc";
$result = $produto->getData($query);

?>
<?php
require("topSite.html");
?>
 <div class="container">
     <form action="del.php" method="POST">
    <table>
        <thead>
            <tr> 
                <td>ID</td>
                <td>Produto</td>
                <td>Descrição</td>
                <td>Valor</td>
                <td></td>
            </tr>
        </thead>
        <?php
            foreach($result as $res){
                $id = $res['id'];
                $nomeProd = $res['nomeProd'];
                $descrProd = $res['descrProd'];
                $valorProd = $res['valorProd'];
            
        ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $nomeProd; ?></td>
                <td><?php echo $descrProd; ?></td>
                <td><?php echo $valorProd; ?></td>
                <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                <td><input type="submit" value="Deletar"></td>
            </tr>
            <?php }?>
    </table>



 </div>


</body>
</table>