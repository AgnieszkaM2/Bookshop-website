<?php 
error_reporting(E_ALL ^ E_NOTICE);
session_start();
include("cartclass1.php"); 
$cart = new Cart; 

require_once 'config.php'; 

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
  img {
  border-radius: 3px;
  box-shadow: 0 0 10px 8px rgba(18, 0, 19, 0.3);
  border: 2px solid rgba(0, 6, 40, 0.5);
  }
  .koszyk {
	position: relative;
	top: 70px;
	left: 170px;
	margin: auto; 
        vertical-align: middle;

  }
 .logged {position:absolute;
      top: 20px;
      right: 150px;
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
 .logout {position:absolute;
      top: 45px;
      right: 40px;
    } 
 .logout:hover {
       -ms-transform: scale(1.05);
       -webkit-transform: scale(1.05);
        transform: scale(1.05);
    }
 h2 {font-family:"Times New Roman", Times, serif;
      font-size: 90px;
      color: #FBF4EC;
      text-shadow: 0 0 10px rgba(180, 232, 255, 0.3), 0 0 20px rgba(180, 232, 255, 0.3);
      }
 hr {
  border: 1px solid rgba(45, 204, 231, 0.4);
  box-shadow: 0 0 10px rgba(180, 232, 255, 0.3), 0 0 20px rgba(180, 232, 255, 0.3); 
  }

  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
 <title>Koszyk</title>
</head>
<body>
 <div class="menu">
  <div class="label">Menu</div>
  <div class="spacer"></div>
  <div class="item"><span><a href="BookStore.php">Strona główna</a></span></div>
  <div class="item"><span><a href="Książki.php">Książki</a></span></div>
  <div class="item"><span><a href="Logowanie.php">Logowanie</a></span></div>
  <div class="item"><span><a href="Losuj.php">Losuj książkę</a></span></div>
 </div>
 <br/>
 <br/>
 <h2 id="l" align="center"><i>Koszyk</i></h2>
 <div align="right">
<a href="produkty.php"><h3>Produkty =></h3></a><br/>
</div>
 <div class="logged">
  <a href="profil.php"><img src="files/logged.png" alt=""></a>
 </div>
 <div class="logout" align="center">
<a href="logout.php"> Wyloguj się</a>
 </div>

 <br/>
  <hr>

    <div class="koszyk">
	  <table>
               <thead>
                        <tr>
                               <th>Książka</th>
                               <th>Tytuł</th>
                               <th>Autor</th>
                               <th>Wydawnictwo</th>
                               <th>Cena</th>
							   <th> </th>
			</tr>
		</thead>
		<tbody>
        <?php  
        $result = $link->query("SELECT 
                                koszyk.id_koszyk,
                                ksiazka.okl, 
                                ksiazka.tytul, 
                                ksiazka.autor, 
                                ksiazka.wydawnictwo, 
                                ksiazka.cena
                                FROM
                                koszyk
                                INNER JOIN ksiazka 
                                ON koszyk.id_ksiazka = ksiazka.id_ksiazka;"); 
        if($result->num_rows > 0){  
            while($row = $result->fetch_assoc()){ 
        ?>
        <div class="tab">

		 <tr>
				<td><img src="<?php echo $row["okl"]; ?>" alt=""></td>
				<td><?php echo $row["tytul"]; ?></td>
				<td><?php echo $row["autor"]; ?></td>
				<td><?php echo $row["wydawnictwo"]; ?></td>
				<td><?php echo $row["cena"] ?>zł</td>
				<td><a href="action1.php?action=removeCartItem&id=<?php echo $row["id_koszyk"]; ?>" class="rm">Usuń</a></td>
		 </tr>
		</div>
        <?php } }else{ ?>
        <p>Nie znaleziono produktów.....</p>
        <?php } ?>
	  </tbody>
      </table>	  
    </div>
	<br/>
	<br/>
	<br/>
	<hr>
	<div align="center">
	<a href="action1.php?action=reset&uid=<?php echo $_SESSION["id"]; ?>" class="r">Resetuj koszyk</a>
	</div>


</body>
</html>