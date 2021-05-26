<?php 
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
  body{
     overflow-x: hidden;
    }
  .menu {top: 20px;
        left: 20px;}
  img {
  border-radius: 3px;
  box-shadow: 0 0 10px 8px rgba(18, 0, 19, 0.3);
  border: 2px solid rgba(0, 6, 40, 0.5);
  }
  .products {
	position: relative;
	top: 70px;
	left: 170px;
	margin: auto; 
        vertical-align: middle;

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
  input[type=submit] {
  background-color: #048EB8;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  }
  select {
  background-color: #048EB8;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  }
  select:hover {
  opacity: 0.8;
  }
  input[type=submit]:hover {
  opacity: 0.8;
  }
  input[type=text] {
  width: 15%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #D4F6FA;
  }
  input[type=text]:focus {
  opacity: 0.8;
  outline: none;
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
	
  .btnadd {width: 75%;
           
   }
   .btnadd:hover {
       -ms-transform: scale(1.05);
       -webkit-transform: scale(1.05);
        transform: scale(1.05);
		
    }   
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
 <title>Produkty</title>
</head>
<body>
 <div class="menu">
  <div class="label">Menu</div>
  <div class="spacer"></div>
  <div class="item"><span><a href="BookStore.php">Strona główna</a></span></div>
  <div class="item"><span><a href="Bestsellery.php">Bestsellery</a></span></div>
  <div class="item"><span><a href="Logowanie.php">Logowanie</a></span></div>
  <div class="item"><span><a href="Losuj.php">Losuj książkę</a></span></div>
 </div>
<br/>
<br/>
<h2 id="k" align="center"><i>Książki</i></h2>

 <div class="logged" style="display: <?php echo $disp;?>">
  <a href="profil.php"><img src="files/logged.png" alt=""></a>
 </div>
 <div class="cart" style="display: <?php echo $disp;?>">
  <a href="koszyk.php"><img src="files/cart.png" alt=""></a>
 </div>
 <div class="logout" align="center" style="display: <?php echo $disp;?>">
<a href="logout.php"> Wyloguj się</a>
 </div>

        
        
 <hr>

    <div class="products">
	  <table>
               <thead>
                        <tr>
                               <th>Książka</th>
                               <th>Tytuł</th>
                               <th>Autor</th>
                               <th>Wydawnictwo</th>
                               <th>Gatunek</th>
                               <th>Rok wydania</th>
							   <th>Cena</th>
							   <th>    </th>
							   
			</tr>
		</thead>
		<tbody>
        <?php  
        $result = $link->query("SELECT * FROM ksiazka ORDER BY id_ksiazka ASC"); 
        if($result->num_rows > 0){  
            while($row = $result->fetch_assoc()){ 
        ?>
        <div class="tab">

		 <tr>
				<td><img src="<?php echo $row["okl"]; ?>" alt=""></td>
				<td><?php echo $row["tytul"]; ?></td>
				<td><?php echo $row["autor"]; ?></td>
				<td><?php echo $row["wydawnictwo"]; ?></td>
				<td><?php echo $row["gatunek"]; ?></td>
                <td><?php echo $row["rok"]; ?></td>
				<td><?php echo $row["cena"]; ?> zł</td>
				<td><a href="action1.php?action=addToCart&id=<?php echo $row["id_ksiazka"];?>" class="btnadd" style="display: <?php echo $disp;?>"><img src="files/addcart.png"></a></td>
		 </tr>
		</div>
        <?php } }else{ ?>
        <p>Nie znaleziono produktów.....</p>
        <?php } ?>
	  </tbody>
      </table>	  
    </div>

</body>
</html>