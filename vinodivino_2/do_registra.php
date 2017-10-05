<?php

  $indirizzo = $_REQUEST["indirizzo"];
  $nome = $_REQUEST["nome"];
  $cognome = $_REQUEST["cognome"];
  $password = $_REQUEST["password"];
  $user = $_REQUEST["username"];
  $regione = $_REQUEST["regione"];


  $servername = "localhost";
  $username = "root";
  $pwdserver = "";
  $dbname = "vinodivino";


  $conn = mysqli_connect ($servername, $username, $pwdserver);
  if (!$conn)
	  die ("Errore nella connessione al $servername");
 $seldb = mysqli_select_db ($conn,$dbname);
  if (!$seldb)
	  die ("Errore nella connessione all'archivio $dbname");


  $query = "INSERT INTO utenti (username,password,cognome,nome,indirizzo,regione) VALUES ('$user', '$password', '$cognome', '$nome', '$indirizzo', '$regione')";

  $result = mysqli_query ($conn, $query);
  if (!$result)
	  die ("Errore nella registrazione dell'utente: $query");


  header('Location: index.php?registrazione=true');
  exit ();
?>
