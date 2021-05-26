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
  img {
  border-radius: 3px;
  box-shadow: 0 0 10px 8px rgba(18, 0, 19, 0.3);
  border: 2px solid rgba(0, 6, 40, 0.5);
  }
  .container {
	position: relative;
	top: 70px;
	left: -260px;
	margin: auto; 
        vertical-align: middle;

  }
 h2 {font-family:"Times New Roman", Times, serif;
      font-size: 90px;
      color: #FBF4EC;
      text-shadow: 0 0 10px rgba(180, 232, 255, 0.3), 0 0 20px rgba(180, 232, 255, 0.3);
      }
 h3 {font-family:"Times New Roman", Times, serif;
      font-size: 60px;
      color: #FBF4EC;
      text-shadow: 0 0 10px rgba(180, 232, 255, 0.3), 0 0 20px rgba(180, 232, 255, 0.3);
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
 <title>Bestsellery</title>
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
 <h2 id="l" align="center"><i>Bestsellery</i></h2>
 <br/>
 <div class="logged" style="display: <?php echo $disp;?>">
  <a href="profil.php"><img src="files/logged.png" alt=""></a>
 </div>
 <div class="cart" style="display: <?php echo $disp;?>">
  <a href="koszyk.php"><img src="files/cart.png" alt=""></a>
 </div>
 <div class="logout" align="center" style="display: <?php echo $disp;?>">
<a href="logout.php"> Wyloguj się</a>
 </div>
 <div id="navbar">
  <a href="#l">Bestsellery</a>
  <a href="#a">2020</a>
  <a href="#b">2019</a>
  <a href="#c">2018</a>
 </div>
 <br/>
 <hr>
 <h3 id="a" align="center"><i>2020</i></h3>
 <hr>
 <div class="container">
	<table>
		<thead>
			<tr>
				<th>Książka</th>
				<th>Tytuł</th>
				<th>Autor</th>
				<th>Wydawnictwo</th>
				<th>Gatunek</th>
                                <th>Rok wydania</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><a href="https://lubimyczytac.pl/ksiazka/240310/ostatnie-zyczenie"><img src="https://s.lubimyczytac.pl/upload/books/240000/240310/490965-170x243.jpg" alt=""></a></td>
				<td>Ostatnie życzenie</td>
				<td>Andrzej Sapkowski</td>
				<td>superNOWA</td>
				<td>fantastyka</td>
                                <td>1993</td>
			</tr>
			<tr>
				<td><a href="https://lubimyczytac.pl/ksiazka/4858831/bieguni"><img src="https://s.lubimyczytac.pl/upload/books/4858000/4858831/683216-170x243.jpg" alt=""></a></td>
				<td>Bieguni</td>
				<td>Olga Tokarczuk</td>
				<td>Wydawnictwo Literackie</td>
				<td>literatura piękna</td>
                                <td>2018</td>
			</tr>
			<tr>
				<td><a href="https://lubimyczytac.pl/ksiazka/4906497/przyjaciel-czlowieka"><img src="https://s.lubimyczytac.pl/upload/books/4906000/4906497/776463-170x243.jpg" alt=""></a></td>
				<td>Przyjaciel człowieka</td>
				<td>Andrzej Pilipiuk</td>
				<td>Fabryka Słów</td>
				<td>fantastyka</td>
                                <td>2020</td>
			</tr>
			<tr>
				<td><a href="https://lubimyczytac.pl/ksiazka/4875862/pacjentka"><img src="https://s.lubimyczytac.pl/upload/books/4875000/4875862/714378-170x243.jpg" alt=""></a></td>
				<td>Pacjentka</td>
				<td>Alex Michaelides</td>
				<td>W.A.B.</td>
				<td>kryminał</td>
                                <td>2019</td>
			</tr>
			<tr>
				<td><a href="https://lubimyczytac.pl/ksiazka/4858158/bastion"><img src="https://s.lubimyczytac.pl/upload/books/4858000/4858158/680932-170x243.jpg" alt=""></a></td>
				<td>Bastion</td>
				<td>Stephen King</td>
				<td>Albatros</td>
				<td>fantastyka</td>
                                <td>2018</td>
			</tr>

			
		</tbody>
	</table>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<hr>
 <h3 id="b" align="center"><i>2019</i></h3>
 <hr>
 <div class="container">
	<table>
		<thead>
			<tr>
				<th>Książka</th>
				<th>Tytuł</th>
				<th>Autor</th>
				<th>Wydawnictwo</th>
				<th>Gatunek</th>
                                <th>Rok wydania</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><a href="https://lubimyczytac.pl/ksiazka/4877852/instytut"><img src="https://s.lubimyczytac.pl/upload/books/4877000/4877852/755673-170x243.jpg" alt=""></a></td>
				<td>Instytut</td>
				<td>Stephen King</td>
				<td>Albatros</td>
				<td>horror</td>
                                <td>2019</td>
			</tr>
			<tr>
				<td><a href="https://lubimyczytac.pl/ksiazka/4877448/riverdale-dzien-wczesniej"><img src="https://s.lubimyczytac.pl/upload/books/4877000/4877448/717105-170x243.jpg" alt=""></a></td>
				<td>Riverdale. Dzień wcześniej</td>
				<td>Micol Ostow</td>
				<td>Feeria Young</td>
				<td>literatura młodzieżowa</td>
                                <td>2019</td>
			</tr>
			<tr>
				<td><a href="https://lubimyczytac.pl/ksiazka/4887833/noz"><img src="https://s.lubimyczytac.pl/upload/books/4887000/4887833/789039-170x243.jpg" alt=""></a></td>
				<td>Nóż</td>
				<td>Jo Nesbø</td>
				<td>Wydawnictwo Dolnośląskie</td>
				<td>kryminał</td>
                                <td>2019</td>
			</tr>
			<tr>
				<td><a href="https://lubimyczytac.pl/ksiazka/3937616/gra-o-tron"><img src="https://s.lubimyczytac.pl/upload/books/3937000/3937616/523293-170x243.jpg" alt=""></a></td>
				<td>Gra o tron</td>
				<td>George R.R. Martin</td>
				<td>Zysk i S-ka</td>
				<td>fantastyka</td>
                                <td>2016</td>
			</tr>
			<tr>
				<td><a href="https://lubimyczytac.pl/ksiazka/4879714/zlota-klatka"><img src="https://s.lubimyczytac.pl/upload/books/4879000/4879714/721461-170x243.jpg" alt=""></a></td>
				<td>Złota klatka</td>
				<td>Camilla Läckberg</td>
				<td>Czarna Owca</td>
				<td>kryminał</td>
                                <td>2019</td>
			</tr>

			
		</tbody>
	</table>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<hr>
 <h3 id="c" align="center"><i>2018</i></h3>
 <hr>
 <div class="container">
	<table>
		<thead>
			<tr>
				<th>Książka</th>
				<th>Tytuł</th>
				<th>Autor</th>
				<th>Wydawnictwo</th>
				<th>Gatunek</th>
                                <th>Rok wydania</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><a href="https://lubimyczytac.pl/ksiazka/4263926/czarownica"><img src="https://s.lubimyczytac.pl/upload/books/4263000/4263926/607449-170x243.jpg" alt=""></a></td>
				<td>Czarownica</td>
				<td>Camilla Läckberg</td>
				<td>Czarna Owca</td>
				<td>kryminał</td>
                                <td>2017</td>
			</tr>
			<tr>
				<td><a href="https://lubimyczytac.pl/ksiazka/269385/czerwony-pajak"><img src="https://s.lubimyczytac.pl/upload/books/269000/269385/663178-170x243.jpg" alt=""></a></td>
				<td>Czerwony Pająk</td>
				<td>Katarzyna Bonda</td>
				<td>Muza</td>
				<td>kryminał</td>
                                <td>2018</td>
			</tr>
			<tr>
				<td><a href="https://lubimyczytac.pl/ksiazka/4814392/kobieta-w-oknie"><img src="https://s.lubimyczytac.pl/upload/books/4814000/4814392/617018-170x243.jpg" alt=""></a></td>
				<td>Kobieta w oknie</td>
				<td>A.J. Finn</td>
				<td>W.A.B.</td>
				<td>kryminał</td>
                                <td>2018</td>
			</tr>
			<tr>
				<td><a href="https://lubimyczytac.pl/ksiazka/4913862/outsider"><img src="https://s.lubimyczytac.pl/upload/books/4913000/4913862/787272-170x243.jpg" alt=""></a></td>
				<td>Outsider</td>
				<td>Stephen King</td>
				<td>Prószyński i S-ka</td>
				<td>fantastyka</td>
                                <td>2020</td>
			</tr>
			<tr>
				<td><a href="https://lubimyczytac.pl/ksiazka/3870617/poczatek"><img src="https://s.lubimyczytac.pl/upload/books/3870000/3870617/586698-170x243.jpg" alt=""></a></td>
				<td>Początek</td>
				<td>Dan Brown</td>
				<td>Sonia Draga</td>
				<td>kryminał</td>
                                <td>2017</td>
			</tr>

			
		</tbody>
	</table>
</div>
<br/>
<br/>
<br/>
<br/>
<hr>
<script type="text/javascript">

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");

var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>