<?php 
// Inicia a sessão
session_start();

require 'conexao.php';

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // busca no banco de dados
    $sql = "SELECT * FROM usuarios WHERE email = ?"; 
    $stmt = $connection->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            // Verificar senha
            if (password_verify($senha, $user['senha'])) {
                echo "Login bem-sucedido!";
                // Iniciar sessão ou redirecionar o usuário
                $_SESSION['usuario_id'] = $user['id'];
                $_SESSION['usuario_nome'] = $user['nome'];
                $_SESSION['usuario_email'] = $user['email'];
                $_SESSION['logado'] = true;

                // Redireciona para a página inicial ou painel
                header("Location: painel_de_usuario.php");
                exit();
            } else {
                echo "Senha incorreta.";
            }
        } else {
            echo "Usuário não encontrado.";
        }
        $stmt->close();
    } else {
        echo "Erro no SQL: " . $conn->error;
    }
}

$connection->close();
?>