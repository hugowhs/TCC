<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
</head>
<body>
    <form action="criarconta.php" method="post">
        <label for="cad_usuario">Usuário</label><br>
        <input type="text" name="cad_usuario" id="cad_usuario"><br><br>

        <label for="cad_senha">Senha</label><br>
        <input type="password" name="cad_senha" id="cad_senha"><br><br>

        <input type="submit" value="Cadastrar" name="cadastrar" id="cadastrar">
    </form>
</body>
</html>