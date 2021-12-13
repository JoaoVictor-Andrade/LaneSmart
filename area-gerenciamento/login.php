<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login em php</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="container">
    <div>testar com asd@asd.com e 123</div>
        <form action="processarlogin.php" id="formulario" class="formulario" method = "POST">
            <h2>Login</h2>
            <div class="form-control">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Digite seu email" required>
                <small>Erro</small>
            </div>

            <div class="form-control">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                <small>Erro</small>
            </div>
            <button type="submit">Enviar</button>
            
          
        </form>
        
    </div>
        
</body>
</html>