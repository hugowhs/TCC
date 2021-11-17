<?php 
$host = 'localhost';
$port = 3306;
$dbname = 'tcc';
$user = 'root';
$pass = 'root';

// Conexão com o BD

try {
    $conn = New PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pass);
    echo "Banco de dados conectado!";
} catch(PDOException $err) {
    echo "Banco de dados não conectado: " . $err->getMessage();
}
?>