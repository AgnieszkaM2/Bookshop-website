<?php 
error_reporting(E_ALL ^ E_NOTICE);

include("config.php");


session_start(); 


class Cart { 

    protected $cart_contents = array();

     public function insert($item = array()){
		 $message="";
		 define('DB_SERVER', 'localhost');
         define('DB_USERNAME', 'root');
         define('DB_PASSWORD', '');
         define('DB_NAME', 'strona');
		 $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
		
		 $sql="INSERT INTO koszyk (id_uzytkownika, id_ksiazka, ilosc) VALUES ('$item[userid]', '$item[id]', '$item[qty]');";
		 $s= "SELECT cena FROM ksiazka WHERE id_ksiazka = '$item[id]';";
		 if ($link->query($sql) === TRUE) {
			 header("Location: produkty.php");
            
        } else {
            echo "Wystąpił błąd";
			
        }
	 }
	 public function remove($row_id){ 
	    $message="";
		define('DB_SERVER', 'localhost');
         define('DB_USERNAME', 'root');
         define('DB_PASSWORD', '');
         define('DB_NAME', 'strona');
		$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        $d="DELETE FROM koszyk WHERE id_koszyk = '$row_id';";
		
		if ($link->query($d) === TRUE) {
			
			header("Location: koszyk.php");
        } else {
            echo "Wystąpił błąd";
        }
	 }
	 public function resetuj($uid){	
	    define('DB_SERVER', 'localhost');
         define('DB_USERNAME', 'root');
         define('DB_PASSWORD', '');
         define('DB_NAME', 'strona');
	    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        $d="TRUNCATE koszyk;";
		if ($link->query($d) === TRUE) {
			header("Location: koszyk.php");
        } else {
            echo "Wystąpił błąd";
        }
	 }
	 
    }
	 
	 
?>