<?php
error_reporting(E_ALL ^ E_NOTICE);
include("config.php");
session_start();

$userid = $_SESSION["id"];
if(isset($_POST['add']))
{   
    $id = $_REQUEST['id'];
    $qty = 1;
    

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
$d="INSERT INTO koszyk (id_uzytkownika, id_ksiazka, ilosc) VALUES ('$userid', '$id', '$qty');"; 
         if(mysqli_query($link, $d))
         {
			 header("Location: produkty.php");
		     ++$totalitems;
			 $result=$link->query($s);
			 $totalprice+=$result;
			 $_SESSION["totalitems"] = $totalitems;
			 $_SESSION["totalprice"] = $totalprice;
          
         }else{
          echo "Wystąpił błąd, spróbuj później";
		  echo $user;
		}

mysqli_close($link);
}
?>