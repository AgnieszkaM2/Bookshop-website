<?php

include("config.php");
session_start();

$username = $password = "";
$username_err = $password_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 

    if(empty(trim($_POST["login"]))){
        $username_err = "Podaj login.";
    } else{

        $sql = "SELECT id_uzytkownika FROM uzytkownik WHERE login = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_username);
            

            $param_username = trim($_POST["login"]);
            

            if(mysqli_stmt_execute($stmt)){

                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Nazwa użytkownika zajęta.";
                } else{
                    $username = trim($_POST["login"]);
                }
            } else{
                echo "Wystąpił błąd, spróbuj ponownie później.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    

    if(empty(trim($_POST["pass"]))){
        $password_err = "Podaj hasło.";     
    }else{
        $password = trim($_POST["pass"]);
    }
    
    

    if(empty($username_err) && empty($password_err)){
        

        $sql = "INSERT INTO uzytkownik (login, haslo) VALUES (?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            

            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            

            if(mysqli_stmt_execute($stmt)){
                

				$_SESSION["login"] = $username;
                header("Location: info.php");
            } else{
                echo "Wystąpił błąd, spróbuj ponownie później.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    
}
?>