<?
  session_start();
  if(!$_SESSION['login']) header("Location: /index.php");
?>

<!doctype html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>O nas</title>
</head>

<body>
  <? include("includes/header.php") ?>

  <div class="container mt-5 mb-5 pb-5">
    <div class="row">
      <div class="col-12 col-md-4">
        <img src="/images/hotel.jpg" alt="hotel photo" class="img-fluid">
      </div>
      <div class="col-12 col-md-8">
        <ul class="list-group">
          <li class="list-group-item">
            <p>
            Hotel Paradise powraca na kongresową mapę Polski w wielkim stylu. Jako jedyny na Podkarpaciu oferuje największy kompleks konferencyjny wyposażony w najnowszej generacji sprzęt audio-wizualny.
            W całym kompleksie może odbywać się kilkanaście konferencji jednocześnie dzięki specjalnie zaprojektowanym rozwiązaniom logistycznym - dla nawet 2500 osób. To jedyna taka lokalizacja na Podkarpaciu.
            Realizujemy imprezy tematyczne, konferencje, szkolenia, bale, pokazy mody, koncerty i prezentacje.
            Hotel Paradise został założony niecałe 10 lat temu i cieszy bardzo dużym zainteresowaniem szczególnie wśród biznesmenów chcących zaznać spokoju i ciszy w swoich codziennych obowiązkach a tym samym chcą chwile oddać się w odpoczynek.
            </p>
          <li>
        <ul>
      </div>
      <div class="col-12 mt-5">
        <iframe src="https://maps.google.com/maps?q=nowy%20dw%C3%B3r%20rzesz%C3%B3w&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="350" style="border:2;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>

    <? include("includes/footer.php") ?>
  </body>
</html>
