<?
  session_start();
  if($_SESSION['login']) header("Location: /index.php");

  $name = isset($_POST['nazwa']) ? $_POST['nazwa'] : false;
  $haslo = isset($_POST['haslo']) ? $_POST['haslo'] : false;

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $stop = false;
    $errors = [];

    if(!$name){
      $errors[] = "Podanie nazwy użytkownika jest wymagane";
      $stop = true;
    }

    if(!$haslo){
      $errors[] = "Podanie hasła jest wymagane";
      $stop = true;
    }

    if(!$stop){
      $mysqli = new mysqli("localhost", "33700168_wsiz", "XQoR8YWJ", "33700168_wsiz");
      if(!$mysqli || $mysqli->connect_errno){
        $errors[] = "Nie udało się połączyć z bazą danych";
      } else {
        $query = "SELECT * FROM `users` WHERE `name` = '".$name."' LIMIT 1";
        $result = $mysqli->query($query);
        if($result->num_rows > 0){
          $user = $result->fetch_assoc();

          if($user['password'] == md5($haslo)){
            $_SESSION['login'] = $user['name'];
            header("Location: /index.php");
          } else {
            $errors[] = "Podane hasło jest nieprawidłowe";
          }
        } else {
          $errors[] = "Nie znaleziono takiego użytkownika";
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
          <h1 class="text-white text-center">Zaloguj się!</h1>
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
              <p>Hasło</p>
              <input type="password" class="form-control" name="haslo">
            </label>
          </div>

          <input type="submit" class="btn btn-success d-block w-100" value="Zaloguj">
        </div>
      </form>
    </div>


    <? include("includes/footer.php")?>
  </body>
</html>
