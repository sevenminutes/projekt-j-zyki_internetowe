<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#1">
      <img src="/images/logo.png" alt="Logo" style="width: 150px;" target="blank" class="style-only" />
    </a>
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
      <ul class="navbar-nav w-100 d-block">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Strona główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Kontakt</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">O nas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="order.php">Rezerwacja</a>
        </li>
        <? if($_SESSION['login']) { ?>
          <li class="nav-item float-end">
            <a class="nav-link" href="/index.php?logout=true">Wyloguj</a>
          </li>
        <? } else { ?>
          <li class="nav-item float-end">
            <a class="nav-link" href="/register.php">Rejestracja</a>
          </li>
          <li class="nav-item float-end">
            <a class="nav-link" href="/login.php">Logowanie</a>
          </li>
        <? } ?>
      </ul>
    </div>
    <div class="mx-auto order-0">
      <a class="navbar-brand mx-auto" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</nav>
