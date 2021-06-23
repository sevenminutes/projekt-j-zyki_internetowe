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
    <? if(isset($_GET['success']) && $_GET['success'] == "true"){ ?>
    <div class="row">
      <div class="col-12">
        <div class="alert alert-success" role="alert">
          Pokój został pomyślnie zarezerwowany
        </div>
      </div>
    </div>
    <? } ?>
    <div class="row">
      <div class="col-12">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-offer1" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
              <h2>Standard<h2>
            </button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-offer2" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
              <h2>Premium<h2>
            </button>
          </div>
        </nav>
      </div>
      <div class="col-12">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane py-5 fade show active" id="nav-offer1" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="row">
              <div class="col-12 col-md-4">
                <img src="/images/standard.png" alt="Standard" class="img-fluid rounded-pill">
              </div>
              <div class="col-12 col-md-8">
                <h1 class="text-white" style="color:white">Opis wnętrza oraz wyposażenia</h1>
                <ul class="list-group">
                  <li class="list-group-item">

                    <h3>Opis wnętrza:</h3>
                    <p>Pokój Standard 2os. - to stylowy i nowoczesny pokój wyposażony w najnowocześniejszy sprzęt.</P>
                    <p>Powierzchnia pokoju: 20 metrów kwadratowych</p>


                    <h3>Wyposażenie pokoju:</h3>
                    - 2 łóżka typu Twin (90 x 200 cm)
                    - okna z możliwością uchylenia
                    - klimatyzacja
                    - szybki, bezprzewodowy Internet (Wi-Fi)
                    - TV z bogatym pakietem programów
                    - sejf
                    - suszarka

                    <h3>Cena: 120 zł</h3>
                  </li>
                </ul>

                <div class="text-center text-lg-start">
                  <a class="btn btn-primary mt-3 d-block" href="reservation.php" role="button">Dokonaj rezerwacji</a>
                </div>

              </div>
            </div>

          </div>

          <div class="tab-pane py-5 fade" id="nav-offer2" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="row">
              <div class="col-12 col-md-4">
                <img src="/images/premium.png" alt="Premium" class="img-fluid rounded-pill">
              </div>
              <div class="col-12 col-md-8">
                <h1 class="text-white" style="color:white">Opis wnętrza oraz wyposażenia</h1>
                <ul class="list-group">
                  <li class="list-group-item">

                    <h3>Opis wnętrza:</h3>
                    <p>Pokój premium - to stylowy i nowoczesny pokój wyposażony w najnowocześniejszy sprzęt.</p>
                    <p>Powierzchnia pokoju: 30 metrów kwadratowych</p>


                    <h3>Wyposażenie pokoju:</h3>
                    - 1 łóżko typu Single (160 x 200 cm) lub 2 łóżka typu Twin (90 x 200 cm)
                    - okna z możliwością uchylenia
                    - klimatyzacja
                    - szybki, bezprzewodowy Internet (Wi-Fi)
                    - TV z bogatym pakietem programów
                    - sejf
                    - suszarka

                    <h3>Cena: 300 zł</h3>
                  </li>
                </ul>

                <div class="text-center text-lg-start">
                  <a class="btn btn-primary mt-3 d-block" href="reservation.php" role="button">Dokonaj rezerwacji</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <? include("includes/footer.php") ?>
</body>

</html>
