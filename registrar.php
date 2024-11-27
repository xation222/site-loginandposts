<?php 
// Conexão com o banco de dados
$connection = new mysqli("localhost", "root", "", "usuarios");

// Verificar conexão
if ($connection->connect_error) {
    die("Erro na Conexão: " . $connection->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Criptografando a senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // inserir no banco de dados
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)"; # parece errado, voltar aqui!!!!!!!!!!!!!!!!!!
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sss", $nome, $email, $senha_hash);
        if ($stmt->execute()) {
            echo "Usuário registrado com sucesso!";
        } else {
            echo "Erro ao registrar usuário: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Erro no SQL: " . $conn->error;
    }
}

$conn->close();
?>