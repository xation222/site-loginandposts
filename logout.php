<?php
session_start();
session_destroy(); // Encerra a sessão
header('Location: login_e_registro.php'); // Redireciona para o login
exit();
?>
