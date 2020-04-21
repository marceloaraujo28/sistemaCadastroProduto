<?php

require("Conexao.class.php");

class Produtos extends Conexao{

    public function __construct(){
        parent::__construct();
    }
    
    public function Cadastrar($nomeProd, $descrProd, $valorProd){

        $sql = "INSERT INTO produtos (nomeProd, descrProd, valorProd) values ('$nomeProd','$descrProd','$valorProd')";
        $query = mysqli_query($this->conexao, $sql);
        $linhas = mysqli_affected_rows($this->conexao);

        if($linhas > 0){
            return true;
        }else{
            return false;
        }

    }

    public function getData($query)
	 {
		 $result = $this->conexao->query($query);
		 
		 if ($result == false){
				return false;
		 }
		 
		 $rows = array();
		 
		 while ($row = $result->fetch_assoc()) {
			 $rows[] = $row;
		 }
		 return $rows;
     }
     
     public function execute($query)
	 {
		 $result = $this->conexao->query($query);
		 
		 if($result == false){
			 echo 'Erro: não pode executar o comando.';
			 return false;
			}else {
					return true;
			}
	}

}

?>