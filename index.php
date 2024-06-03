<?php
require "oop-stranky.php";
session_start();

//zachytenie nakliknutej stranky
if(array_key_exists('stranka', $_GET)){
$stranka = $_GET['stranka'];

//kontrola ci dana stranka existuje v zozname stranok
if(array_key_exists($stranka, $zoznam) == false){
  
  //ak stránka neexistuje
  $stranka = "404";
  
  //informácia prehliadaču že stranka neexistuje
  http_response_code(404);
}

}

else{
  $stranka = "home";
}

//zachytenie odhlasenia
if (array_key_exists("odhlasit", $_POST)) {
    unset($_SESSION["prihlasenyUzivatel"]);
    header("Location: ./login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $zoznam[$stranka]->menu;?></title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Comfortaa:wght@300..700&family=Shadows+Into+Light&display=swap" rel="stylesheet">
</head>

<body>
    <header>
    <nav class="navbar border-bottom">
          
            <ul>
            <?php
            //dynamicke zobrazenie nazvov stranky do UL-ka
              foreach($zoznam as $klucStranky => $hodnota)
              {
                if($hodnota->id != "404")
              echo "<li><a class='navbar-brand text-dark'  href='?stranka=$hodnota->id'>{$hodnota->menu}</a></li>";
              }
              ?>
            </ul>
              
            
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon text-"></span>
              </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
              
              <?php 
              //dynamicke zobrazenie prihlaseneho uzivatela
               if(array_key_exists("prihlasenyUzivatel", $_SESSION)){
                 echo "<p>Logged user : {$_SESSION['prihlasenyUzivatel']}</p>"; 
            }
            else {
              //ak sa uzivatel este neprihlasil, namiesto jeho mena sa zobrazi presmerovanie na prihlasenie
                echo '<a href="./login.php">Login</a>';
            }
            ?>
            </h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">My profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">My reservations</a>
                </li>
                <form class="d-flex mt-3" method="post">
                  
                  <?php
                  //zobrazenie tlacitka odhlasit iba v pripade ak je uzivatel prihlaseny
                 if(array_key_exists("prihlasenyUzivatel", $_SESSION)){
                  echo '<li class="nav-item"><button name="odhlasit" id="odhlasit" class="btn btn-outline-danger">Log out</button></li>';
               } ?>
              </form>
          </div>
          </div>
          
    </nav>

  <div class="pozadie border-bottom">
      <h1>
      MASSAGE STUDIO TRISTAN
      </h1>
    </div>
    </header>    

  <section>
    <div class="container-xl text-center">
  
  
  <?php 
  //dynamicke zobrazenie stranky
   echo $zoznam[$stranka]->getObsah(); 
  ?>
    </div>
  </section>

   <footer>

    <div class="footer-menu">
      <h2>Menu</h2>
          <ul>
            <?php
            //dynamicke zobrazenie nazvov stranky do UL-ka
              foreach($zoznam as $klucStranky => $hodnota)
              {
                if($hodnota->id != "404")
              echo "<li><a class='navbar-brand text-dark'  href='?stranka=$hodnota->id'>{$hodnota->menu}</a></li>";
              }
              ?>
          </ul>

    </div>

    <div class="footer-contact">
      <h2>Contact</h2>
          <ul>
            <li>Massage Studio Tristan</li>
            <li>Tkalcovska 816</li>
            <li>Uhersky Brod</li>
          </ul>
    </div>

    <div class="footer-opening-hours">
      <h2>Opening hours</h2>
        <ul>
          <li>Monday - Friday : 8h - 20h</li>
          <li>Saturday: 10h - 16h</li>
          <li>Sunday: Closed</li>
        </ul>
    </div>
   
  
  
  </footer>
</body>

<script src="app.js"></script>

</html>