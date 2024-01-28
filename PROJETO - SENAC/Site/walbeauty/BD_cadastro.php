<?php
include_once "config.php";
require_once "funcoes.php";
$u = new user;

if (isset($_POST['enviar'])) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $email2 = addslashes($_POST['email2']);
    $senha = addslashes($_POST['senha']);
    $senha2 = addslashes($_POST['senha2']);
    $fone = addslashes($_POST['fone']);

    if (!empty($nome) && !empty($email) && !empty($email2) && !empty($senha) && !empty($senha2) && !empty($fone)) {
        $u->conectar('root', "");
        if ($u->cadastrar($nome, $email, $senha, $fone)) {
            header("Location: index.php"); // Redireciona para index.php
            exit;
        }
    }
}
