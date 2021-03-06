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
  <meta name="description" content="Strona o ksi????kach">
  <meta name="keywords" content=" ">
  <meta name="author" content="Agnieszka Martuszka">
  <title>BookStore</title>
</head>
<body>
<h1 id="header" align="center">BookStore</h1>
<h3 align="center" id="napis"><i>Nowo??ci ksi????kowe, bestsellery i nie tylko!<br/>~Znajd?? ksi????k?? dla siebie~</i></h3>
<div id="sz" align="right">
<h3>Wyszukiwanie ksi????ek</h3>
<form action="search.php" method="post">
Wyszukaj wed??ug:
<select name="metoda">
<option value="autor">Autora
<option value="tytul">Tytu??u
<option value="wyd">Wydawnictwa
</select>
<br/><br/>
Szukane wyra??enie:
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
<a href="logout.php"> Wyloguj si??</a>
 </div>
<div class="menu">
  <div class="label">Menu</div>
  <div class="spacer"></div>
  <div class="item"><span><a href="Ksi????ki.php">Ksi????ki</a></span></div>
  <div class="item"><span><a href="Bestsellery.php">Bestsellery</a></span></div>
  <div class="item"><span><a href="Logowanie.php">Logowanie</a></span></div>
  <div class="item"><span><a href="Losuj.php">Losuj ksi????k??</a></span></div>
</div>
<hr id="up">
<br/>
<br/>
<p>
<h1 align="center">Nowo??ci</h1>
<hr>
<br/>
<!-- Slideshow Container Div -->
<div class="container"> 
  <!--img-->
  <div class="image-sliderfade fade"> 
    <img src="https://s.lubimyczytac.pl/upload/books/4908000/4908523/777162-352x500.jpg" alt="" style="width:50%"> 
    <div class="text">Instytut<br/>K.C.Archer<br/>Wydawnictwo: Uroboros<br/>Gatunek: fantastyka, science fiction<br/>Teddy Cannon nie jest typow?? dwudziestokilkuletni?? kobiet??. Owszem, jest zaradna, bystra i pokr??cona. Ale potrafi te?? z niesamowit?? precyzj?? czyta?? ludzi. Nie zdaje sobie jednak sprawy, ??e jest prawdziwym medium.
Kiedy seria z??ych decyzji prowadzi Teddy do wpadki z policj??, interweniuje tajemniczy nieznajomy. Zaprasza j?? do z??o??enia podania do instytutu dla medi??w, plac??wki ukrytej u wybrze??y San Francisco, gdzie studenci s?? szkoleni niczym pracownicy Delta Force: uczelnia ta jest konkurencyjna, bezwzgl??dna i ??ci??le tajna. Studenci ucz?? si?? tam telepatii, telekinezy, umiej??tno??ci ??ledczych i taktyki SWAT. A je??li przetrwaj?? szkolenie, kontynuuj?? s??u??b?? na najwy??szych szczeblach w??adzy, wykorzystuj??c swoje umiej??tno??ci do ochrony Ameryki i ??wiata.</div> 
  </div> 
  
  <div class="image-sliderfade fade"> 
    <img src="https://s.lubimyczytac.pl/upload/books/4923000/4923668/807601-352x500.jpg" alt="" style="width:50%"> 
    <div class="text">Samotno????<br/>Jozef Karika<br/>Wydawnictwo: Stara Szko??a<br/>Gatunek: horror<br/>Samotno???? - najwi??ksza obawa ludzko??ci.
Czai si?? w k??tach, wyczekuje. Zawsze gotowa do ataku.

Nocna przeja??d??ka poci??giem wydawa??a si?? dobrym sposobem na ucieczk?? przed samotno??ci??. 
G??rski krajobraz za oknem, monotonny stukot k????. 
I pewien pasa??er w ??????tej kurtce... Czy rzeczywi??cie uda si?? uciec?</div> 
  </div> 
  
  <div class="image-sliderfade fade"> 
    <img src="https://s.lubimyczytac.pl/upload/books/4906000/4906415/772296-352x500.jpg" alt="" style="width:50%"> 
    <div class="text">Ostatni<br/>Hanna Jameson<br/>Wydawnictwo: Czarna Owca<br/>Gatunek: krymina??, sensacja, thriller<br/>Barbarzy??skie morderstwo, jeden hotel i dwudziestu ocala??ych. Jak mo??na czu?? si?? bezpiecznie, gdy morderca jest w??r??d nas?
Ameryka??ski historyk ??? Jon Keller ??? jedzie na konferencj?? naukow?? do Szwajcarii. W trakcie dowiaduje si??, ??e ??wiat si?? ko??czy. W Waszyngtonie i kilku ??wiatowych stolicach dosz??o do ataku nuklearnego. Podczas gdy gasn?? ??wiat??a cywilizacji, m????czyzna zastanawia si??, czy jego ??ona Nadia i ich dwie c??rki wci???? ??yj??. Jon ??a??uje te??, ??e zignorowa?? ostatni?? wiadomo???? od Nadii.
Opr??cz Jona w hotelu znajduje si?? dwudziestu ocala??ych. Z dala od najbli??szego miasta walcz?? o przetrwanie. Pewnego dnia w zbiorniku na wod?? pitn?? znajduj?? cia??o dziewczynki. Oczywiste jest, ??e zosta??a zamordowana. Kto?? z mieszka??c??w hotelu jest zab??jc??.
  </div> 
  </div> 
  
  <div class="image-sliderfade fade"> 
    <img src="https://s.lubimyczytac.pl/upload/books/4911000/4911178/782056-352x500.jpg" alt="" style="width:50%"> 
    <div class="text">Cyberpunk. Odrodzenie<br/>Andrzej Ziemia??ski<br/>Wydawnictwo: Akurat<br/>Gatunek: fantastyka, science fiction<br/>Okryte mg???? i spowite deszczem wie??owce, w??skie, zat??oczone uliczki, pulsuj??ce neony i wielkoformatowe reklamy daj?? t??o rzeczywisto??ci, w kt??rej kwitnie przest??pczo????. To ??wiat, w kt??rym jednostka nic nie znaczy, a za los og????u odpowiadaj?? wielkie korporacje i gangi. To Zakazane Miasto.
Shey Scott ??? by??y policjant, wydalony ze s??u??by z powodu ??miertelnej choroby oraz partneruj??cy mu Lou Landon usi??uj?? namierzy?? Axel Staller ??? bli??niacz?? siostr?? kobiety, kt??ra w bia??y dzie??, mimo najwy??szych ??rodk??w bezpiecze??stwa i drobiazgowej kontroli, pod okiem kamer, z niewiadomych przyczyn zamordowa??a kilkana??cie os??b.</div> 
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

<!--Prze????czanie slajdu co 6 s.-->
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

<!--Prze????czanie slajdu przyciskiem-->
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


<!--??r??d??a skrypt??w na stronach: codepen.io, w3schools.com, makitweb.com-->
</body>
</html>