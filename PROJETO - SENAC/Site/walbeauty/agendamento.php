<?php
session_start();

if (!isset($_SESSION['email'])) {
    // Se o usuário não estiver autenticado, redirecione para a página de login ou exiba uma mensagem de erro
    header("Location: loginPage.php"); // Redireciona para a página de login
    exit(); // Interrompe a execução do script
}

include_once "config.php";
require_once "funcoes.php";
$logoutLink = "logout.php";
$email = $_SESSION['email'];
$u = new user;
?>

<!-- AGENDAMENTO -->
<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recupera os valores do formulário
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $servicos = $_POST["servicos"];
    $funcionarios = $_POST["funcionarios"];
    $data = $_POST["data"];
    $hora = $_POST["hora"];
    $email = $_SESSION['email'];

    //REALIZA CONEXÃO COM O BANCO
    $u->conectar('root', "");

    // Inserção na tabela agendamento usando prepared statement
    $sql_agendamento = "INSERT INTO agendamento (FK_SERVICO_ID, FUNCIONARIO_ID, DATA_AGENDAMENTO, HORA_AGENDAMENTO, CLIENTE_NOME, FK_EMAIL, CLIENTE_TEL) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $sql_agendamento = $pdo->prepare($sql_agendamento);
    $sql_agendamento->execute([$servicos, $funcionarios, $data, $hora, $nome, $email, $telefone]);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Sistema - Agendamento</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <link href="https://assets-global.website-files.com/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="https://assets-global.website-files.com/img/webclip.png" rel="apple-touch-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleuser.css">
</head>

<body>
    <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease"
        role="banner" class="navigation-bar w-nav">
        <div class="w-container">
            <a href="index.php" aria-current="page" class="brand-link w-nav-brand w--current">
                <h1 class="brand-text">WalBeauty</h1>
            </a>
            <nav role="navigation" class="navigation-menu w-nav-menu">
                <a href="index.php" id="voltarAoTopo" class="navigation-link w-nav-link"><i
                        class="glyphicon glyphicon-home"></i> Inicio</a>
                <a href="index.php#servicos" class="navigation-link w-nav-link"><i
                        class="glyphicon glyphicon-check"></i> Serviços</a>
                <a href="index.php#somos" class="navigation-link w-nav-link"><i class="glyphicon glyphicon-book"></i>
                    Quem Somos</a>
                <a href="agendamento.php" aria-current="page" class="navigation-link w-nav-link w--current"><i
                        class="glyphicon glyphicon-calendar"></i> Agendamento</a>
                <a style="color: red; font-weight: bolder;" href="<?php echo $logoutLink; ?>" aria-current="page"
                    class="navigation-link w-nav-link w--current"><i class="bi glyphicon glyphicon-log-out"></i>
                    Sair</a>
            </nav>
            <div class="hamburger-button w-nav-button">
                <div class="w-icon-nav-menu"></div>
            </div>
        </div>
    </div><br><br><br><br><br>
    <div class="container-fluid">
        <div class=agendaTitulo>
            <h2 style="background-color: white;" class="text-center">Agendamento</h2><br>
        </div><br>

        <!-- FORMULARIO DE AGENDAMENTO -->
        <form class="form-horizontal" action="" method="POST">

            <!-- CAMPO PARA ADICIONAR NOME -->
            <div class="col-sm-3 col-sm-offset-3">
                <label>Nome</label>
                <input class="form-control" type="text" name="nome" placeholder="Digite seu nome" required>
            </div>
            <!-- FIM NOME -->

            <!-- CAMPO PARA ADICIONAR TELEFONE -->
            <div class="col-sm-3">
                <label>Telefone</label>
                <input id="telefone" class="form-control" type="text" list="listafones" name="telefone" maxlength="14"
                    pattern="\([0-9]{2}\)[0-9]{5}-[0-9]{4}" placeholder="Digite ou selecione um telefone" required>
                <datalist id="listafones"><br>
                    <?php
                    $email = $_SESSION['email'];
                    $sql = "SELECT TEL FROM cliente WHERE EMAIL = :email";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                    $stmt->execute();

                    if ($stmt->rowCount() > 0) {
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo "<option value='" . $row["TEL"] . "'>" . $row["TEL"] . "</option>";
                        }
                    }
                    ?>
                </datalist>
            </div>
            <!-- FIM TELEFONE -->


            <div class="col-sm-6 col-sm-offset-3">
                <label>Serviços</label>

                <!-- LISTA DE SERVIÇOS RESGATADA DO BANCO DE DADOS -->
                <select method="session" name="servicos" class="form-control" required>
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

            </div>
            <!-- FIM DA LISTA DE SERVIÇOS -->

            <!-- LISTA DE FUNCIONÁRIOS RESGATADA DO BANCO DE DADOS -->
            <div class="col-sm-3 col-sm-offset-3">
                <label>Funcionário</label>
                <select name="funcionarios" class="form-control" required>
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
            <!-- FIM DA LISTA DE FUNCIONÁRIOS -->

            <div class="col-sm-1 ">
                <label>Data</label>
                <div class="input-group date data_formato" data-date-format="dd/mm/yyyy">
                    <input class="form-control" type="date" name="data" placeholder="Data do serviço">
                </div>
            </div>
            <div class="col-sm-1">
                <label>Hora</label>
                <div class="input-group date data_formato" data-date-format="HH:ii">
                    <input class="form-control" type="time" name="hora">
                </div>
            </div>

            <div class="col-sm-offset-3 col-sm-6"><br>
                <button type="submit" class="btn btn-success">Agendar</button>
            </div>
        </form>
        <!-- FIM DO FORMULARIO -->

        <!-- SELECT PARA EXIBIÇÃO DA AGENDA NA PAGINA -->
        <div class="col-sm-6 col-sm-offset-3" id="div_conteudo"> <br><br>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                <span class="glyphicon glyphicon-menu-right text-success"></span> Meus agendamentos
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table id="dados" border="0" width="100%">
                                <tr>
                                    <th>Nome</th>
                                    <th>Serviço</th>
                                    <th>Funcionário</th>
                                    <th>Data e hora</th>
                                    <th>Telefone</th>
                                    <th>Status</th> <!-- Adicionando a coluna de status -->
                                </tr>

                                <?php
                                try {
                                    // REALIZA CONEXÃO COM O BANCO
                                    $u->conectar('root', "");

                                    // Consulta SQL para obter dados da tabela de agendamento usando o email
                                    $sql_agendamentos_usuario = "SELECT * FROM agendamento WHERE FK_EMAIL = ?";
                                    $stmt_agendamentos_usuario = $u->pdo->prepare($sql_agendamentos_usuario);
                                    $stmt_agendamentos_usuario->execute([$email]);

                                    // Verifica se há resultados
                                    if ($stmt_agendamentos_usuario->rowCount() > 0) {
                                        // Exibe os resultados
                                        while ($row_agendamento = $stmt_agendamentos_usuario->fetch(PDO::FETCH_ASSOC)) {
                                            // Recupera os nomes associados às chaves estrangeiras
                                            $nome_cliente = $u->obterNomeCliente($row_agendamento['CLIENTE_NOME']);
                                            $nome_servico = $u->obterNomeServico($row_agendamento['FK_SERVICO_ID']);
                                            $nome_funcionario = $u->obterNomeFuncionario($row_agendamento['FUNCIONARIO_ID']);
                                            $cliente_tel = $u->obterTelCliente($row_agendamento['CLIENTE_TEL']);

                                            // Exibe os resultados
                                            echo '<tr>';
                                            echo '<td>' . $nome_cliente . '</td>';
                                            echo '<td>' . $nome_servico . '</td>';
                                            echo '<td>' . $nome_funcionario . '</td>';
                                            echo '<td>' . $row_agendamento['DATA_AGENDAMENTO'] . " às " . $row_agendamento['HORA_AGENDAMENTO'] . '</td>';
                                            echo '<td>' . $cliente_tel . '</td>';
                                            echo '<td>' . $row_agendamento['status'] . '</td>'; // Mostrando o status
                                            echo '<td>';
                                            echo '<form action="excluirAgenda.php" method="post">'; // Alterado para o script de atualização de status
                                            echo '<input type="hidden" name="ID" value="' . $row_agendamento['ID'] . '">';
                                            echo '<button type="submit" id="linkAgenda" class="btn btn-link" onclick="return confirm(\'Tem certeza que deseja cancelar este agendamento?\')"><i class="bi glyphicon glyphicon-trash"></i> Cancelar</button>';
                                            echo '</form>';
                                            echo '</td>';
                                            echo '</tr>';
                                        }
                                    }
                                } catch (PDOException $e) {
                                    echo "Erro ao executar a consulta: " . $e->getMessage();
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        <div class="w-container">
            <div class="w-row">
                <div class="spc w-col w-col-4">
                    <h5>Sobre a walbeauty</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros
                        elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut
                        commodo
                        diam libero vitae erat.</p>
                </div>
                <div class="spc w-col w-col-4">
                    <h5>Links uteis</h5><a href="#" class="footer-link">Phasellus gravida semper nisi</a><a href="#"
                        class="footer-link">Suspendisse nisl elit</a><a href="#" class="footer-link">Dellentesque
                        habitant morbi</a><a href="#" class="footer-link">Etiam sollicitudin ipsum</a>
                </div>
                <div class="w-col w-col-4">
                    <h5>social</h5>
                    <div class="footer-link-wrapper w-clearfix"><img
                            src="https://assets-global.website-files.com/6567d83b7b7ab663a1c292fa/6567d83b7b7ab663a1c29397_social-18.svg"
                            width="20" alt="" class="info-icon" /><a href="#" class="footer-link with-icon">Twitter</a>
                    </div>
                    <div class="footer-link-wrapper w-clearfix"><img
                            src="https://assets-global.website-files.com/6567d83b7b7ab663a1c292fa/6567d83b7b7ab663a1c29378_social-03.svg"
                            width="20" alt="" class="info-icon" /><a href="#" class="footer-link with-icon">Facebook</a>
                    </div>
                    <div class="footer-link-wrapper w-clearfix"><img
                            src="https://assets-global.website-files.com/6567d83b7b7ab663a1c292fa/6567d83b7b7ab663a1c2935f_social-11.svg"
                            width="20" alt="" class="info-icon" /><a href="#"
                            class="footer-link with-icon">Pinterest</a></div>
                    <div class="footer-link-wrapper w-clearfix"><img
                            src="https://assets-global.website-files.com/6567d83b7b7ab663a1c292fa/6567d83b7b7ab663a1c29389_social-06.svg"
                            width="20" alt="" class="info-icon" /><a href="#" class="footer-link with-icon">Google</a>
                    </div>
                    <div class="footer-link-wrapper w-clearfix"><img
                            src="https://assets-global.website-files.com/6567d83b7b7ab663a1c292fa/6567d83b7b7ab663a1c2936c_social-12.svg"
                            width="20" alt="" class="info-icon" /><a href="#" class="footer-link with-icon">Webflow</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer center">
        <div class="w-container">
            <div class="footer-text">Copyright WalSoft Inc.</div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

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
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <!-- MASCARA DE TELEFONE -->
    <script>
        $(document).ready(function () {
            $('#telefone').inputmask('(99)99999-9999');
        });
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>

</html>