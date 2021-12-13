<?php

if(isset($_POST['email']) && $_POST['senha']){
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); 
    $senha = filter_var($_POST['senha'], FILTER_SANITIZE_STRING); 
    $senha = md5( $senha); 

    require_once "conexao.php";
    $sql = "insert into usuarios(email, senha) values('$email','$senha')";
    if(mysqli_query($conn, $sql))
        //echo "usuário inserido";
        header("location:linstagem.php");
    else
        echo "Houve um erro.. ".mysqli_erro($conn);
}
    
 