<?
  session_start();

  if(isset($_GET['logout']) && $_GET['logout'] == "true"){
    session_destroy();
    header("Location: /index.php");
  }
?>


<!doctype html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Strona główna</title>
</head>

<body>
  <? include("includes/header.php") ?>


  <div class="container mt-5 mb-5 pb-5">
    <h1 class="text-white text-center">Witaj na naszej oficjalnej stronie Hotelu Paradise!</h1>

    <div class="row">
      <div class="col-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/images/first.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/images/second.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/images/third.jpg" class="d-block w-100">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-12">
        <h1 class="text-white text-center">Oferujemy także organizacje weseli!</h1>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <img src="/images/p1.png" class="img-fluid">
      </div>
      <div class="col-md-6">
        <img src="/images/p2.png" class="img-fluid">
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-4">
        <img src="/images/p3.png" class="img-fluid">
      </div>
      <div class="col-md-4">
        <img src="/images/p4.png" class="img-fluid">
      </div>
      <div class="col-md-4">
        <img src="/images/p5.png" class="img-fluid">
      </div>
    </div>

    <div class="row mt-5">
      <a href="/order.php"><h1 class="text-white text-center">Rezerwuj pokój już teraz!</h1></a>
    </div>
  </div>

  <? include("includes/footer.php") ?>
</body>

</html>
