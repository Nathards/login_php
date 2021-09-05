<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    if(!isset($_SESSION['Login'])){
        
        if(isset($_POST['acao'])){
            $login = 'natha';
            $senha = '1234';

            $loginForm = $_POST['loginForm'];
            $senhaform = $_POST['senha'];

            if($login = $loginForm && $senha == $senhaform){
                $_SESSION['login']  = true;
                header('location:index.php');
            } else{
                echo 'dados invalidos';
            }
        }

        include('login.php');
    } else {
        if(isset($_GET['logout'])){
            unset($_SESSION['login']);
            session_destroy();
            header('location:index.php');
        }
        include('home.php');
    }
?>
</body>
</html>