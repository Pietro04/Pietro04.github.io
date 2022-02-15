
 <!doctype html>
<html>
<head>
<meta name=”viewport” content=”width=device-width” />
<meta charset="utf-8">
<link rel="stylesheet" href="accedistyle.css">
<title>accedi</title>
</head>
<h1> Accedi con le tue credenziali </h1>
<p1> inserisci nome utente </p1><br><br>
<form name="input" action="accedi.php" method="post">
<input type="text" name="Utente1">
<button type="reset"> cancella</button><br><br><br>
<p1> conferma nome utente </p1><br><br>
<form name="input" action="sito.php" method="post">
<input type="text" name="Utente2">
<p1> inserisci password </p1><br><br>
<form name="input" action="accedi.php" method="post">
<input type="password" maxlength="20" name="password">
<button type="reset"> cancella</button><br><br><br>
<button type="submit"><span style="cursor:pointer"> invia </span></button> 
<body>
</body>
</html>
<?php
function gotoPage($indirizzo=""){
	echo '<script language="javascript">';
	echo 'self.location="'.$indirizzo.'"';
	echo '</script>';}
$servername = "127.0.0.1";
$username = "Pietro Floridia";
$pass = "ciao";
$dbname = "utenti sito";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // use exec() because no results are returned
} catch(PDOException $e) {
  "<br>" . $e->getMessage();
}
if(isset($POST['Utente'])){$Utente= $_POST['Utente']; $password=$_POST['password']; $Utente = strip_tags(mysqli_real_escape_string($conn, trim($Utente))); $password = strip_tags(mysqli_real_escape_string($conn, trim($password)));
$query= "SELECT*FROM account WHERE Utente='".$Utente."'";
$tbl = mysqli_query($conn, $query);
if(mysqli_num_rows($tbl)>0){$row= mysqli_fetch_array($tbl);
if($password_hash = $row['password']){header("location: http://www.sitopietro.hostinggratis.it/sito.php");
  exit;}else{header("location: http://www.sitopietro.hostinggratis.it/accedi.php ");
  exit;}
}};
?>



