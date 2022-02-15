<?php
$servername = "127.0.0.1";
$username = "Pietro Floridia";
$pass = "ciao";
$dbname = "utenti sito";
$Utente = $_POST['Utente'];
$password = $_POST['password'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO pcto (attività, crediti, tipologia, Dal, Al, ore)
  VALUES ('$attività', '$crediti', '$tipologia', '$Dal', '$Al', '$ore')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "attività aggiunta con successo";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>