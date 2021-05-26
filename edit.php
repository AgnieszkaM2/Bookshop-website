<?php
error_reporting(E_ALL ^ E_NOTICE);
include("config.php");
session_start();

$user = $_SESSION["login"];
if(isset($_POST['zapisz']))
{   
    $nazwa = $_REQUEST['username'];
    $opis = $_REQUEST['opis'];
    $email = $_REQUEST['email'];
    $avg = $_REQUEST['avg'];

$profileImageName = time() . '-' . $_FILES["file"]["name"];
$target_dir = "uploads/image/";
$target_file = $target_dir . basename($profileImageName);					 
if (empty($error)) {
      if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        $sql = "UPDATE uzytkownik SET plik='$profileImageName' WHERE login = '$user';";
        if(mysqli_query($link, $sql)){
          
	  }else{ echo "Błąd";}
	  
   } 
}
$d="UPDATE uzytkownik SET nazwa = '$nazwa',opis = '$opis', email = '$email', il = '$avg' WHERE login = '$user';";
         if(mysqli_query($link, $d))
         {
			 header("Location: Logowanie.php");
		     session_destroy();
          
         }else{
          echo "Wystąpił błąd, spróbuj później";
		  echo $user;
		}

mysqli_close($link);
}
?>