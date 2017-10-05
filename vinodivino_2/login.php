<!DOCTYPE html>
<html>
<head>
  <title>Vino Divino</title>
  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>




  <link href='css/bootstrap.min.css' rel='stylesheet' media='screen'>
   <link rel="stylesheet" href="css/main.css" type="text/css">



  <script src="js/jquery-1.10.1.js"></script>
  <script src="js/bootstrap.js"></script>

 </head>




 <body>


 <nav class ="navbar navbar-default navbar-fixed-top row">
     <div class="divlogo">
     <img class="logo" src="images/logo/logo.png">
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



<div class="container">
 <br> <br>
<h1> Registrati </h1>
<div class="row">
  <div class="register col-sm-5" style="margin-top:50px">
    <h3>Registrati</h3>
    <form action="do_registra.php" method="post" class="form-horizontal">
      <div class="form-group">
        <label for ="username" class="col-sm-4 control-label"> Username </label>
        <div class="col-sm-8">
          <input name="username" type ="text" id="username" required class="form-control" placeholder="Inserisci il tuo indirizzo username">
        </div>
      </div>

      <div class="form-group">
        <label for ="pwd" class="col-sm-4 control-label"> Password </label>
        <div class="col-sm-8">
          <input name="password" type ="password" id="pwd" required class="form-control" placeholder="Inserisci password">
        </div>
      </div>

      <div class="form-group">
        <label for ="cognome" class="col-sm-4 control-label"> Cognome </label>
        <div class="col-sm-8">
          <input name="cognome" type ="text" id="cognome" required class="form-control" placeholder="Es.Rossi">
        </div>

      </div>

      <div class="form-group">
        <label for ="nome" class="col-sm-4 control-label"> Nome </label>
        <div class="col-sm-8">
          <input name="nome" type ="text" id="nome" required class="form-control" placeholder="Es.MarioS">
        </div>
      </div>

      <div class="form-group">
        <label for ="indirizzo" class="col-sm-4 control-label"> Indirizzo </label>
        <div class="col-sm-8">
          <input name="indirizzo" type ="text" id="indirizzo" required class="form-control" placeholder="Es.ViaVado2">
        </div>
      </div>

      <div class="form-group">
        <label for ="regione" class="col-sm-4 control-label"> Regione </label>
        <div class="col-sm-8">
          <input name="regione" type ="text" id="regione" required class="form-control" placeholder="Es.Marche">
        </div>
      </div>


      <div class="form-group">
        <div class="col-sm-offset-4 col-sm-3">
          <button type="submit" class="btn btn-warning"> Registrati </button>
        </div>
      </div>

    </form>
  </div>



  <div class="login col-sm-5"  style="margin-top:50px">
    <h3>Accedi</h3>
    <form action="do_login.php" method="post" class="form-horizontal">
      <div class="form-group">
        <label for ="username" class="col-sm-4 control-label"> Username </label>
        <div class="col-sm-8">
          <input name="username" type ="text" id="username" required class="form-control" placeholder="Inserisci il tuo indirizzo username">
        </div>
      </div>

      <div class="form-group">
        <label for ="pwd" class="col-sm-4 control-label"> Password </label>
        <div class="col-sm-8">
          <input name="password" type ="password" id="pwd" required class="form-control" placeholder="Inserisci password">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-4 col-sm-3">
          <button type="submit" class="btn btn-success"> Accedi </button>
        </div>
      </div>

    </form>
  </div>
</div>
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
