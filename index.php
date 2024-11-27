<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style2.css">
    <title>Home</title>
</head>
<body>
    <h1>Página Inicial</h1>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="index.php">Início</a>
                        <a class="nav-link" href="sobre_nos.php">Sobre Nós</a>
                        <a class="nav-link" href="servicos.php">Serviços</a>
                        <?php if (isset($_SESSION['logado']) && $_SESSION['logado']): ?>
                        <a class="nav-link" href="painel_de_usuario.php">Painel do Usuário</a>
                        <a class="nav-link" href="logout.php">Sair</a>
                        <?php else: ?>
                        <a class="nav-link" href="login_e_registro.php">Login e Registro</a>
                        <?php endif; ?>        
                    </div>
                </div>
            </div>
        </nav>
    </header>
        <div class="container">
        <h2>Meu site de Registro e Login</h2>
        <p>
        Esta página permite que você se registre e faça login para acessar funcionalidades exclusivas. Ao criar uma conta, você poderá aproveitar todos os recursos que oferecemos, mantendo suas informações seguras e acessíveis a qualquer momento.
        <br><br>
        Nosso sistema utiliza um banco de dados para armazenar suas credenciais de forma segura. Durante o processo de registro, você fornecerá seu nome, e-mail e uma senha, que serão criptografados e armazenados de maneira protegida. Ao realizar o login basta inserir seu e-mail e senha para acessar sua conta de forma prática e segura.
        <br><br>
        Por que criar uma conta?<br>
        - Acesso a recursos exclusivos.<br>
        - Personalização do seu painel de usuário.<br>
        - Maior segurança nas suas informações e dados pessoais.
        <br><br>
        Se você já tem uma conta, basta fazer o login. Caso contrário, registre-se em poucos passos e comece a aproveitar o que temos para oferecer!
        </p>
        </div>
    <footer>
    </footer>
</body>
</html>