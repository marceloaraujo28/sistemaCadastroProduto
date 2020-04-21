<?php
require("topSite.html");
?>

<div class="cx-login">
        <h1>Cad Produto</h1>
        <form method="post">
                <input type="text" name="nomeProd" class="inputuser" placeholder="Nome do Produto">
                <input type="text" name="descrProd" class="inputuser" placeholder="descrição do Produto">
                <input type="number" name="valorProd" class="inputuser" placeholder="Valor do Produto">
                <input type="submit" class="inputsub" value="Cadastrar">
        </form>
    </div> 
<center>
    <?php
        
        if($_POST){
        require("classes/Produtos.class.php");
        $prod = new Produtos();

        $nomeProd = trim($_POST['nomeProd']);
        $descrProd = trim($_POST['descrProd']);
        $valorProd = trim($_POST['valorProd']);

        if(!empty($nomeProd) and !empty($descrProd) and !empty($valorProd)){
                $prod->Cadastrar($nomeProd, $descrProd, $valorProd);
                if($prod){
                   echo "Produto Cadastrado com sucesso";     
                }else{
                   echo "Erro no Cadastro do Produto";     
                }
        }else{
                echo "Verifique se algum campo está em branco";
        }

        
        }
        

    ?>
</center>


</body>
</html>