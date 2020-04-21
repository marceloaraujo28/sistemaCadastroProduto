<?php
require("Conexao.class.php");

class Usuarios extends Conexao{
        
        public function logar($username, $password){

            $this->username = $username;
            $this->password = md5($password);

            $select = "SELECT * FROM usuarios WHERE nome = '$this->username' and senha = '$this->password'";
            $query = mysqli_query($this->conexao, $select) or die(mysqli_error($this->conexao));
            $linhas = mysqli_num_rows($query);

            if($linhas > 0){
                return true;
            }else{
                return false;
            }

        }

        public function Cadastrar($username, $senha, $email){
            
            $pass = md5($senha);

            $insert = "INSERT INTO usuarios(nome, senha, email) values ('$username', '$pass', '$email')";
            $exec = mysqli_query($this->conexao, $insert);
            $result = mysqli_affected_rows($this->conexao);
            
            
            if($result> 0){
                return true;
            }else{
                return false;
            }


        }

        public function unic($login, $email){

            $sql = "SELECT * FROM usuarios WHERE nome = '$login' or email = '$email'";
            $query = mysqli_query($this->conexao, $sql) or die(mysqli_error($this->conexao));
            $result = mysqli_num_rows($query);

            if($result > 0){
                return true;
            }else{
                return false;
            }

        }

        public function sairsessao(){

            session_start();
            session_destroy();

        }

        
    }

?>