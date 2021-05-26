<?php 
include_once 'config.php';
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
  .menu {top: 600px;
        left: 20px;}
  img { box-shadow: 10px 10px 10px 10px #342052;
        } 
  img:hover {
  -ms-transform: scale(1.02);
  -webkit-transform: scale(1.02);
  transform: scale(1.02); 
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
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Strona o książkach">
  <meta name="keywords" content=" ">
  <meta name="author" content="Agnieszka Martuszka">
  <title>BookStore</title>
</head>
<body>
<h1 id="header" align="center">BookStore</h1>
<h3 align="center" id="napis"><i>Nowości książkowe, bestsellery i nie tylko!<br/>~Znajdź książkę dla siebie~</i></h3>
<div id="sz" align="right">
<h3>Wyszukiwanie książek</h3>
<form action="search.php" method="post">
Wyszukaj według:
<select name="metoda">
<option value="autor">Autora
<option value="tytul">Tytułu
<option value="wyd">Wydawnictwa
</select>
<br/><br/>
Szukane wyrażenie:
<input type="text" name="wyrazenie">
<input type="submit" value="Szukaj">
</form>
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
<div class="menu">
  <div class="label">Menu</div>
  <div class="spacer"></div>
  <div class="item"><span><a href="Książki.php">Książki</a></span></div>
  <div class="item"><span><a href="Bestsellery.php">Bestsellery</a></span></div>
  <div class="item"><span><a href="Logowanie.php">Logowanie</a></span></div>
  <div class="item"><span><a href="Losuj.php">Losuj książkę</a></span></div>
</div>
<hr id="up">
<br/>
<br/>
<p>
<h1 align="center">Nowości</h1>
<hr>
<br/>
<!-- Slideshow Container Div -->
<div class="container"> 
  <!--img-->
  <div class="image-sliderfade fade"> 
    <img src="https://s.lubimyczytac.pl/upload/books/4908000/4908523/777162-352x500.jpg" alt="" style="width:50%"> 
    <div class="text">Instytut<br/>K.C.Archer<br/>Wydawnictwo: Uroboros<br/>Gatunek: fantastyka, science fiction<br/>Teddy Cannon nie jest typową dwudziestokilkuletnią kobietą. Owszem, jest zaradna, bystra i pokręcona. Ale potrafi też z niesamowitą precyzją czytać ludzi. Nie zdaje sobie jednak sprawy, że jest prawdziwym medium.
Kiedy seria złych decyzji prowadzi Teddy do wpadki z policją, interweniuje tajemniczy nieznajomy. Zaprasza ją do złożenia podania do instytutu dla mediów, placówki ukrytej u wybrzeży San Francisco, gdzie studenci są szkoleni niczym pracownicy Delta Force: uczelnia ta jest konkurencyjna, bezwzględna i ściśle tajna. Studenci uczą się tam telepatii, telekinezy, umiejętności śledczych i taktyki SWAT. A jeśli przetrwają szkolenie, kontynuują służbę na najwyższych szczeblach władzy, wykorzystując swoje umiejętności do ochrony Ameryki i świata.</div> 
  </div> 
  
  <div class="image-sliderfade fade"> 
    <img src="https://s.lubimyczytac.pl/upload/books/4923000/4923668/807601-352x500.jpg" alt="" style="width:50%"> 
    <div class="text">Samotność<br/>Jozef Karika<br/>Wydawnictwo: Stara Szkoła<br/>Gatunek: horror<br/>Samotność - największa obawa ludzkości.
Czai się w kątach, wyczekuje. Zawsze gotowa do ataku.

Nocna przejażdżka pociągiem wydawała się dobrym sposobem na ucieczkę przed samotnością. 
Górski krajobraz za oknem, monotonny stukot kół. 
I pewien pasażer w żółtej kurtce... Czy rzeczywiście uda się uciec?</div> 
  </div> 
  
  <div class="image-sliderfade fade"> 
    <img src="https://s.lubimyczytac.pl/upload/books/4906000/4906415/772296-352x500.jpg" alt="" style="width:50%"> 
    <div class="text">Ostatni<br/>Hanna Jameson<br/>Wydawnictwo: Czarna Owca<br/>Gatunek: kryminał, sensacja, thriller<br/>Barbarzyńskie morderstwo, jeden hotel i dwudziestu ocalałych. Jak można czuć się bezpiecznie, gdy morderca jest wśród nas?
Amerykański historyk – Jon Keller – jedzie na konferencję naukową do Szwajcarii. W trakcie dowiaduje się, że świat się kończy. W Waszyngtonie i kilku światowych stolicach doszło do ataku nuklearnego. Podczas gdy gasną światła cywilizacji, mężczyzna zastanawia się, czy jego żona Nadia i ich dwie córki wciąż żyją. Jon żałuje też, że zignorował ostatnią wiadomość od Nadii.
Oprócz Jona w hotelu znajduje się dwudziestu ocalałych. Z dala od najbliższego miasta walczą o przetrwanie. Pewnego dnia w zbiorniku na wodę pitną znajdują ciało dziewczynki. Oczywiste jest, że została zamordowana. Ktoś z mieszkańców hotelu jest zabójcą.
  </div> 
  </div> 
  
  <div class="image-sliderfade fade"> 
    <img src="https://s.lubimyczytac.pl/upload/books/4911000/4911178/782056-352x500.jpg" alt="" style="width:50%"> 
    <div class="text">Cyberpunk. Odrodzenie<br/>Andrzej Ziemiański<br/>Wydawnictwo: Akurat<br/>Gatunek: fantastyka, science fiction<br/>Okryte mgłą i spowite deszczem wieżowce, wąskie, zatłoczone uliczki, pulsujące neony i wielkoformatowe reklamy dają tło rzeczywistości, w której kwitnie przestępczość. To świat, w którym jednostka nic nie znaczy, a za los ogółu odpowiadają wielkie korporacje i gangi. To Zakazane Miasto.
Shey Scott – były policjant, wydalony ze służby z powodu śmiertelnej choroby oraz partnerujący mu Lou Landon usiłują namierzyć Axel Staller – bliźniaczą siostrę kobiety, która w biały dzień, mimo najwyższych środków bezpieczeństwa i drobiazgowej kontroli, pod okiem kamer, z niewiadomych przyczyn zamordowała kilkanaście osób.</div> 
  </div> 
  
<button class="left" onclick="plusDivs(-1)">&#10094;</button>
<button class="right" onclick="plusDivs(+1)">&#10095;</button>
</div> 
<br/> 
<!-- dots -->
<div style="text-align:center"> 
  <span class="dot"></span>  
  <span class="dot"></span>  
  <span class="dot"></span>  
  <span class="dot"></span> 
</div> 

<!--Przełączanie slajdu co 6 s.-->
<script type="text/javascript">
var slideIndex = 0; 
showSlides();
   
function showSlides() 
{ 
    var i; 
  
    var slides = document.getElementsByClassName("image-sliderfade");  
      
    var dots = document.getElementsByClassName("dot");  
  
    for (i = 0; i < slides.length; i++) { 

        slides[i].style.display = "none";  
    } 
   
    slideIndex++;  
   
    if (slideIndex > slides.length)  
    { 
        slideIndex = 1; 
    } 
   
    for (i = 0; i < dots.length; i++) { 
        dots[i].className = dots[i].className. 
                            replace(" active", ""); 
    } 
   
    slides[slideIndex - 1].style.display = "block"; 
    dots[slideIndex - 1].className += " active"; 
   
    setTimeout(showSlides, 6000);  
} 
</script>

<!--Przełączanie slajdu przyciskiem-->
<script type="text/javascript">
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("image-sliderfade fade");
  var dots = document.getElementsByClassName("dot");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
  for (i = 0; i < dots.length; i++) { 
        dots[i].className = dots[i].className. 
                            replace(" active", ""); 
    } 
    dots[slideIndex - 1].className += " active"; 
}
</script>


<!--źródła skryptów na stronach: codepen.io, w3schools.com, makitweb.com-->
</body>
</html>