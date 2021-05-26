<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
include("config.php");
 $id = $_SESSION["id"];
 if($_SERVER["REQUEST_METHOD"] == "POST"){
 $password = trim($_POST["pass"]);
 
    $s="UPDATE uzytkownik SET haslo = NULL WHERE id_uzytkownika = '$id';";
	if(mysqli_query($link, $s)){
       $sql = "UPDATE uzytkownik SET haslo = (?) WHERE id_uzytkownika = '$id';";
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "ss", $param_password);
            
            
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            
            
            if(mysqli_stmt_execute($stmt)){
                session_destroy();
                header("Location: Logowanie.php");
            } else{
                echo "Wystąpił błąd, spróbuj ponownie później.";
            }

            mysqli_stmt_close($stmt);
        }
    }else{echo "Wystąpił błąd, spróbuj ponownie później.";}
	
    mysqli_close($link);
  }

?>