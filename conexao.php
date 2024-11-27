<?php 
// Conexão com o banco de dados
$connection = new mysqli("localhost", "root", "", "site-loginandposts");

// Verificar conexão
if ($connection->connect_error) {
    die("Erro na Conexão: " . $connection->connect_error);
}
?>