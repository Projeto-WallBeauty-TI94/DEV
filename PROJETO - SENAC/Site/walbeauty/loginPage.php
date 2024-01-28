<!DOCTYPE html>

<?php
include_once "config.php";
require_once "funcoes.php";
$u = new user;
?>

<head>
    <meta charset="utf-8" />
    <title>Contact</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="style.css" rel="stylesheet" type="text/css" />
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
</head>

<body>
    <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navigation-bar w-nav">
        <div class="w-container"><a href="/" class="brand-link w-nav-brand">
                <h1 class="brand-text">WalBeauty</h1>
            </a>
            <nav role="navigation" class="navigation-menu w-nav-menu"><a href="index.php" class="navigation-link w-nav-link">Inicio</a><a href="loginPage.php" aria-current="page" class="navigation-link w-nav-link w--current">Login</a></nav>
            <div class="hamburger-button w-nav-button">
                <div class="w-icon-nav-menu"></div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="w-container loginForm">
            <div class="section-title-group">
                <h2 class="section-heading centered">Faça login</h2>
                <!-- <div class="section-subheading center">This is some text inside of a div block.</div> -->
            </div>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
                tristique. <br /><br />Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam
                libero vitae erat. Aenean faucibus nibh et <br />justo cursus id rutrum lorem imperdiet. Nunc ut sem
                vitae risus tristique posuere.</p> -->
            <div class="form-wrapper w-form">
                <form id="email-form" name="email-form" data-name="Email Form" method="post" class="form">
                    <input type="email" class="form-field w-input" maxlength="256" name="email" data-name="Email" placeholder="Digite seu e-mail" id="Email" required="" />
                    <input type="password" class="form-field w-input" maxlength="256" name="senha" data-name="senha" placeholder="Digite sua senha" id="senha" required="" />
                    <input type="submit" value="Logar" name="login" data-wait="Please wait..." class="button full-width w-button" /><br>

                    <div class="errmsg" style="font-size: 20px; color: red; font-weight:bold;">
                        <!-- LOGIN -->
                        <?php
                        if (isset($_POST['login'])) {
                            $email =  ($_POST['email']);
                            $senha =  ($_POST['senha']);

                            if (!empty($email) && !empty($senha)) {
                                $u->conectar('root', "");
                                if ($u->logar($email, $senha)) {
                                    header('location:userPage.php');
                                } else {
                                    echo 'Login ou senha incorretos!';
                                }
                            } 
                        }
                        ?>
                    </div>

                    <p>OU</p>
                    <a href="cadastro.php" class="cadastro">Crie uma conta!</a>
                </form>
                <!-- <div class="w-form-done">
                    <p>Logado!</p>
                </div> -->
                <!-- <div class="w-form-fail">
                    <p>Oops! Something went wrong while submitting the form :(</p>
                </div> -->
            </div>
        </div>
    </div>

    <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.7942871682253!2d-46.45911812467051!3d-23.539900178814563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66bf22458913%3A0xecdac462b58a9475!2sSenac%20Itaquera!5e0!3m2!1sen!2sbr!4v1701821632105!5m2!1sen!2sbr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="footer">
        <div class="w-container">
            <div class="w-row">
                <div class="spc w-col w-col-4">
                    <h5>about velocity</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros
                        elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo
                        diam libero vitae erat.</p>
                </div>
                <div class="spc w-col w-col-4">
                    <h5>useful links</h5><a href="#" class="footer-link">Phasellus gravida semper nisi</a><a href="#" class="footer-link">Suspendisse nisl elit</a><a href="#" class="footer-link">Dellentesque
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
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6567d83b7b7ab663a1c292fa" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="script.js" type="text/javascript"></script>
</body>

</html>