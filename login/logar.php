<?php 
    require_once '../conexao.php';
    $logusuario = $_POST['log_usuario'];
    $logsenha = $_POST['log_senha'];

    // Verifica usuário no banco
    $consulta = $conn->query("SELECT * FROM usuarios WHERE usuario = '$logusuario' AND senha = '$logsenha'");
    if($linha = $consulta->fetch(PDO::FETCH_ASSOC) <= 0) {
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.php';</script>";
        die();
    }else {
        setcookie("login",$logusuario);
        header("Location: ../painel/index.php");
    }
?>