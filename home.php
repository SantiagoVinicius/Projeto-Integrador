<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body> 
  <div class="text-center" style="margin-bottom:0;"> 
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cabelocapa.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Santiago Hair</h5>
         <p>Salão de Beleza</p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="images/manicure.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
         <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="images/cabelereira.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="home.php">HOME</a>
  <a class="navbar-brand" href="login.php">LOGIN</a>
</nav>

<div class="container" style="margin-top:25px">
    <div class="row">
      <div class="col-sm-4">
        <h2>Sobre o Salão</h2>
        <div>
          <img src="images/Salão.jpg" style="border: 2px solid #ffcbdb"> 
        </div>
      <p>Nosso espaço é pensado totalmente no bem-estar dos clientes, com horários marcados e exclusivos nossos profissionais dedicaram toda atenção a você, visando sempre seu bem-estar em sua permanência.Com ambiente climatizado, coffee break, música ambiente e estacionamento com total segurança é oferecido aos nossos clientes para sua melhor experiência, pois sua autoestima e bem-estar é nossa satisfação.</p>
      <h3>Redes Sociais</h3>
      <p>Conheça nossas páginas</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="https://pt-br.facebook.com/" ><img src="images/Facebook.png" style="width:40px"> Facebook</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.instagram.com/"><img src="images/Instagram.png" style="width:40px"> Instagram</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="whatssapp.com"><img src="images/Whatssapp.png" style="width:40px"> Whatssapp</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Conheça Nossos Serviços</h2>
      <h5>Galeria</h5>

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/cabelocapa.jpg" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/manicure.jpg" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/cabelereira.jpg" alt="Terceiro Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
      
      <p>Permita-se</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>Local e Contato</h2>
      <h5>Entre em Contata | Agende Já seu Horário</h5>
      <p>
      <iframe class="google" id="contato" src="https://www.google.com/maps/embed?pb=!1m22!1m8!1m3!1d3679.3313777149456!2d-47.3315032!3d-22.7530803!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-22.7529962!2d-47.3290678!4m5!1s0x94c8998174c896b9%3A0x739b7f99b3323574!2sSenac%20Americana%20-%20R.%20Dr.%20Angelino%20Sanches%2C%20800%20-%20Vila%20Sao%20Pedro%2C%20Americana%20-%20SP%2C%2013466-490!3m2!1d-22.753131!2d-47.329091899999995!5e0!3m2!1spt-BR!2sbr!4v1607723191436!5m2!1spt-BR!2sbr" width="100%" height="100%" frameborder="0" style="border: 2px solid #ffcbdb;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </p>
      <p>Contato: (19) 199090-5454
      Local: R.Abc Cba, 123<br> Bairro Sta abc | Nova Odessa - SP</p>
      <a class="navbar-brand" href="https://api.whatsapp.com/send?phone=5519971138300&text=Ol%C3%A1">Entre em Contato AQUI!</a>
    </div>
  </div>
</div>
</div>

<div class="text-center bg-dark" style="margin-bottom:0;padding:1rem;margin-top:10px; ">
  <p style="color:white;">&copy Diretos Autorais Reservados.</p>
</div>
    
    <script src="../bootstrap5/js/bootstrap.bundle.js"></script>
    <script src="../js/jquery.min.js"></script>
</body>
</html>