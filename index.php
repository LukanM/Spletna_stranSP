<!DOCTYPE html>
 <html>
 <head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;500&display=swap" rel="stylesheet"> 

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Lukan Fitnes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Domov<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Podpora</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">O nas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kontakti</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Iskanje</button>
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/joga.png" alt="Joga" width="1920" height="500">
      <div class="carousel-caption">
        <h3>Joga</h3>
        <p>Joga zunaj po nasvetu trenerja.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/fitnes.png" alt="Fitnes" width="1920" height="500">
      <div class="carousel-caption">
        <h3>Fitnes</h3>
        <p>Uporaba fitnes opreme v centru Lukan Fitnes.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/diet.png" alt="Dieta" width="1920" height="500">
      <div class="carousel-caption">
        <h3>Dieta</h3>
        <p>Raznevrstne diete po navodilu trenerja.</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">O nas</h2>
  </div>

  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/jogging.png" class="img-fluid">
    </div>
  </div>
</section>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>