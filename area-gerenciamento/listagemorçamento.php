<?php
require_once "menu.php";
require_once "conexao.php";

echo "<h1> listagem Orçamento </h1>";

$sql = "select * from orçamento";
$resultado = mysqli_query($conn, $sql);

?>
<table border="1">
    <tr>
        <th>Nome</th>
        <th>marca</th>
        <th>modelo</th>
        <th>email</th>
        <th>mensagem</th>
    </tr>
<?php
if(mysqli_num_rows($resultado)>0){
    // converter o resultado para array
    while($dados = mysqli_fetch_array($resultado)){
        $idc = $dados["email"];
        echo "<tr>";
        echo "<td>".$dados["nome"]."</td><td>".$dados["modelo"]."</td> <td>".$dados["marca"]."</td>";
        echo "<td>".$dados["email"]."</td><td>".$dados["mensagem"]."</td>"; 
    }
}
?>
</table>