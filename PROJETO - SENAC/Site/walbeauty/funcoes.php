<?php
class user
{
    private $pdo;
    function conectar($user, $pass)
    {
        global $pdo;
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "db_projeto";
        $pdo = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    }

    function cadastrar($nome, $fone, $email, $senha)
    {
        global $pdo;
        $sql = $pdo->prepare("select ID from cliente where EMAIL=:e");
        $sql->bindValue(":e", $email);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return false;
        } else {
            $sql = $pdo->prepare("insert into cliente(NOME, TEL, EMAIL, DATA_INSCRICAO, senha)value(:n,:t,:e,NOW(),:s)");
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":t", $fone);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", md5($senha));
            $sql->execute();
            return true;
        }
    }

    /////////////////////LOGIN\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function logar($email, $senha)
    {
        global $pdo;
        $sql = $pdo->prepare("select id from cliente where email=:e and senha=:s");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", md5($senha));
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            session_start();
            $_SESSION['usuario_logado'] = $dado['id'];
            return true;
        } else {
            return false;
        }
    }

    ///////////////SELECT\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function select($cpf)
    {
        global $pdo;
        $cmd = $pdo->prepare("SELECT * FROM users WHERE cpf=:c");
        $cmd->bindValue(':c', $cpf);
        $cmd->execute();
        $resultado = $cmd->fetch(PDO::FETCH_ASSOC);
    
        // Retorne o resultado em vez de apenas imprimir
        return $resultado;
    }

    public function delete($cpf){
        global $pdo;
        $cmd = $pdo->prepare("SELECT * FROM users WHERE cpf=:c");
        $cmd->bindValue(':c',$cpf);
        $cmd->execute();
        if($cmd->rowCount() > 0){
            $cmd = $pdo->prepare("DELETE * FROM users WHERE cpf=:c");
        }
    }   
}
?>