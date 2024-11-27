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
    <title>Sobre Nós</title>
</head>
<body>
    <h1>Sobre Nós</h1>
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
        <p>
        Somos uma equipe dedicada a criar soluções práticas e seguras para nossos usuários. Nosso objetivo é oferecer uma plataforma simples, eficiente e de fácil acesso para que você possa aproveitar todos os recursos sem complicação.
        <br><br>
        Com um foco em segurança e praticidade, buscamos constantemente melhorar a experiência de nossos usuários. Acreditamos que a tecnologia deve ser acessível a todos, e estamos aqui para garantir que você tenha uma navegação segura e sem preocupações.
        <br><br>
        Nosso time é composto por profissionais apaixonados por tecnologia e inovação, sempre prontos para oferecer o melhor suporte e desenvolvimento de novas funcionalidades. Estamos comprometidos em criar um ambiente online confiável e amigável, onde a sua segurança e satisfação são nossas maiores prioridades.
        <br><br>
        Seja bem-vindo à nossa plataforma! Estamos felizes em tê-lo conosco.
        </p>
    </main>
    <footer></footer>
</body>
</html>