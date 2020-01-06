<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="{{ asset('css/template.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Stylus Motel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Suites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Restaurantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Promoções</a>
                    </li>
                </ul>

            </div>
        </nav>
        <div class="row d-flex justify-content-center items-align-center">

            <div class="col-md-12 h-100">
                @yield('body')
            </div>
            <footer class="footer_area w-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="single_ftr">
                                <h4 class="sf_title">Contacts</h4>
                                <ul>
                                    <li>Av. José Herculano, 8600</li>
                                    <li>12 3887-9479 <br> (+055) 3896-2086</li>
                                    <li>contato@motelstylus.com</li>
                                </ul>
                            </div>
                        </div> <!--  End Col -->

                        <div class="col-md-3 col-sm-6">
                            <div class="single_ftr">
                                <h4 class="sf_title">Informações</h4>
                                <ul>
                                    <li><a href="#">Sobre nós </a></li>
                                    <li><a href="#">Termos & Condições</a></li>
                                    <li><a href="#">Fale conosco</a></li>
                                </ul>
                            </div>
                        </div> <!--  End Col -->

                        <div class="col-md-3 col-sm-6">
                            <div class="single_ftr">
                                <h4 class="sf_title">Serviços</h4>
                                <ul>
                                    <li><a href="#">check-in and check-out</a></li>
                                    <li><a href="#">Higiene</a></li>
                                    <li><a href="#">Segurança 24 horas</a></li>
                                    <li><a href="#">Restaurante</a></li>
                                </ul>
                            </div>
                        </div> <!--  End Col -->

                        <div class="col-md-3 col-sm-6">
                            <div class="single_ftr">
                                <h4 class="sf_title">Noticias</h4>
                                <div class="newsletter_form">
                                    <p>Informe seu e-mail para receber noticias sobre promoções e sobre nossos serviços </p>
                                    <form method="post" class="form-inline">
                                        <input name="EMAIL" id="email" placeholder="Enter Your Email" class="form-control" type="email">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div> <!--  End Col -->

                    </div>
                </div>


                <div class="ftr_btm_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="ftr_social_icon">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <p class="copyright_text text-center">© 2019 All Rights Reserved</p>
                            </div>

                            <div class="col-sm-4">
                                <div class="payment_mthd_icon text-right">
                                    <ul>
                                        <li><i class="fab fa-cc-paypal"></i></li>
                                        <li><i class="fab fa-cc-visa"></i></li>
                                        <li><i class="fab fa-cc-discover"></i></li>
                                        <li><i class="fab fa-cc-mastercard"></i></li>
                                        <li><i class="fab fa-cc-amex"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

</body>

</html>