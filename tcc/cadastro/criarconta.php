<?php 
require_once '../conexao.php';

$cadusuario = $_POST['cad_usuario'];
$cadsenha = $_POST['cad_senha'];

// Verifica campos vazios
if(!empty($_POST['cad_usuario']) && !empty($_POST['cad_senha'])) {
    // Adiciona Usuário no Banco
    $stmt = $conn->prepare("INSERT INTO login (usuario, senha) VALUES (:usuario, :senha)");
    $stmt->execute(array(
        ':usuario' => $cadusuario,
        ':senha' => $cadsenha
    ));
    header("Location: ../login/login.php");
    die();
} else {
    echo "Preencha todos os dados";
}
?>