<?php
session_start();
$loName = null;
$loPassword = null;
$chyba = null;

//databazove spojenie
$db = new PDO(
    "mysql:host=localhost;dbname=users;charset=utf8",
    "root",
    "", // heslo
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ),
);

//zachytenie prihlasenia
if (array_key_exists("prihlasit", $_POST)) {
    $loName = $_POST["meno"];
    $loPassword = $_POST["heslo"];
    
    //nacitanie z databazy podla mena uzivatela
    $sql = $db->prepare("SELECT * FROM users WHERE meno =? LIMIT 1");
    $sql->execute([$loName]);
    $result = $sql->fetch();
    
    if ($sql->rowCount() > 0) {
    //ochrana hesla
    $hashed_password = $result['heslo'];
    
    //kontrola či sedi zadane heslo s heslom v databaze
    if ($result && password_verify($loPassword, $hashed_password)){
        header("Location: ./index.php");
         $_SESSION["prihlasenyUzivatel"] = $loName;
       }
    
    else 
    {
    $chyba =  "Prihlasenie bolo neuspesne";
    }
    }

    if($loName == "admin" && $loPassword == "1111"){
      header("Location: ./admin.php");
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/login.css">

</head>
<body>
<main class="form-signin w-100 m-auto text-center mt-5">
  <form method="post">
    
    <h1 class="h3 mb-3 fw-normal" id="hacko">Sign in </h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="meno">
      <label for="floatingInput">Name</label>
    </div>
   
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="heslo">
      <label for="floatingPassword">Password</label>
    </div>
     
    <button class="btn btn-primary w-100 py-2" type="submit" name="prihlasit">Sign in</button>
    <a href="./registracia.php" id="acko">New user? Let´s create a account -></a>
    
    
                    <?php echo $chyba; ?>
    
  </form>
</main>

<script src="login.js"></script>

</body>
        
        