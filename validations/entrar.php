<?php
session_start();

require('classes/FunctionsLogin.class.php');
$usuario = new Usuarios();

$username = $_POST['username'];
$password = $_POST['password'];




if(!empty($username || !empty($password))){
   $conecta = $usuario->logar($username, $password);
if ($conecta){
   $_SESSION['usuario'] = $username;
   header("location:index.php");

}else{
   $_SESSION['MsgCad'] = "Verifique se Usuario ou Senha estão corretos!";
   header("location:login.php");
}

}else {
   $_SESSION['MsgCad'] = "Verifique se algum campo está em branco!";
   header("location:login.php");
}



?>