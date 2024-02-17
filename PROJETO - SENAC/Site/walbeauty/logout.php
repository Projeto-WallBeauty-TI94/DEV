<?php
// Inicia a sessão, se ainda não estiver iniciada
session_start();

// Destroi todos os dados da sessão
session_destroy();

// Redireciona para a página index.php
header("Location: index.php");
exit; // Certifique-se de sair do script após redirecionar
?>