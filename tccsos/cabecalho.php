<!doctype html>

<?php
session_start();
?>

<html lang="en" xmlns="http://www.w3.org/1999/html">
<meta charset="utf-8">
<meta name="viewport" content="witdh=device-witdh, initial-scale=1, shrink-to-fit=no">
<meta name="description" content>
<meta name="author" content="Guilherme Luis, Matheus Eduardo, and more contributors">
<meta name="generator" content="em desenvolvimento">
<title> SOS COBRAS</title>
<link rel="cobras"  href ="C O L O C A R   L I N K   A Q U I">
<!-- bootstrap core CSS -->

<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->-->
<link href="css/bootstrapTeste.min.css" rel="stylesheet">
<link href="css/estilo.css" rel="stylesheet">


<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.bundle.js.map"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.bundle.min.js.map"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.js.map"></script>
<script src="js/bootstrap.min.js.map"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-archor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>
<!-- custom styles for this template -->
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <img src="img/COBRAS-2.png" class="logo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="serpentes.php">Serpentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dicas.php">Dicas e Curiosidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pedidoResg.php">Pedidos de Resgate</a>
                </li>

            </ul>
             <li class="login">
					<?php
						if (isset($_SESSION['email'])){
					?>
					<h5><?=$_SESSION['email']?></h5>
					<h5><a href="logout.php">Sair</a></h3>
					<?php
						}else{
					?>
                    <a href="registroUser.php">Registrar-se</a><a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>
                    <?php 
                    } 
                    ?>
                </li>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Procurar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
            </form>
        </div>
    </nav>
</header>
<main role="main">
    <div class="divA"></div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""</li>
        </ol>
        <div class="carousel-inner" >
            <div class="carousel-item">
                <img src="img/serpentes/cobra3.jpg" class="imagem-carrossel">
                 <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"></rect></svg>
                <div class="container">

                    <div class="carousel-caption text-left">
                        <h1>Serpente(Nome Científico)</h1>
                        <p>Descrição Breve da Serpente</p>

                    </div>
                </div>
            </div>
            <div class="carousel-item teste active">
                <img src="img/serpentes/cobra2.jpg" class="imagem-carrossel">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"></rect></svg>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Serpente(Nome Científico)</h1>
                        <p>Descrição Breve da Serpente</p>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/serpentes/cobra1.jpg" class="imagem-carrossel">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"></rect></svg>
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Serpente(Nome Científico)</h1>
                        <p>Descrição Breve da Serpente</p>

                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
