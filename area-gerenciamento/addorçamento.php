<?php


if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
	$marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
	$email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    require_once "conexao.php";

    $sql = "insert into orçamento(nome,marca, modelo, email,mensagem) values('$nome','$marca','$modelo','$email','$mensagem')";
    //echo $sql."<br>";
    if(mysqli_query($conn, $sql))
        //echo "orçamento inserido";
        header("location:listagemorçamento.php");
    else
        echo "Houve um erro.. ".mysqli_erro($conn);
}