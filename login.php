<?php
include("config.php");
$username = $password = "";
$username_err = $password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["login"]))){
        $username_err = "Podaj login.";
    } else{
        $username = trim($_POST["login"]);
    }

    if(empty(trim($_POST["pass"]))){
        $password_err = "Podaj hasło.";
    } else{
        $password = trim($_POST["pass"]);
    }
    
    if(empty($username_err) && empty($password_err)){

        $sql = "SELECT id_uzytkownika, login, haslo FROM uzytkownik WHERE login = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_username);

            $param_username = $username;
            
            if(mysqli_stmt_execute($stmt)){
				
                mysqli_stmt_store_result($stmt);
                

                if(mysqli_stmt_num_rows($stmt) == 1){                    
				
                    mysqli_stmt_bind_result($stmt, $id, $username, $param_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $param_password)){

                            session_start();

                            $sql = "SELECT id_uzytkownika, nazwa, opis, email, il, plik, lista FROM uzytkownik WHERE login = '$username';";
                            $result = mysqli_query($link,$sql);
                            $row  = mysqli_fetch_array($result);
                            if(is_array($row)) {
                             $_SESSION["id"] = $row['id_uzytkownika'];
                             $_SESSION["nazwa"] = $row['nazwa'];
		                     $_SESSION["opis"] = $row['opis'];
                             $_SESSION["email"] = $row['email'];
		                     $_SESSION["il"] = $row['il'];
		                     $_SESSION["plik"] = $row['plik'];
		                     $_SESSION["lista"] = $row['lista'];
							}
                            header("location: profil.php");
                        } else{

                            echo $password_err = "Nieprawidłowe hasło.";
                        }
                    }
                } else{
                    echo $username_err = "Nie ma takiego użytkownika.";
                }
            } else{
                echo "Błąd, spróbuj później.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    
    mysqli_close($link);
}
?>
