<?php
require_once "menu.php";
?>

<h1>Cadastrar novo usuário</h1>
<form action="addusuario.php" method ="POST">
    Email: <input type="email" name="email" id="email" ><br>
    Senha: <input type="password" name="senha" id="senha" ><br>
    <button type="submit">Enviar</button>
</form>