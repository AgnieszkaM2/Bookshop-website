<?php
 
session_start();

    

if(isset($_SESSION["id"])){
    header("location: profil.php");
}

?>
<!DOCTYPE html>
<head>
 <script src="http://code.jquery.com/jquery-latest.min.js"></script>
 <link rel="Stylesheet" type="text/css" href="style.css"/>
 <style>
 .menu {top: 20px;
        left: 20px;}
input[type=submit], button {
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
 </style>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
 <title>Logowanie</title>
</head>
<body>
 <div class="menu">
  <div class="label">Menu</div>
  <div class="spacer"></div>
  <div class="item"><span><a href="BookStore.php">Strona główna</a></span></div>
  <div class="item"><span><a href="Bestsellery.php">Bestsellery</a></span></div>
  <div class="item"><span><a href="Książki.php">Książki</a></span></div>
  <div class="item"><span><a href="Losuj.php">Losuj książkę</a></span></div>
 </div>
 <br/>
 <br/>
 <br/>
 <h2 align="center">Logowanie użytkownika</h2>
 <br/>
 <p>
<form action="login.php" method="post">
 <div align="center" id="panel">
 <label for="login">Login:</label>
 <input type="text" id="login" name="login" required>
 <label for="pass">Hasło:</label>
 <input type="password" id="pass" name="pass" required>
 <br/>
 <div>
 <br/>
 <br/>

 <input type="submit" value="Zaloguj się">
 <p><button onclick="document.getElementById('id02').style.display='block'">Zapomniałeś hasła?</button></p>
 </div>
 </div>
</form>
 <br/> 
 <br/>
 <hr>
 <div align="center">
 <br/>
 Nie masz konta?  &emsp;<button onclick="document.getElementById('id01').style.display='block'">Zarejestruj się</button>
 <br/>
 <br/>
 <hr>
 <button type="button" onclick="window.location.href = 'BookStore.html';">Powrót</button>
 </div>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"></span>
  <form class="modal-content" action="register.php" method="post">
   <div class="cont">
    <h1>Zarejestruj się</h1>
    <p>Wypełnij formularz, aby utworzyć konto.</p>
    <hr>

    <label for="login"><b>Login</b></label>
    <input type="text" name="login" required>

    <label for="pass"><b>Hasło</b></label>
    <input type="password" name="pass" required>



      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Anuluj</button>
        <button type="submit" class="signup">Zarejestruj się</button>
      </div>
    </div>
  </form>
</div>
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal"></span>
  <form class="modal-content" action="check.php" method="post">
   <div class="cont">
    <h1>Podaj dane</h1>
    <p>Wypełnij formularz, aby przejść do odzyskiwania hasła.</p>
    <hr>

    <label for="login"><b>Login</b></label>
    <input type="text" name="login" required>
	
	<label for="nazwa"><b>Nazwa użytkownika</b></label>
    <input type="text" name="nazwa" required>
	
	<label for="email"><b>Email</b></label>
    <input type="email" name="email" required>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Anuluj</button>
        <button type="submit" class="signup">Dalej</button>
      </div>
    </div>
  </form>
</div>
<script>

var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>

var modal = document.getElementById('id02');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>