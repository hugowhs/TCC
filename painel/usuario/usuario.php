<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
</head>
<body>
    <form action="./editarusuario.php" method="POST">
        <label for="">Nome Completo</label><br>
        <input type="text"><br><br>

        <label for="">Data de Nascimento</label><br>
        <input type="date"><br><br>

        <label for="">Usuário</label><br>
        <input type="text"><br><br>

        <label for="">Senha</label><br>
        <input type="password"><br><br>

        <label for="">País</label><br>
        <input type="text"><br><br>

        <label for="">Estado</label><br>
        <input type="text"><br><br>

        <label for="">E-mail</label><br>
        <input type="email" name="email" id="email"><br><br>

        <label for="">Tel/Cel</label><br>
        <input type="number"><br><br>

        <input type="submit" value="Salvar" name="salvar" id="salvar">
        <input type="submit" value="Deletar" name="deletar" id="deletar">
    </form>
</body>
</html>