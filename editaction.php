<?php
require("classes/Produtos.class.php");
$produtos = new Produtos();

$id = $_POST['idProd'];
$nomeProd = $_POST['nomeProd'];
$descrProd = $_POST['descrProd'];
$valorProd = $_POST['valorProd'];

if(!empty($nomeProd) && !empty($descrProd) && !empty($valorProd)){
    $query = "UPDATE produtos SET nomeProd='$nomeProd', descrProd='$descrProd', valorProd='$valorProd' WHERE id='$id'";
    $result = $produtos->execute($query);
    header("location: editProd.php");
}else{
    echo "Verifique se algum campo está em branco";
}

?>