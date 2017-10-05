<?php

   $uri = $_SERVER['REQUEST_URI'];
                            if(strpos($uri, 'login=') !== false){
                                $login = $_GET["login"];
                            if ($login != ""){
                                echo "Benvenuto, <i style='color:blue'>$login</i>";

                                             }
                            }

    $id_prodotto = $_REQUEST["id_prodotto"];
    $user = $login;


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


$check_utente = "SELECT username FROM carrello WHERE username = '$user'";

$add_user_cart = "INSERT INTO carrello (username) VALUES ('$user')";



     $result_check_utente = mysqli_query ($conn, $check_utente);
         if (!$result_check_utente)
             die ("Errore nell'aggiunta al carrello: select non riuscita");
        while($row_check = mysqli_fetch_assoc($result_check_utente)) {
                    $check_flag = $row_check["username"];
    }


        if ($check_flag == "") {
           $result_add_user = mysqli_query ($conn, $add_user_cart);
                         if (!$result_add_user)
             die ("Errore nell'aggiunta al carrello: insert non riuscito");
        }



$get_id = "SELECT id FROM carrello WHERE username = '$user'";

    $result3 = mysqli_query ($conn, $get_id);
  if (!$result3)
	  die ("Errore nell'aggiunta al carrello: $get_id");

while($row = mysqli_fetch_assoc($result3)) {
      $id_carrello = $row["id"];
    }




$add_product = "INSERT INTO dettaglio_carrello (id_carrello,id_prodotto) VALUES ('$id_carrello', '$id_prodotto')";



$result2 = mysqli_query ($conn, $add_product);
  if (!$result2)
	  die ("Errore nell'aggiunta a dettaglio_carrello: $add_product");

$total_cart = "SELECT SUM(prezzo) AS totale_prezzo
FROM prodotti
INNER JOIN dettaglio_carrello ON dettaglio_carrello.id_prodotto = prodotti.id
WHERE dettaglio_carrello.id_carrello = $id_carrello";

    $result4 = mysqli_query ($conn, $total_cart);
  if (!$result4)
	  die ("Errore nell'aggiunta a dettaglio_carrello: $total_cart");

    while($row1 = mysqli_fetch_assoc($result4)) {
      $totale = $row1["totale_prezzo"];
    }



  $add_total = "UPDATE carrello
  SET totale = $totale
  WHERE id = $id_carrello";

$result5 = mysqli_query ($conn, $add_total);
  if (!$result5)
	  die ("Errore nell'aggiunta a dettaglio_carrello: $add_total");

  header('Location: index.php?login='.$user.'&add_one=true');
  exit ();



    ?>
