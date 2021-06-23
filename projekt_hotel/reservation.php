<?
  session_start();
  if(!$_SESSION['login']) header("Location: /index.php");

  $imie = isset($_POST['imie']) ? $_POST['imie'] : false;
  $nazwisko = isset($_POST['nazwisko']) ? $_POST['nazwisko'] : false;
  $email = isset($_POST['email']) ? $_POST['email'] : false;
  $przyjazd = isset($_POST['przyjazd']) ? $_POST['przyjazd'] : false;
  $wyjazd = isset($_POST['wyjazd']) ? $_POST['wyjazd'] : false;
  $platnosc = isset($_POST['platnosc']) ? $_POST['platnosc'] : false;
  $pokoj = isset($_POST['pokoj']) ? $_POST['pokoj'] : false;

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $stop = false;
    $errors = [];

    if(!$imie){
      $errors[] = "Podanie imienia jest wymagane";
      $stop = true;
    }
    if(!$nazwisko){
      $errors[] = "Podanie nazwiska jest wymagane";
      $stop = true;
    }
    if(!$email){
      $errors[] = "Podanie adresu e-mail jest wymagane";
      $stop = true;
    }
    if(!$przyjazd){
      $errors[] = "Podanie daty przyjazdu jest wymagane";
      $stop = true;
    }
    if(!$wyjazd){
      $errors[] = "Podanie daty wyjazdu jest wymagane";
      $stop = true;
    }
    if(!$platnosc){
      $errors[] = "Podanie formy płatności jest wymagane";
      $stop = true;
    }
    if(!$pokoj){
      $errors[] = "Wybranie pokoju jest wymagane";
      $stop = true;
    }

    if(!$stop){
      $mysqli = new mysqli("localhost", "33700168_wsiz", "XQoR8YWJ", "33700168_wsiz");
      if(!$mysqli || $mysqli->connect_errno){
        $errors[] = "Nie udało się połączyć z bazą danych";
      } else {
        $query = "INSERT INTO `client` (`name`, `surname`, `email`) VALUES ('".$imie."', '".$nazwisko."', '".$email."')";
        $run = $mysqli->query($query);
        if($run){
          $client_id = $mysqli->insert_id;

          $query = "INSERT INTO `orders` (`room`, `date_arrival`, `date_departure`, `id_client`, `payment`) VALUES ('".$pokoj."', '".$przyjazd."', '".$wyjazd."', '".$client_id."', '".$platnosc."')";
          $order_id = $mysqli->insert_id;

          if($order_id){
            header("Location: /order.php?success=true");
          } else {
            $errors[] = "Nie udało się dodać rezerwacji do bazy danych";
          }

        } else {
          $errors[] = "Nie udało się dodać klienta do bazy danych";
        }
      }
    }
  }
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
      <div class="col-12">
        <h1 class="text-center text-white">Rezerwacja hotelowa</h1>
      </div>
    </div>

    <div class="row">
      <? if($errors) foreach ($errors as $txt) { ?>
        <div class="alert alert-danger" role="alert">
          <?= $txt ?>
        </div>
      <? } ?>
    </div>

    <form class="row" method="POST" action="">

      <div class="col-12 col-md-6">
        <div class="mb-3">
          <label  class="form-label">
            <p>Imię</p>
            <input type="text" class="form-control" name="imie" value="<?= $imie ?>">
          </label>
        </div>
        <div class="mb-3">
          <label  class="form-label">
            <p>Nazwisko</p>
            <input type="text" class="form-control" name="nazwisko"  value="<?= $nazwisko ?>">
          </label>
        </div>
        <div class="mb-3">
          <label  class="form-label">
            <p>Adres e-mail</p>
            <input type="email" class="form-control" name="email"  value="<?= $email ?>">
          </label>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="mb-3">
          <label  class="form-label">
            <p>Data przyjazdu</p>
            <input type="date" class="form-control" name="przyjazd" value="<?= $przyjazd ?>">
          </label>
        </div>
        <div class="mb-3">
          <label  class="form-label">
            <p>Data wyjazdu</p>
            <input type="date" class="form-control" name="wyjazd"  value="<?= $wyjazd ?>">
          </label>
        </div>
        <div class="mb-3">
          <label  class="form-label">
            <p>Metoda płatności</p>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="platnosc" checked value="1" id="radio1">
              <label class="form-check-label" for="radio1">
                Płatność na miejscu
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="platnosc" value="2" id="radio2">
              <label class="form-check-label" for="radio2">
                Płatność przelewem
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="platnosc" value="2" id="radio3">
              <label class="form-check-label" for="radio3">
                Płatność natychmiastowa BLIK
              </label>
            </div>
          </label>
        </div>
        <div class="mb-3">
          <label  class="form-label">
            <p>Wybierz pokój</p>
            <select class="form-select" name="pokoj">
              <option value="1">Standard</option>
              <option value="2">Premium</option>
            </select>
          </label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-success">Rezerwuj</button>
      </div>
    </div>
  </div>

  <? include("includes/footer.php") ?>
</body>

</html>
