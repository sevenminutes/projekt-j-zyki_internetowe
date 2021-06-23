<?
  session_start();
  if($_SESSION['login']) header("Location: /index.php");


  $name = isset($_POST['nazwa']) ? $_POST['nazwa'] : false;
  $email = isset($_POST['email']) ? $_POST['email'] : false;
  $haslo_1 = isset($_POST['haslo_1']) ? $_POST['haslo_1'] : false;
  $haslo_2 = isset($_POST['haslo_2']) ? $_POST['haslo_2'] : false;

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $stop = false;
    $errors = [];

    if(!$name){
      $errors[] = "Podanie nazwy użytkownika jest wymagane";
      $stop = true;
    }

    if(!$email || $email == ""){
      $errors[] = "Podanie adresu e-mail jest wymagane";
      $stop = true;
    }

    if(!$haslo_1){
      $errors[] = "Podanie hasła jest wymagane";
      $stop = true;
    }

    if($haslo_1 != $haslo_2){
      $errors[] = "Podane hasła nie są identyczne";
      $stop = true;
    }

    if(!$stop){
      $mysqli = new mysqli("localhost", "33700168_wsiz", "XQoR8YWJ", "33700168_wsiz");
      if(!$mysqli || $mysqli->connect_errno){
        $errors[] = "Nie udało się połączyć z bazą danych";
      } else {
        $query = "INSERT INTO `users` (`name`, `password`, `email`) VALUES ('".$name."', '".md5($haslo_1)."', '".$email."')";
        $run = $mysqli->query($query);
        if($run){
          header("Location: /login.php");
        } else {
          $errors[] = "Nie udało się zapisać użytkownika do bazy danych";
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
    <title>Rejestracja</title>
  </head>

  <body>
    <? include("includes/header.php") ?>

    <div class="container">
      <? if($errors) foreach ($errors as $txt) { ?>
        <div class="alert alert-danger" role="alert">
          <?= $txt ?>
        </div>
      <? } ?>
    </div>

    <div class="container min-height mt-5 mb-5 pb-5 d-flex flex-column justify-content-center">
      <div class="row">
        <div class="col-12">
          <h1 class="text-white text-center">Zarejestruj się!</h1>
        </div>
      </div>
      <form class="row" method="POST">
        <div class="col-12 col-md-6 offset-md-3">
          <div class="mb-3">
            <label  class="form-label">
              <p>Nazwa użytkownika</p>
              <input type="text" class="form-control" name="nazwa" value="<?= $name ?>">
            </label>
          </div>
          <div class="mb-3">
            <label  class="form-label">
              <p>Adres e-mail</p>
              <input type="email" class="form-control" name="email" value="<?= $email ?>">
            </label>
          </div>
          <div class="mb-3">
            <label  class="form-label">
              <p>Hasło</p>
              <input type="password" class="form-control" name="haslo_1">
            </label>
          </div>
          <div class="mb-3">
            <label  class="form-label">
              <p>Powtórz hasło</p>
              <input type="password" class="form-control" name="haslo_2">
            </label>
          </div>

          <input type="submit" class="btn btn-success d-block w-100" value="Zarejestruj">
        </div>
      </form>
    </div>







  <? include("includes/footer.php") ?>
</body>

</html>
