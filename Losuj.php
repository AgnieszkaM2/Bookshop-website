<?php 
session_start();

$disp= "";    

if(isset($_SESSION["id"])){
    $disp = "block";
}else{
    $disp = "none";
}
?>

<!DOCTYPE html>
<head>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <link rel="Stylesheet" type="text/css" href="style.css"/>
  <style>
  .menu {top: 20px;
        left: 20px;}
  input[type=submit] {
    background-color: #048EB8;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
   }
    input[type=submit]:hover {
    opacity: 0.8;
  }
  hr {
    border: 1px solid rgba(45, 204, 231, 0.4);
    box-shadow: 0 0 10px rgba(180, 232, 255, 0.3), 0 0 20px rgba(180, 232, 255, 0.3); 
  }
 .logged {position:absolute;
      top: 20px;
      right: 250px;
    } 
 .logged img {width:75%;
       border-radius: 0px;
       box-shadow: 0 0 0px 0px ;
       border: 0px;
    }
 .logged img:hover {
       -ms-transform: scale(1.05);
       -webkit-transform: scale(1.05);
        transform: scale(1.05);
    }
  .cart {position:absolute;
      top: 20px;
      right: 150px;
    } 
 .cart img{width:75%;
       border-radius: 0px;
       box-shadow: 0 0 0px 0px ;
       border: 0px;
    }
 .cart img:hover {
       -ms-transform: scale(1.05);
       -webkit-transform: scale(1.05);
        transform: scale(1.05);
    }
 .logout {position:absolute;
      top: 45px;
      right: 40px;
    } 
 .logout:hover {
       -ms-transform: scale(1.05);
       -webkit-transform: scale(1.05);
        transform: scale(1.05);
    }
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
 <title>Losuj</title>
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
 <div class="logged" style="display: <?php echo $disp;?>">
  <a href="profil.php"><img src="files/logged.png" alt=""></a>
 </div>
 <div class="cart" style="display: <?php echo $disp;?>">
  <a href="koszyk.php"><img src="files/cart.png" alt=""></a>
 </div>
 <div class="logout" align="center" style="display: <?php echo $disp;?>">
<a href="logout.php"> Wyloguj się</a>
 </div>
 <br/>
 <br/>
 <br/>
 <br/>
 <form action='' method="post">
 <div align="center">
  <h2>Wylosuj kolejną książkę do przeczytania</h2>
  <p>Wybierz gatunek:</p>
  <br/>
  <input type="radio" name="Rodzaj" value="Fantastyka, Sci-fi">Fantastyka, Sci-fi<br/>
  <input type="radio" name="Rodzaj" value="Kryminał, Thriller">Kryminał, Thriller<br/>
  <input type="radio" name="Rodzaj" value="Horror">Horror<br/>
  <input type="radio" name="Rodzaj" value="Młodzieżowa">Młodzieżowa<br/>
  <input type="radio" name="Rodzaj" value="Romans">Romans<br/>
  <input type="radio" name="Rodzaj" value="Obyczajowa">Obyczajowa<br/>
  <input type="radio" name="Rodzaj" value="Przygodowa">Przygodowa<br/>
  <input type="radio" name="Rodzaj" value="Klasyka">Klasyka<br/>
  <br/>
  <br/>
  <input type="submit" value="Losuj">  
  </p>
 </div>
 </form>
 <br/>
 <h3 align="center"><b>Wynik:</b></h3>
 <div id="random"></div>


</body>
</html>