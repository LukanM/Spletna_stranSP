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
            <a class="nav-link" href="#">Urniki</a>
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
            <p>Joga zunaj po nasvetu trenerja</p>
          </div>   
        </div>
        <div class="carousel-item">
          <img src="images/fitnes.png" alt="Fitnes" width="1920" height="500">
          <div class="carousel-caption">
            <h3 style="color:black">Fitnes</h3>
            <p style="color:black">Uporaba fitnes opreme v centru Lukan Fitnes</p>
          </div>   
        </div>
        <div class="carousel-item">
          <img src="images/diet.png" alt="Dieta" width="1920" height="500">
          <div class="carousel-caption">
            <h3 style="color:black">Dieta</h3>
            <p style="color:black">Raznevrstne diete po navodilu trenerja</p>
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
      <div class="container-fluids">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <img src="images/jogging.png" class="img-fluid aboutimg">
          </div>
          <div class="col-lg-6 col-md-6 col-12">
              <h2 class="display-5"><b> Lukan Fitnes o tem kako biti fit </b></h2>
            <p class="py-2"> This is a paragraph, shown in the Times New Roman font. This is a paragraph, shown in the Arial font. This is a paragraph, shown in the Lucida Console font.</p>
            <a href="about.php" class="btn btn-success"> Kliknite sem za več informacij </a>
          </div>
        </div>
      </div>
    </section>

    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center">Uživanje in sprostitev</h2>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img class="card-img-top" src="images/savna.png" alt="Savna">
              <div class="card-body">
                <h4 class="card-title">Savna</h4>
                <p class="card-text">Uporaba savne v notranjosti</p>
                <a href="savna.php" class="btn btn-primary">Več o savni</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img class="card-img-top" src="images/bazen.png" alt="Bazen">
              <div class="card-body">
                <h4 class="card-title">Bazen</h4>
                <p class="card-text">Uporaba bazena v notranjosti in zunanjosti</p>
                <a href="bazen.php" class="btn btn-primary">Več o bazenu</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img class="card-img-top" src="images/pingpong.png" alt="Ping pong">
              <div class="card-body">
                <h4 class="card-title">Ping pong</h4>
                <p class="card-text">Igranje ping ponga</p>
                <a href="pingpong.php" class="btn btn-primary">Več o ping pong</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center">Uživanje in sprostitev</h2>
      </div>

      <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
          <div class="form-group">
            <label>Uporabniško ime</label>
            <input type="text" name="ime" autocomplete="off" class="form-control">
          </div>
          <div class="form-group">
            <label>Elektronska pošta</label>
            <input type="text" name="email" autocomplete="off" class="form-control">
          </div>
          <div class="form-group">
            <label>Telefonska številka</label>
            <input type="text" name="tel" autocomplete="off" class="form-control">
          </div>
          <div class="form-group">
            <label>Komentarji</label>
            <textarea class="form-control" name="comments"></textarea>
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </section>

    <footer>
      <h4 class="p-3 bg-dark text-white text-center">Oblikoval LukanFitnes, Avtorske pravice pridržane</h4>
    </footer>
            

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>