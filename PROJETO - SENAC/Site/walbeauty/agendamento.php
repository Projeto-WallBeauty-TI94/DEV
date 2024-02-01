<?php
session_start();

if (!isset($_SESSION['usuario_logado'])) {
    // Se o usuário não estiver autenticado, redirecione para a página de login ou exiba uma mensagem de erro
    header("Location: loginPage.php"); // Redireciona para a página de login
    exit; // Interrompe a execução do script
}

include_once "config.php";
require_once "funcoes.php";
$u = new user;

// TESTE OBTER EMAIL DO CLIENTE APÓS LOGIN
$email_cliente = $_SESSION['email'];

$sql_id_cliente = "SELECT ID FROM cliente WHERE EMAIL = ?";
$stmt_id_cliente = $pdo->prepare($sql_id_cliente);
$stmt_id_cliente->execute([$email_cliente]);
$row_id_cliente = $stmt_id_cliente->fetch(PDO::FETCH_ASSOC);
$id_cliente = $row_id_cliente["ID"];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css">
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic", "Roboto:300,regular,500"]
            }
        });
    </script>
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <link href="https://assets-global.website-files.com/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="https://assets-global.website-files.com/img/webclip.png" rel="apple-touch-icon" />
    <link rel="stylesheet" href="style.css">
    <title>Sistema - Agendamento</title>

<body>
    <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navigation-bar w-nav">
        <div class="w-container">
            <a href="/" aria-current="page" class="brand-link w-nav-brand w--current">
                <h1 class="brand-text">WalBeauty</h1>
            </a>
            <nav role="navigation" class="navigation-menu w-nav-menu">
                <a href="index.php" aria-current="page" class="navigation-link w-nav-link w--current">Inicio</a>
                <a href="loginPage.php" class="navigation-link w-nav-link">Login</a>
            </nav>
            <div class="hamburger-button w-nav-button">
                <div class="w-icon-nav-menu"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 class="text-center">Agendamento</h1><br>
        </div><br>
        <form class="form-horizontal" action="" method="POST">
            <div class="col-sm-3 col-sm-offset-3">
                <label>Nome</label>
                <input class="form-control" type="text" name="nome" placeholder="Digite seu nome" required>
            </div>
            <div class="col-sm-3">
                <label>Telefone</label>
                <input class="form-control" type="text" name="telefone" placeholder="Digite seu telefone" required>
            </div>
            <div class="col-sm-6 col-sm-offset-3">
                <label>Serviços</label>

                <!-- LISTA DE SERVIÇOS RESGATADA DO BANCO DE DADOS -->
                <select method="session" name="servicos" class="form-control">
                    <option value="" selected=>Selecione um serviço</option>

                    <!-- QUERY PARA RESGATAR OS DADOS DA TABELA SERVICO -->
                    <?php
                    $sql = "select ID, NOME, PRECO from servico";
                    $sql = $pdo->query($sql);
                    if ($sql->rowCount() > 0) {
                        // Loop pelos resultados e exibir em uma lista dropdown
                        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                            echo "<option value='" . $row["ID"] . "'>" . $row["NOME"] . " - " . "R$" . $row["PRECO"] . "</option>";
                        }
                    }
                    ?>
                    <!-- FIM DA QUERY -->
                </select>
                <!-- FIM DA LISTA DE SERVIÇOS -->
            </div>

            <div class="col-sm-3 col-sm-offset-3">
                <label>Funcionário</label>
                <select name="funcionarios" class="form-control">
                    <option value="" selected=>Quem irá atendê-lo?</option>

                    <!-- QUERY PARA RESGATAR OS DADOS DA TABELA FUNCIONARIO -->
                    <?php
                    $sql = "select ID, NOME, SOBRENOME from funcionario";
                    $sql = $pdo->query($sql);
                    if ($sql->rowCount() > 0) {
                        // Loop pelos resultados e exibir em uma lista dropdown
                        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                            echo "<option value='" . $row["ID"] . "'>" . $row["NOME"] . " " . $row["SOBRENOME"] . "</option>";
                        }
                    }
                    ?>
                    <!-- FIM DA QUERY -->
                </select>
            </div>

            <div class="col-sm-3">
                <label>Data e hora</label>
                <div class="input-group date data_formato" data-date-format="dd/mm/yyyy HH:ii">
                    <input class="form-control" type="text" name="data" placeholder="Data do serviço">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </span>
                </div>
            </div>


            <div class="col-sm-offset-3 col-sm-6"><br>
                <button type="submit" class="btn btn-success">Agendar</button>
                <button class="btn btn-primary btn_carrega_conteudo" name="agenda" id="agenda">Ver agendamentos</button><br><br>
                <?php
                // Verifica se o formulário foi enviado
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    // Recupera os valores do formulário
                    $nome = $_POST["nome"];
                    // $telefone = $_POST["telefone"];
                    $servicos = $_POST["servicos"];
                    $funcionarios = $_POST["funcionarios"];
                    $data = $_POST["data"];

                    //REALIZA CONEXÃO COMO BANCO
                    $u->conectar('root', "");

                    // Inserção na tabela cliente usando prepared statement
                    $sql_cliente = "insert into cliente (NOME) VALUES (?)";
                    $sql_cliente = $pdo->prepare($sql_cliente);
                    $sql_cliente->execute([$nome]);

                    // Obter o ID do cliente recém-inserido
                    $id_cliente = $pdo->lastInsertId();

                    // Busca o nome do serviço usando o ID
                    $sql_nome_servico = "SELECT NOME FROM servico WHERE ID = ?";
                    $stmt_nome_servico = $pdo->prepare($sql_nome_servico);
                    $stmt_nome_servico->execute([$servicos]);
                    $row_nome_servico = $stmt_nome_servico->fetch(PDO::FETCH_ASSOC);
                    $nome_servico = $row_nome_servico["NOME"];

                    // Busca o nome do funcionário usando o ID
                    $sql_nome_funcionario = "SELECT NOME, SOBRENOME FROM funcionario WHERE ID = ?";
                    $stmt_nome_funcionario = $pdo->prepare($sql_nome_funcionario);
                    $stmt_nome_funcionario->execute([$funcionarios]);
                    $row_nome_funcionario = $stmt_nome_funcionario->fetch(PDO::FETCH_ASSOC);
                    $nome_funcionario = $row_nome_funcionario["NOME"] . " " . $row_nome_funcionario["SOBRENOME"];

                    // Inserção na tabela agendamento usando prepared statement
                    $sql_agendamento = "INSERT INTO agendamento (FK_SERVICO_ID, FUNCIONARIO_ID, DATA_AGENDAMENTO, FK_CLIENTE_ID) VALUES (?, ?, ?, ?)";
                    $sql_agendamento = $pdo->prepare($sql_agendamento);
                    $sql_agendamento->execute([$servicos, $funcionarios, $data, $id_cliente]);
                    // Exibe os valores
                    echo "<p>Nome: $nome</p>";
                    echo "<p>Serviço: $nome_servico</p>";
                    echo "<p>Funcionário: $nome_funcionario</p>";
                    echo "<p>Data e Hora: $data</p>";
                }
                ?>
            </div>

        </form>


        <div class="col-sm-6 col-sm-offset-3" id="div_conteudo"><!-- div onde será exibido o conteúdo-->
            <img id="loader" src="loader.gif" style="display:none;margin: 0 auto;">
        </div>


        <!-- FOOTER -->
    </div>
    <div class="footer">
        <div class="w-container">
            <div class="w-row">
                <div class="spc w-col w-col-4">
                    <h5>Sobre a walbeauty</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros
                        elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo
                        diam libero vitae erat.</p>
                </div>
                <div class="spc w-col w-col-4">
                    <h5>Links uteis</h5><a href="#" class="footer-link">Phasellus gravida semper nisi</a><a href="#" class="footer-link">Suspendisse nisl elit</a><a href="#" class="footer-link">Dellentesque
                        habitant morbi</a><a href="#" class="footer-link">Etiam sollicitudin ipsum</a>
                </div>
                <div class="w-col w-col-4">
                    <h5>social</h5>
                    <div class="footer-link-wrapper w-clearfix"><img src="https://assets-global.website-files.com/6567d83b7b7ab663a1c292fa/6567d83b7b7ab663a1c29397_social-18.svg" width="20" alt="" class="info-icon" /><a href="#" class="footer-link with-icon">Twitter</a>
                    </div>
                    <div class="footer-link-wrapper w-clearfix"><img src="https://assets-global.website-files.com/6567d83b7b7ab663a1c292fa/6567d83b7b7ab663a1c29378_social-03.svg" width="20" alt="" class="info-icon" /><a href="#" class="footer-link with-icon">Facebook</a>
                    </div>
                    <div class="footer-link-wrapper w-clearfix"><img src="https://assets-global.website-files.com/6567d83b7b7ab663a1c292fa/6567d83b7b7ab663a1c2935f_social-11.svg" width="20" alt="" class="info-icon" /><a href="#" class="footer-link with-icon">Pinterest</a></div>
                    <div class="footer-link-wrapper w-clearfix"><img src="https://assets-global.website-files.com/6567d83b7b7ab663a1c292fa/6567d83b7b7ab663a1c29389_social-06.svg" width="20" alt="" class="info-icon" /><a href="#" class="footer-link with-icon">Google</a>
                    </div>
                    <div class="footer-link-wrapper w-clearfix"><img src="https://assets-global.website-files.com/6567d83b7b7ab663a1c292fa/6567d83b7b7ab663a1c2936c_social-12.svg" width="20" alt="" class="info-icon" /><a href="#" class="footer-link with-icon">Webflow</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer center">
        <div class="w-container">
            <div class="footer-text">Copyright Velocity Inc. Made in Webflow.</div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/locales/bootstrap-datetimepicker.pt-BR.js"></script>
    <script type="text/javascript">
        $('.data_formato').datetimepicker({
            weeKStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1,
            language: "pt-BR",
            startDate: '-0d'
        });

        $(document).ready(function() { // Ao carregar a página faça o conteudo abaixo
            $('.btn_carrega_conteudo').click(function() { // Ao clicar no elemento que contenha a classe .btn_carrega_conteudo faça...

                var carrega_url = this.id; //Carregar url pegando os dados pelo ID
                carrega_url = carrega_url + '_listar.php'; //Carregar a url e o conteudo da página

                $.ajax({ //Carregar a função ajax embutida no jQuery
                    url: carrega_url,

                    //Variável DATA armazena o conteúdo da requisição
                    success: function(data) { //Caso a requisição seja completada com sucesso faça...
                        $('#div_conteudo').html(data); // Incluir o conteúdo dentro da DIV
                    },

                    beforeSend: function() { //Antes do envio do cabeçalho faça...
                        $('#loader').css({
                            display: "block"
                        }); //carregar a imagem de load
                    },

                    complete: function() { //Após o envio do cabeçalho faça...
                        $('#loader').css({
                            display: "none"
                        }); //esconder a imagem de load
                    }
                });
            });
        });
    </script>
</body>

</html>