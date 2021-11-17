<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="logar.php" method="POST">
        <label for="log_usuario">Usuário</label><br>
        <input type="text" name="log_usuario" id="log_usuario"><br><br>

        <label for="lof_senha">Senha</label><br>
        <input type="password" name="log_senha" id="log_senha"><br><br>

        <input type="submit" value="Acessar" name="acessar" id="acessar">
        <a href="../cadastro/cadastro.php">Cadastre-se</a>
    </form>
</body>
</html>