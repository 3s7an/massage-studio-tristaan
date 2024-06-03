<?php

$meno = null;
$heslo = null;
$vysledok = null;

//DATABASE CONNECTION 
try {
    $db = new PDO(
        "mysql:host=localhost;dbname=users;charset=utf8",
        "root",
        "", // heslo
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ),
    );
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

//CREATING ACC AFTER CLICK ON REGISTER BUTTON
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["zaregistrovat"])) {
    $meno = $_POST["name"] ?? null;
    $heslo = $_POST["password"] ?? null;

    // Ověření vstupů
    if ($meno && $heslo) {
        // HASHING PASSWORD
        $hashed_password = password_hash($heslo, PASSWORD_DEFAULT);
        
        // INSERTING INTO DATABASE VALUES FROM INPUTS
        $dotaz = $db->prepare("INSERT INTO `users`(`meno`, `heslo`) VALUES (:meno, :heslo)");
        $dotaz->bindParam(':meno', $meno);
        $dotaz->bindParam(':heslo', $hashed_password);
        $dotaz->execute();
        
        header("Location: ./login.php");
        exit; // Zajištění, že se žádný další kód nevykoná
    } else {
        // Zpracování chyby pro neplatné nebo prázdné vstupy
        echo "Jméno a heslo musí být vyplněny.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/registracia.css">
</head>

<body>
<main class="form-signin w-100 m-auto text-center mt-5">
  <form method="post">
    
    <h1 class="h3 mb-3 fw-normal" id="hacko">Sign up </h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="login" name="name">
      <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit" name="zaregistrovat">Create account</button>
    <a href="./login.php" id="acko">Already have account? Let´s sign in -></a>
  
  </form>
</main>
</body>

</html>