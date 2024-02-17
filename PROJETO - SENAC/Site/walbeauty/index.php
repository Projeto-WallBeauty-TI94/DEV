<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>WalBeauty</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylenav.css">
    <?php
    session_start();
    ?>
</head>

<body>
    <?php
    if (isset($_SESSION['email'])) {
        // Usuário está logado
        $agenda = "agendamento.php";
        $logoutLink = "logout.php";
    } else {
        // Usuário não está logado
        $loginLink = "loginPage.php";
        $homeLink = "home.php";
        $cadastro = "cadastro.php";
    }

    ?>
    <div id="inicio" data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease"
        data-easing2="ease" role="banner" class="navigation-bar w-nav">
        <div id="fixed-header" class="w-container">
            <a href="index.php" aria-current="page" class="brand-link w-nav-brand w--current"
                onclick="scrollToElement('inicio')">
                <h1 class="brand-text"><img class="img-logo" src="logo.png" alt=""> WalBeauty</h1>
            </a>
            <nav role="navigation" class="navigation-menu w-nav-menu">
                <?php if (isset($_SESSION['email'])): ?>
                    <a href="#inicio" id="voltarAoTopo" class="navigation-link w-nav-link w--current"
                        onclick="scrollToElement('inicio')"><i class="glyphicon glyphicon-home"></i> Inicio</a>
                    <a href="#servicos" class="navigation-link w-nav-link" onclick="scrollToElement('servicos')"><i
                            class="glyphicon glyphicon-check"></i>
                        Serviços</a>
                    <a href="#somos" class="navigation-link w-nav-link" onclick="scrollToElement('somos')"><i
                            class="glyphicon glyphicon-book"></i> Quem
                        Somos</a>
                    <a href="<?php echo $agenda; ?>" aria-current="page" class="navigation-link w-nav-link"><i
                            class="glyphicon glyphicon-calendar"></i> Agendamento</a>
                    <a style="color: red; font-weight: bolder;" href="<?php echo $logoutLink; ?>" aria-current="page"
                        class="navigation-link w-nav-link w--current"><i class="bi glyphicon glyphicon-log-out"></i>
                        Sair</a>
                <?php else: ?>
                    <a href="#inicio" id="voltarAoTopo" class="navigation-link w-nav-link w--current"
                        onclick="scrollToElement('inicio')"><i class="glyphicon glyphicon-home"></i> Inicio</a>
                    <a href="#servicos" class="navigation-link w-nav-link" onclick="scrollToElement('servicos')"><i
                            class="glyphicon glyphicon-check"></i>
                        Serviços</a>
                    <a href="#somos" class="navigation-link w-nav-link" onclick="scrollToElement('somos')"><i
                            class="glyphicon glyphicon-book"></i> Quem
                        Somos</a>
                    <a href="<?php echo $loginLink; ?>" class="navigation-link w-nav-link"><i
                            class="glyphicon glyphicon-log-in"></i> Entrar</a>
                    <a href="<?php echo $cadastro; ?>" class="navigation-link w-nav-link"><i
                            class="glyphicon glyphicon-user"></i> Cadastre-se</a>
                <?php endif; ?>
            </nav>
            <div class="hamburger-button w-nav-button">
                <div class="w-icon-nav-menu"></div>
            </div>
        </div>
    </div>



    <div class="containerCar">

        <div class="hero-section centered">
            <h1 class="hero-heading">Agende uma visita</h1>
            <div class="hero-subheading">Crie uma conta ou faça login</div>
            <div>
                <a href="cadastro.php" class="button">Cadastre-se</a>
                <a href="loginPage.php" class="hollow-button all-caps">Entrar</a>
            </div>
        </div>

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/slide1.jpg" alt="...">

                </div>
                <div class="item">
                    <img src="img/slide2.jpg" alt="...">

                </div>
                <div class="item">
                    <img src="img/slide4.jpg" alt="...">

                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>





    <style>
        .precos-container {
            display: flex;
            flex-direction: column;
        }

        .precos-item {
            display: flex;
            justify-content: space-between;
        }
    </style>

    <div id="servicos" class="section accent">
        <div class="w-container">
            <div class="section-title-group">
                <h2 class="section-heading centered white">serviços</h2>
                <div class="section-subheading center off-white">Serviços de beleza</div>
            </div>
            <div class="w-row serviRow">
                <div class="w-col w-col-6">
                    <div class="white-box transparent"><img src="img/man.jpg" width="600"
                            sizes="(max-width: x479p) 85vw, (max-width: 767px) 88vw, (max-width: 991px) 324px, 430px"
                            srcset="img/man.jpg 500w, img/man.jpg 800w, img/man.jpg 999w" alt=""
                            class="fullwidth-image" />
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalM"
                            onclick="mostrarPrecosM()">
                            Masculino
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModalM" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Serviços para Homens</h4>
                                    </div>
                                    <div class="modal-body" id="modalBodyM">
                                        <!-- O conteúdo do modal será preenchido aqui dinamicamente pelo JavaScript -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="w-col w-col-6">
                    <div class="white-box transparent"><img src="img/woman.jpg" width="499.5"
                            sizes="(max-width: 479px) 85vw, (max-width: 767px) 88vw, (max-width: 991px) 324px, 430px"
                            srcset="img/woman.jpg 500w, img/woman.jpg 800w, img/woman.jpg 999w" alt=""
                            class="fullwidth-image" />
                        <button type="button" class="btn btn-secondary btn-lg" data-toggle="modal"
                            data-target="#myModalF" onclick="mostrarPrecosF()">
                            Feminino
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModalF" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Serviços para mulheres</h4>
                                    </div>
                                    <div class="modal-body" id="modalBodyF">
                                        <!-- O conteúdo do modal será preenchido aqui dinamicamente pelo JavaScript -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br><br><br>
            <a href="#outrosServicos" class="hollow-button" onclick="scrollToElement('outrosServicos')">
                <i class="glyphicon glyphicon-chevron-down" style="font-size: 35px;"></i>
            </a>
        </div>
    </div>
    <div id="outrosServicos" class="section">
        <div class="w-container">
            <div class="section-title-group">
                <h2 class="section-heading centered">Outros serviços</h2>
                <div class="section-subheading center"></div>
            </div>
            <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic2" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic2" data-slide-to="4"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/servico/alonga.jpg" alt="...">
                        <div class="carousel-caption">
                            Alongamento de Cílios e Técnica profissional para realçar o olhar com cílios mais longos.
                            55.00
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/servico/corporal.png" alt="...">
                        <div class="carousel-caption">
                            Massagem Relaxante e Massagem terapêutica para relaxamento e bem-estar. 80.00
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/servico/crianças.jpg" alt="...">
                        <div class="carousel-caption">
                            Corte e Penteados para Crianças, Serviços especializados para crianças e incluindo cortes e
                            penteados. 25.00
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/servico/bancelha.jpg" alt="...">
                        <div class="carousel-caption">
                            Design de Sobrancelhas e Tintura, Modelagem precisa e tintura para realçar as sobrancelhas
                            de homens e mulheres. 40.00
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/servico/pé.jpg" alt="...">
                        <div class="carousel-caption">
                            Spa dos Pés, Tratamento revitalizante para pés e incluindo esfoliação e massagem. 35.00
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div id="somos" class="section">
        <div class="w-container">
            <div class="section-title-group">
                <h2 class="section-heading centered">Quem Somos</h2>
                <div class="section-subheading center">Somos um dos mais conceituados studios de beleza</div>
            </div>
            <div class="w-row fazemos">
                <div class="w-col w-col-4">
                    <div class="white-box">
                        <img src="img/icones/missao.png" alt="..." width="100px">
                        <p>Nossa missão é proporcionar uma experiência única aos nossos clientes, oferecendo uma ampla
                            gama de produtos de alta qualidade.</p>
                    </div>
                </div>
                <div class="w-col w-col-4">
                    <div class="white-box">
                        <img src="img/icones/visao.png" alt="..." width="100px">
                        <p>Somos uma equipe apaixonada por beleza e bem-estar, dedicada a oferecer os melhores produtos
                            e dicas para realçar a sua beleza natural.</p>
                    </div>
                </div>
                <div class="w-col w-col-4">
                    <div class="white-box">
                        <img src="img/icones/valores.png" alt="..." width="100px">
                        <p>É por isso que nos esforçamos para promover uma abordagem holística da beleza, incentivando o
                            autocuidado e o bem-estar em todas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2>Onde nos encontrar:</h2>
    <div class="mapa">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.7942871682253!2d-46.45911812467051!3d-23.539900178814563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66bf22458913%3A0xecdac462b58a9475!2sSenac%20Itaquera!5e0!3m2!1sen!2sbr!4v1701821632105!5m2!1sen!2sbr"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><br>

    <hr><br>

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

    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6567d83b7b7ab663a1c292fa"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <script src="script.js" type="text/javascript"></script>

    <script>
        $('#myModalM').on('shown.bs.modal', function () {
            $('#myInput').focus()
        })
    </script>
    <script>
        $('#myModalF').on('shown.bs.modal', function () {
            $('#myInput').focus()
        })
    </script>

    <script>
        function mostrarPrecosM() {
            var precos = {
                "Corte de cabelo": 30.00,
                "Barba": 25.00,
                "Corte e barba": 45.00,
                "Coloração": 60.00,
                "Corte e coloração": 65.00,
                "Design de sobrancelhas": 20.00,
                "Tratamento capilar": 40.00,
                "Tratamento facial": 50.00,
                "Pedicure": 30.00,
                "Manicure": 25.00,
                "Manicure e pedicure": 35.00,
                "Cauterização capilar": 50.00
            };

            var conteudo = '<div class="precos-container">';
            for (var servico in precos) {
                conteudo += '<div class="precos-item"><div>' + servico + '</div><div>R$' + precos[servico].toFixed(2) + '</div></div>';
            }
            conteudo += '</div>';

            document.getElementById('modalBodyM').innerHTML = conteudo;
        }
    </script>

    <script>
        function mostrarPrecosF() {
            var precos = {
                "Corte de cabelo": 50.00,
                "Coloração": 80.00,
                "Escova progressiva": 120.00,
                "Hidratação capilar": 70.00,
                "Penteado especial": 65.00,
                "Depilação": 45.00,
                "Maquiagem para noiva": 90.00,
                "Maquiagem para eventos especiais": 70.00,
                "Limpeza profunda de pele": 80.00,
                "Penteado para festa": 75.00,
                "Corte e coloração": 65.00,
                "Design de sobrancelhas": 20.00,
                "Tratamento capilar": 40.00,
                "Tratamento facial": 50.00,
                "Pedicure": 30.00,
                "Manicure": 25.00,
            };

            var conteudo = '<div class="precos-container">';
            for (var servico in precos) {
                conteudo += '<div class="precos-item"><div>' + servico + '</div><div>R$' + precos[servico].toFixed(2) + '</div></div>';
            }
            conteudo += '</div>';

            document.getElementById('modalBodyF').innerHTML = conteudo;
        }
    </script>

    <script>
        function scrollToElement(elementId) {
            var targetElement = document.getElementById(elementId);
            if (targetElement) {
                var targetPosition = targetElement.offsetTop;
                var startPosition = window.pageYOffset;
                var distance = targetPosition - startPosition;
                var startTime;
                var duration = 1000; // Ajuste conforme necessário

                function scrollAnimation(currentTime) {
                    if (startTime === undefined) {
                        startTime = currentTime;
                    }

                    var timeElapsed = currentTime - startTime;
                    var progress = Math.min(timeElapsed / duration, 1);
                    var easeInOutCubic = progress < 0.5 ? 4 * progress ** 3 : 1 - (Math.pow(-2 * progress + 2, 3) / 2);

                    window.scrollTo(0, startPosition + distance * easeInOutCubic);

                    if (timeElapsed < duration) {
                        requestAnimationFrame(scrollAnimation);
                    }
                }

                requestAnimationFrame(scrollAnimation);
            }
        }
    </script>
</body>

</html>