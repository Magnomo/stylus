@extends('layouts.template')

@section('body')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Stylus Motel</h1>
        <p class="lead">Conheça o melhor motel do litoral norte!</p>
    </div>
</div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('imgs/um.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('imgs/dois.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('imgs/um.jpg')}}" alt="Third slide">
    </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
<div class="box">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center">
                    <i class="fas fa-camera fa-3x" aria-hidden="true"></i>
                    <div class="title">
                        <h4>Galery</h4>
                    </div>
                    <div class="text">
                        <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                    </div>
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center">
                <i class="fas fa-location-arrow fa-3x" aria-hidden="true"></i>
                
                    
                    <div class="title">
                        <h4>Como chegar</h4>
                    </div>
                    <div class="text">
                        <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                    </div>
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center">
                    <i class="fas fa-hotel fa-3x" aria-hidden="true"></i>
                    <div class="title">
                        <h4>Produtos & Serviços</h4>
                    </div>
                    <div class="text">
                        <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                    </div>
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center">
                    <i class="fas fa-tags fa-3x" aria-hidden="true"></i>
                    <div class="title">
                        <h4>Preços e promoções</h4>
                    </div>
                    <div class="text">
                        <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                    </div>
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center">
                    <i class="fas fa-comments fa-3x" aria-hidden="true"></i>
                    <div class="title">
                        <h4>Fale conosco</h4>
                    </div>
                    <div class="text">
                        <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                    </div>
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center">
                    <i class="fab fa-facebook fa-3x" aria-hidden="true"></i>
                    <div class="title">
                        <h4>Redes sociais</h4>
                    </div>
                    <div class="text">
                        <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                    </div>
                    <a href="#">Learn More</a>
                </div>
            </div>

        </div>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
@endsection