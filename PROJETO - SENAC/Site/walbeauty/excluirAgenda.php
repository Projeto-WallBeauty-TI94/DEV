<?php
require_once 'config.php';

if (isset($_POST['ID']) && !empty($_POST['ID'])) {
    $id = $_POST['ID'];
    
    try {
        // Atualiza o status do agendamento para 'cancelado'
        $stmt = $pdo->prepare("UPDATE agendamento SET status = 'cancelado' WHERE ID = ?");
        $stmt->execute([$id]);

        // Verifica se a atualização foi bem-sucedida
        if ($stmt->rowCount() > 0) {
            header("Location: agendamento.php?success=1"); // Redireciona para a página de agendamentos com parâmetro de sucesso
            exit(); // Termina a execução do script após o redirecionamento
        } else {
            header("Location: agendamento.php?error=1"); // Redireciona para a página de agendamentos com parâmetro de erro
            exit(); // Termina a execução do script após o redirecionamento
        }
    } catch (PDOException $e) {
        echo "Erro ao atualizar o status do agendamento: " . $e->getMessage();
    }
} else {
    header("Location: agendamento.php"); // Redireciona para a página de agendamentos se o ID não estiver definido ou estiver vazio
    exit(); // Termina a execução do script após o redirecionamento
}
