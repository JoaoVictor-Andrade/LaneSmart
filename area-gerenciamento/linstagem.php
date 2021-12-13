<?php
require_once "menu.php";
require_once "conexao.php";

echo "<h1>Usários cadastrados</h1>";

$sql = "select * from usuarios";
$resultado = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultado)>0){
    // converter o resultado para array
    while($dados = mysqli_fetch_array($resultado)){
        echo $dados["id"]." - ".$dados["email"]."<br>" ;
    }
}
