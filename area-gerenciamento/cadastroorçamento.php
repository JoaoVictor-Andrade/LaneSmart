<?php
require_once "menu.php";
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="orçamento.css">
</head>
<body class="bg">
    <div class="container">
 
    <form  action="addorçamento.php" method ="POST"class="formulario">
            <h2>Orçamento Online</h2>
            <div class="form-control">
                <label for="Nome">Digite seu nome</label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome " >
              
            </div>

            <div class="form-control">
                <label for="digite a marca">Marca</label>
                <input type="marca" name="marca" id="marca" placeholder="Digite a marca" > 
                
            </div>

         

            <div class="form-control">
                <label for="digite o modelo">Modelo</label>
                <input type="modelo" name="modelo" id="modelo" placeholder="Digite o modelo " > 
                
            </div>
            <div class="form-control">
                <label for="email">Digite o email</label>
                <input type="email" name="email" id="senha2" placeholder="Digite seu email">
                
            </div>
  
            <div class="form-control">
            <label for="mensagem"> mensagem:</label>

<textarea id="mensagem" name="mensagem"
          rows="5" cols="33">
</textarea>

            </div>
           
      

            <input type="submit" value="Enviar">
        </form>
    </div>
    
</body>
</html>
</form>