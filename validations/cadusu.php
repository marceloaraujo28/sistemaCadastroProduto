<?php

session_start();

require('classes/FunctionsLogin.class.php');
$usuario = new Usuarios();

$username = $_POST['username'];
$password = $_POST['password'];
$reppasswprd = $_POST['reppassword'];
$email = $_POST['email'];


    if(!empty($username) || !empty($password) || !empty($reppasswprd) || !empty($email) ){
        if($password    ==  $reppasswprd){
            $unic = $usuario->unic($username, $email);

            if($unic == false){
                $cad = $usuario->Cadastrar($username, $password, $email);

                if($cad){
                    $_SESSION['MsgCad'] = "Cadastrado com sucesso!<strong><a href='login.php'> Fazer Login</a></strong>";
                    header("location:cadastrousu.php");
                    
                }else{
                    $_SESSION['MsgCad'] = "Erro no cadastro do usuario!";
                    header("location:cadastrousu.php");
                }        
            }else{
                $_SESSION['MsgCad'] = "Usuário ou email ja existem!";
                header("location:cadastrousu.php");
            }

        }else{
            $_SESSION['MsgCad'] = "Erro na confirmação de senha!";
            header("location:cadastrousu.php");
        }
    }else{
        $_SESSION['MsgCad'] = "Verifique se algum campo está em branco!";
        header("location:cadastrousu.php");
    }










?>