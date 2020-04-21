<?php
class Conexao{

    private $usuario = 'root';
    private $senha = '';
    private $local = 'localhost';
    private $banco = 'login';
    protected $conexao;

    private $username;
    private $password;

    public function __construct(){
        $this->conexao = mysqli_connect($this->local, $this->usuario, $this->senha, $this->banco) or die("Erro ao conectar com o banco de dados" . mysqli_error($this->conexao));
    }




    
}
?>