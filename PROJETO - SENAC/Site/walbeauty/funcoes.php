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
        $dbname = "projeto";
        $pdo = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    }

    function cadastrar($nome, $email, $senha, $fone)
    {
        global $pdo;
        $sql = $pdo->prepare("select id from usuario where email=:e");
        $sql->bindValue(":e", $email);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return false;
        } else {
            $sql = $pdo->prepare("insert into usuario(nome,email,senha,fone)value(:n,:e,:s,:f)");
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", md5($senha));
            $sql->bindValue(":f", $fone);
            $sql->execute();
            return true;
        }
    }

    /////////////////////LOGIN\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function logar($email, $senha)
    {
        global $pdo;
        $sql = $pdo->prepare("select id from usuario where email=:e and senha=:s");
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