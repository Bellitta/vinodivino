<!DOCTYPE html>
  <html>
  <head>
    <title>Il vinaio</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>




    <link href='css/bootstrap.min.css' rel='stylesheet' media='screen'>
     <link rel="stylesheet" href="css/main.css" type="text/css">



    <script src="js/jquery-1.10.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
    $(document).ready(function(){
        $("#buy").click(function(){
            $("body").scrollTop();
            $(".avviso").fadeIn();
            $(".avviso").fadeOut(2000);
            setTimeout(function() {
                window.location.href = "index.php";
            }, 2000);
        });
    });
    </script>
          <?php
      
      $login="";

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

    $uri = $_SERVER['REQUEST_URI'];
                            if(strpos($uri, 'login=') !== false){
                                $login = $_GET["login"];
                            if ($login != ""){
                                echo "Benvenuto, <i style='color:blue'>$login</i>";

                                             }
                            }
      $query_totale = "SELECT totale FROM carrello WHERE username = '$login'";
      $result_query_totale = mysqli_query ($conn, $query_totale);
         if (!$result_query_totale)
             die ("Errore nell'aggiunta al carrello: select non riuscita");

    $trova_id_carrello = "SELECT id FROM carrello WHERE username = '$login'";
      
      while($row6 = mysqli_fetch_assoc($result_query_totale)) {
      $totale_trovato = $row6["totale"];
      }

      $result_trova_id = mysqli_query ($conn, $trova_id_carrello);
  if (!$result_trova_id)
	  die ("Errore nella select: $trova_id_carrello");

     while($row5 = mysqli_fetch_assoc($result_trova_id)) {
      $id_trovato = $row5["id"];
         echo "$id_trovato";
    }

      $trova_prodotti_carrello = "SELECT nome, prezzo FROM prodotti
                   INNER JOIN dettaglio_carrello ON dettaglio_carrello.id_prodotto = prodotti.id
                   WHERE dettaglio_carrello.id_carrello = '$id_trovato' ";

      $result_trova_prodotti = mysqli_query ($conn, $trova_prodotti_carrello);
  if (!$result_trova_prodotti)
	  die ("Errore nell'aggiunta a dettaglio_carrello: $result_trova_prodotti");



	$connessione = new mysqli("localhost","root","","vinodivino");





   ?>
   </head>


  <body>


  <nav class ="navbar navbar-default navbar-fixed-top row">
      <div class="divlogo">
          <?php 
          echo '<a href="index.php?login='.$login.'"><img class="logo" src="images/logo/logo.png"></a>'
          ?>
      </div>
    <div class="col-md-1">&nbsp;</div>

      <div class="collapsible mobile-collapsible social col-md-3"><span class="opener">Seguici anche su:</span>

    <div>
        <a href="#" target='_blank'>
            <img alt='Condividi su Facebook' title='Condividi su Facebook' src='https://lh4.googleusercontent.com/-tutkZx_njkw/UHkrNF2q4gI/AAAAAAAAbKg/ksbdkxVuIj4/s45/facebook.jpg'/>
        </a>&#160;&#160;
        <a href="#" target="_blank">
           <img src="https://lh3.googleusercontent.com/-eUO3hVxixtM/UHkrSghfDiI/AAAAAAAAbK4/YxXDdaTC53Y/s45/twitter.jpg" alt="Seguimi su Twitter" title="Seguimi su Twitter"/>
        </a>&#160;&#160;
        <a href="#" target="_blank">
            <img src="https://lh6.googleusercontent.com/-sKNZ1bZ3wpk/UHkrPH8IoCI/AAAAAAAAbKo/ME2rwpbV_yY/s45/googleplus.jpg" alt="Seguimi su Google Plus" title="Seguimi su Google Plus" />
        </a>&#160;&#160;
    <a href="#" target="_blank"><img src="https://lh6.googleusercontent.com/-sBwxyyGar8M/UHkrQ_Cx3WI/AAAAAAAAbKw/So42fQWyfVQ/s45/pinterest.jpg" alt="Seguimi su Pinterest" title="Seguimi su Pinterest" /></a>
    </div>
    </div>


<!-- menu mobile-->
    <div class="container">
	    <div class="navbar-header">
		    <button class="navbar-toggle" data-toggle="collapse" data-target="#menunegozio">
			    <span class="icon-bar"> </span>
				<span class="icon-bar"> </span>
				<span class="icon-bar"> </span>
			</button>
		</div>






    <!-- menu-->

		<div id="menunegozio" class="collapse navbar-collapse col-md-3">

		    <ul class="nav navbar-nav">
                <li><a href= "#"><?php
                        $uri = $_SERVER['REQUEST_URI'];
                            if(strpos($uri, 'login=') !== false){
                                $login = $_GET["login"];
                            if ($login != ""){
                                echo "Benvenuto, <i style='color:blue'>$login</i>";

                                             }
                            }


                      ?>

                     </a>
                </li>
			    <li> <a href= "#"> Tutti i vini </a> </li>
                  <li> <a href= "#"> Offerte </a> </li>



				 <li class="dropdown"> <a href= "#" class="dropdown-toggle" data-toggle="dropdown">  Area riservata <span class="caret"></span> </a>
				     <ul class="dropdown-menu">
						 <li> <a href="carrello.php"> Carrello </a> </li>
						 <li class="divider"> </li>
						 <li> <a href="#"> Login </a> </li>
                         <li> <a href= "login.php"> Registrati </a> </li>
				     </ul>
				 </li>
			</ul>



		</div>

	</div>


</nav>




<div class="container carrello">
    <div class="avviso alert alert-success" style="z-index:9999">Grazie per aver acquistato sul nostro sito!
    </div>
<h1> Carrello </h1>
<div class="col-md-6">





    <div>
    <?php

        if (!($risultato = $connessione->query($trova_prodotti_carrello)))
          die("Query sui prodotti fallita!");

        $i=1;
        while ($riga = $risultato->fetch_array()) {

		  $nome=$riga["nome"];


          $prezzo=$riga["prezzo"];



          if ($i==1) {
            echo "<table class='table'>";
               echo "  <tr>
                <th>Prodotti</th>

                <th>Prezzo</th>

                </tr>
                    <tr>";
          }





          echo "<td><div class='td_prodotto'>$nome</div></td>";
          echo " <td><div class='td_price'><span class='badge badge-success'>EUR $prezzo</span></div></td>";

          echo "</tr>";


          if ($i==8) {
            $i=1;
          } else {
            $i++;
          }

        }
        if ($i!=1) {
          echo "</div>";
        }
        if ($login != "")
        echo "<tr><td colspan = '2'><b>Totale: $totale_trovato </b></td></tr>";
        echo "</table>";
         ?>

        </div>
        <div>
    <button class="btn btn-success click" id="buy">Acquista</button>
    </div>

</div>
</div>


<!--
<div id="footerWrap" class="voffset5">
  <footer class="container">
    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce justo metus</p>
  </footer>
</div>
-->

<div class="content">
</div>
   <footer id="myFooter" style="background-color:#f8f8f8" >
        <div class="container">
            <div class="row">
                
                <div class="col-sm-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <button type="button" class="btn btn-default">Contact us</button>
                </div>
            </div>
        </div>

        <div class="footer-copyright" style="text-align:center;">
            <p>© 2017 Copyright Perano/Bellitta </p>
        </div>
    </footer>
<!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
-->


  </body>
</html>