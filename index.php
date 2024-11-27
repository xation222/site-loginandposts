<?php 
$usuario_logado = false;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="sobre_nos.php">Sobre Nós</a></li>
            <li><a href="servicos.php">Serviços</a></li>
            <?php if ($usuario_logado): ?>
                <li><a href="painel_de_usuario.php">Painel do Usuário</a></li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
        </ul>

    </header>
    <main>
        <h1>My site with login and posts</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum molestias vero, vel minima accusantium exercitationem, omnis doloribus ullam reiciendis impedit dicta expedita saepe magnam reprehenderit ipsam praesentium tempore inventore quaerat!</p>
    </main>
    <footer>

    </footer>
</body>
</html>