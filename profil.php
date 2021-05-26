<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);

?>

<!DOCTYPE html>
<head>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <link rel="Stylesheet" type="text/css" href="style.css"/>
  <style>
  .menu {top: 20px;
        left: 20px;}
  hr {
    border: 1px solid rgba(45, 204, 231, 0.4);
    box-shadow: 0 0 10px rgba(180, 232, 255, 0.3), 0 0 20px rgba(180, 232, 255, 0.3); 
  }
   h2 {font-family:"Times New Roman", Times, serif;
      font-size: 50px;
      color: #FBF4EC;
      text-shadow: 0 0 10px rgba(180, 232, 255, 0.3), 0 0 20px rgba(180, 232, 255, 0.3);
      }
   h3 {font-family:"Times New Roman", Times, serif;
      font-size: 30px;
      color: #FBF4EC;
      text-shadow: 0 0 10px rgba(180, 232, 255, 0.3), 0 0 20px rgba(180, 232, 255, 0.3);
      }
	h4 {font-family:"Times New Roman", Times, serif;
      font-size: 28px;
      color: #FBF4EC;
      text-shadow: 0 0 10px rgba(180, 232, 255, 0.3), 0 0 20px rgba(180, 232, 255, 0.3);
      }  
  #imgf {
      width: 280px;
      height: 330px;
      background-color: #048EB8;
      position: absolute;
      top: 220px;
      left: 250px;
  }
  #nazwa {
      position: relative;
      top: 50px;
      text-align: center;
  }
  #mail {
      position: relative;
      top: -80px;
      text-align: center;
  }
  #opis {
      position: relative;
      top: 230px;
      text-align: center;
  }
  #ile {
      position: relative;
      top: 200px;
      text-align: center;
  }
  #lista {
      position: relative;
      top: 260px;
      text-align: center;
  }
  img {
      width: 280px;
      height: 330px;	  
      border-radius: 3px;
      box-shadow: 0 0 10px 8px rgba(18, 0, 19, 0.3);
      border: 2px solid rgba(0, 6, 40, 0.5);
  }
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
 <title>Profil</title>
</head>
<body>
 <div class="menu">
  <div class="label">Menu</div>
  <div class="spacer"></div>
  <div class="item"><span><a href="BookStore.php">Strona główna</a></span></div>
  <div class="item"><span><a href="Bestsellery.php">Bestsellery</a></span></div>
  <div class="item"><span><a href="Książki.php">Książki</a></span></div>
  <div class="item"><span><a href="Logowanie.php">Logowanie</a></span></div>
 </div>
 <br/>
 <br/>
 <h2 align="center"><i>Profil użytkownika</i></h2>
 <div id="imgf">
<img src="uploads/image/<?php echo $_SESSION["plik"];?>">
 </div>
 <div id="nazwa">
  <h3 align="center">Nazwa użytkownika:</h3>
<h4><?php echo $_SESSION["nazwa"]; ?></h4>
 </div>
 <div id="opis">
  <h3 align="center">Opis:</h3>
<h4><?php echo $_SESSION["opis"]; ?></h4>
 </div>
 <div id="mail">
  <h3 align="center">Email:</h3>
<h4><?php echo $_SESSION["email"]; ?></h4>
 </div>
 <div id="ile">
  <h3 align="center">Średnia ilość czytanych w miesiącu książek:</h3>
<h4><?php echo $_SESSION["il"]; ?></h4>
 </div>
 <div id="lista">
  <h3 align="center">Lista:</h3>
 </div>
</body>
</html>