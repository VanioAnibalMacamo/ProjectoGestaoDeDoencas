<! doctype htmml>
<html>
<head>
    <title>Utome</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/Style.css');?>" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
  
       <!--<h1><?= esc($title) ?></h1> -->
        <header class="menu">
             <!-- Navbar content -->
             <b>
            <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
                <div class="container-fluid menu">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu">
                        <li class="nav-item menu">
                        <a class="nav-link active" style="color: #fff;" aria-current="page" href="http://localhost:8080/home"><b> Home</b> </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" style="color: #fff;" href="http://localhost:8080/about">Sobre</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" style="color: #fff;" href="http://localhost:8080/pagDev">Sabia Que?</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" style="color: #fff;" aria-current="page" href="http://localhost:8080/galeria">Galeria</a>
                       </li>
                       <li class="nav-item">
                        <a class="nav-link active" style="color: #fff;" aria-current="page" href="http://localhost:8080/contactos">Contactos</a>
                       </li>
                       <li class="nav-item">
                        <a class="nav-link active" style="color: #fff;" aria-current="page" href="https://covidmoz.netlify.app/">COVID-19</a>
                       </li>
                       
                       
                        <li class="nav-item">
                        <!--<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
                        </li>
                    </ul>


                    <form class="d-flex">
                        <button class="btn btn-outline-success" type="submit" onclick="window.open('http://localhost:8080/login')">Entrar</button>
                    </form>
                    </div>
                </div>
            </nav>
        </b>

        </header>
        
        