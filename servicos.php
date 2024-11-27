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
    <title>Serviços</title>
</head>
<body>
    <h1>Serviços</h1>
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
        Oferecemos uma gama de serviços projetados para atender às necessidades de nossos usuários, com foco em qualidade, segurança e eficiência. Seja você um iniciante ou um profissional experiente, temos soluções para facilitar sua jornada digital.
        <br><br>
        1. Suporte Técnico: Nossa equipe está pronta para oferecer suporte técnico especializado, ajudando com problemas de sistemas, redes e equipamentos. Garantimos uma resposta rápida e eficaz para resolver suas questões.
        <br><br>
        2. Desenvolvimento Web: Criamos sites e sistemas personalizados, com designs modernos e funcionalidades que atendem às suas necessidades específicas. Oferecemos soluções desde a criação de sites simples até plataformas mais complexas, sempre com foco na usabilidade e desempenho.
        <br><br>
        3. Consultoria em Segurança Digital: A segurança dos seus dados é fundamental. Oferecemos consultoria especializada para proteger suas informações e prevenir ataques cibernéticos, garantindo que suas operações online sejam seguras e confiáveis.
        <br><br>
        4. Treinamentos e Capacitação: Acreditamos no poder do conhecimento. Por isso, oferecemos treinamentos e cursos em diversas áreas da tecnologia, ajudando você a desenvolver novas habilidades e se atualizar sobre as melhores práticas.
        <br><br>
        5. Soluções Personalizadas: Cada cliente é único, e por isso, desenvolvemos soluções sob medida, que se adaptam às suas necessidades. Desde o suporte em TI até a criação de sistemas personalizados, estamos aqui para atender sua demanda de maneira eficaz.
        <br><br>
        Conte conosco para transformar suas ideias em soluções concretas e seguras. Estamos aqui para ajudá-lo a crescer e alcançar seus objetivos!
        </p>
    </main>
    <footer></footer>
</body>
</html>