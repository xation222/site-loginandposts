<?php 
session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: login_e_registro.php'); // Redireciona para o login
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style2.css">
    <title>Painel</title>
</head>
<body>
    <h1>Painel de Usuário</h1>

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
    <main>
        <h2><?php echo "Bem-vindo " . $_SESSION['usuario_nome'] . "!"?></h2>
        <p></p>
    </main>
    <footer></footer>
</body>
</html>