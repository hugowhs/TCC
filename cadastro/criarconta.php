<?php 
require_once '../conexao.php';

$cadusuario = $_POST['cad_usuario'];
$cadsenha = $_POST['cad_usuario'];

if(!empty($_POST['cad_usuario']) && !empty(['cad_usuario'])) {
    $stmt = $conn->prepare('INSERT INTO usuario (usuario, senha) VALUES (:usuario, :senha)');
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