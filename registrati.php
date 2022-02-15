<html>
<body bgcolor="#0066CC">
<?php
$servername = "unknown";
$username = "localhost";
$pass = "*****";
$dbname = "utenti sito";
$Utente = $_POST['Utente'];
$password = $_POST['password'];
  $password_hash = password_hash($password, PASSWORD_BCRYPT);
		try{
  $conn = new PDO("mysql:localhost=$servername;dbname=$dbname", $username, $pass);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO account (Utente, Password)
  VALUES ('$Utente', '$password_hash')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New account created with success, click here to sign up";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
<br>
<form action="accedi.php">
<button type="submit" ><span style="cursor:pointer"> send </span></button></form></body></html>
