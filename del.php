<?php
 require("classes/Produtos.class.php");
 $produtos = new Produtos();
 $id = $_POST['id'];

 $query = "DELETE FROM produtos WHERE id='$id'";
 $result = $produtos->execute($query);
 header("location: delProduto.php");






?>