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
  <title>Kontakt</title>
</head>

<body>
  <? include("includes/header.php") ?>

  <div class="container mt-5 mb-5 pb-5">
    <div class="row">
      <div class="col-12">
        <h1 class="text-white text-left">Kontakt</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-4">
        <ul class="list-group">
          <li class="list-group-item">
            <address>
              <p><b>Kontakt z personelem hotelu</b></p>
              <p><i class="bi bi-geo-alt-fill"></i> ul. Ślusarczyka 437C<br>Rzeszów</p>
            </address>
          </li>
          <li class="list-group-item">
            <address class="">
              <strong>Hotel Paradise</strong><br>
              <p>w61897@student.wsiz.edu.pl</p>
            </address>
          </li>
        </ul>
      </div>
      <div class="col-12 col-md-8">
        <form action="mailto:bartosz-cop@wp.pl" method="post" enctype="text/plain">
          <div class="mb-3">
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Adres e-mail">
          </div>
          <div class="mb-3">
            <textarea class="form-control" placeholder="Pytanie" name="pytanie" style="height: 100px"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Wyślij</button>
          </div>
        </form>
      </div>
    </div>
  </div>


    <? include("/includes/footer.php") ?>
  </body>
</html>
