<?php
class user
{
    public $pdo;

    
    function conectar($user, $pass)
    {
        
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "db_projeto";
        $this->pdo = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    }

    function cadastrar($fone, $email, $senha)
    {
        global $pdo;
        $sql = $pdo->prepare("select ID from cliente where EMAIL=:e");
        $sql->bindValue(":e", $email);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return false;
        } else {
            $sql = $pdo->prepare("insert into cliente(TEL, EMAIL, DATA_INSCRICAO, senha)value(:t,:e,NOW(),:s)");

            $sql->bindValue(":t", $fone);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", md5($senha));
            $sql->execute();
            return true;
        }
    }

    /////////////////////LOGIN\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    function logar($email, $senha)
    {
        global $pdo;
        $sql = $pdo->prepare("select id from cliente where email=:e and senha=:s");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", md5($senha));
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            
            $_SESSION['usuario_logado'] = $dado['id'];
            return true;
        } else {
            return false;
        }
    }

    ///////////////SELECT\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    function select($cpf)
    {
        global $pdo;
        $cmd = $pdo->prepare("SELECT * FROM users WHERE cpf=:c");
        $cmd->bindValue(':c', $cpf);
        $cmd->execute();
        $resultado = $cmd->fetch(PDO::FETCH_ASSOC);

        // Retorne o resultado em vez de apenas imprimir
        return $resultado;
    }

    function delete($cpf)
    {
        global $pdo;
        $cmd = $pdo->prepare("SELECT * FROM users WHERE cpf=:c");
        $cmd->bindValue(':c', $cpf);
        $cmd->execute();
        if ($cmd->rowCount() > 0) {
            $cmd = $pdo->prepare("DELETE * FROM users WHERE cpf=:c");
        }
    }


    public function obterNomeCliente($cliente_nome)
    {
        $sql = "SELECT CLIENTE_NOME FROM agendamento WHERE CLIENTE_NOME = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$cliente_nome]);
    
        // Verifica se há resultados
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row['CLIENTE_NOME'];
        }
    }

    public function obterNomeServico($servico_id)
    {
        $sql = "SELECT NOME FROM servico WHERE ID = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$servico_id]);

        // Verifica se há resultados
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row['NOME'];
        }

    }

    public function obterNomeFuncionario($funcionario_id)
    {
        $sql = "SELECT NOME FROM funcionario WHERE ID = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$funcionario_id]);

        // Verifica se há resultados
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row['NOME'];
        }
    }

    public function obterTelCliente($cliente_tel)
    {
        $sql = "SELECT CLIENTE_TEL FROM agendamento WHERE CLIENTE_TEL = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$cliente_tel]);
    
        // Verifica se há resultados
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row['CLIENTE_TEL'];
        }
    }

}