<?php
if(isset($_POST['email']) && $_POST['senha']){
    $email = $_POST['email']; // falta limpar dados
    $senha = md5($_POST['senha']); // falta limpar dados
    
    //carregamos a conexão com a BD
    require_once "conexao.php";

    $sql = "select * from usuarios where email = '$email' and senha = '$senha'";
    $resultado = mysqli_query($conn, $sql);
    //var_dump($resultado);
    if(mysqli_num_rows($resultado)==1){
        // converter o resultado para array
        $dados = mysqli_fetch_array($resultado);
        //echo "iduser: ".$dados["id"];
        session_start();
        $_SESSION["iduser"] = $dados["id"];
        $_SESSION["usuario"] = $dados["email"];
        header("location:index.php");
        //var_dump($dados);
    }
    else
       
        header("location:index.php");  
}

?>