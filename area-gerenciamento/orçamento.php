<?php
require_once "../include/conexao.php";

if(isset($_GET['id'])){
    $id = $_GET['id']; 

    $sql = "delete from orçamento where id = $id";
    if(mysqli_query($conn, $sql))
        header("location:listagemorçamento.php");
    else
        echo "Houve um erro.. ".mysqli_erro($conn);
}