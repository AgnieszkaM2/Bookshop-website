<?php
error_reporting(E_ALL ^ E_NOTICE);
include("config.php");
session_start();
?>
<!DOCTYPE html>
<head>
 <script src="http://code.jquery.com/jquery-latest.min.js"></script>
 <link rel="Stylesheet" type="text/css" href="style.css"/>
 <style>
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
  input[type=email] {
  width: 15%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #D4F6FA;
  }
  input[type=email]:focus {
  opacity: 0.8;
  outline: none;
  }
textarea {
  box-shadow: rgba(180, 232, 255, 0.3);
  border: 1px solid rgba(45, 204, 231, 0.4);
  box-sizing: content-box;
  background-color: #D4F6FA;
  font-family:"Times New Roman", Times, serif;
  font-size: 16px;
  }
  textarea:focus {
  opacity: 0.8;
  outline: none;
  }
 </style>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
 <title>Odzyskiwanie</title>
</head>
<body>
 <br/>
 <br/>
 <h2 align="center">Podaj nowe hasło</h2>
 <br/>
 <hr>
 <br/>
 <p>
<form action="reset.php" method="post">
 <div align="center" id="formularz">
 <label for="username">Nowe hasło:</label><br/><br/>
 <input type="password" id="pass" name="pass" required>
 <br/> 
 <br/>
  <hr>
  <br/>
  <button type='submit' name='zapisz'>Zapisz</button>
 </div>
</form>
 
</body>
</html>