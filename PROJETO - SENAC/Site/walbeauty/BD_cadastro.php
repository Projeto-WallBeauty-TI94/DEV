<?php
include_once "config.php";
require_once "funcoes.php";
$u = new user;

if (isset($_POST['enviar'])) {
    $nome = addslashes($_POST['nome']);
    $fone = addslashes($_POST['fone']);
    $email = addslashes($_POST['email']);
    $email2 = addslashes($_POST['email2']);
    $senha = addslashes($_POST['senha']);
    $senha2 = addslashes($_POST['senha2']);
    // $data = addslashes($_POST['data']);


    if (!empty($nome) && !empty($fone) && !empty($email) && !empty($email2) && !empty($senha) && !empty($senha2) ) {
        $u->conectar('root', "");
        if ($u->cadastrar($nome, $fone, $email, $senha)) {
            header("Location: index.php"); // Redireciona para index.php
            exit;
        }
    }
}
