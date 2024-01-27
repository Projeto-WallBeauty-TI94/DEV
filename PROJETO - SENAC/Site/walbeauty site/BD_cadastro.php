<?php
if (isset($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $email2 = addslashes($_POST['email2']);
    $senha = addslashes($_POST['senha']);
    $senha2 = addslashes($_POST['senha2']);
    $fone= addslashes($_POST['fone']);

    if (!empty($nome) && !empty($email) && !empty($senha) && !empty($senha2) && !empty($fone)) {
        $u->conectar('root', "");
        //if ($senha == $senha2) {
            if ($u->cadastrar($nome, $email, $senha, $fone)) {
                //$mensagem = "Cadastrado com sucesso";
                echo '<script>
                        setTimeout(function() {
                            window.location.href = "teste.html";
                        }, 3000);
                      </script>';
            }
        //}
    }
}
?>