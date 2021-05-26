<?php
error_reporting(E_ALL ^ E_NOTICE);
include("config.php");
session_start();

$username = $login = $email = "";
$username_err = $login_err = $email_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["login"]))){
        $login_err = "Podaj login.";
    } else{$login = $_POST["login"];}
	 if(empty(trim($_POST["nazwa"]))){
        $username_err = "Podaj nazwę.";
    } else{$username = $_POST["nazwa"];}
	 if(empty(trim($_POST["email"]))){
        $email_err = "Podaj email.";
    } else{$email = $_POST["email"];}
		

        $a = "SELECT id_uzytkownika FROM uzytkownik WHERE login = '$login';";
        $b = "SELECT id_uzytkownika FROM uzytkownik WHERE nazwa = '$username';";
		$c = "SELECT id_uzytkownika FROM uzytkownik WHERE email = '$email';";
		
	if(mysqli_query($link, $a)){
		if(mysqli_query($link, $b)){
		 if(mysqli_query($link, $c)){
         
			 $res=mysqli_query($link, $a);
			 $_SESSION["id"] = $res;
			 header("Location: restore.php");
		    
          
         }else{
          echo "Wystąpił błąd, spróbuj później";
		  
		}
	  }
	}


mysqli_close($link);
}
?>