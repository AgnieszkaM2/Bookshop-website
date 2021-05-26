<?php 
error_reporting(E_ALL ^ E_NOTICE);
include("cartclass1.php"); 
$cart = new Cart; 
  
include("config.php");

if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){ 
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){ 
        $productID = $_REQUEST['id']; 
        $userID = $_SESSION["id"];
        $query = $link->query("SELECT id_ksiazka FROM ksiazka WHERE id_ksiazka = '$productID';");
		
        $row = $query->fetch_assoc(); 
        $itemData = array(
            'id' => $row['id_ksiazka'],
            'qty' => 1, 
			'userid' => $userID
			
        );
	    $insertItem = $cart->insert($itemData); 
	}elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){ 
        $row_id = $_REQUEST['id'];
        $deleteItem = $cart->remove($row_id); 
        
    
	}elseif($_REQUEST['action'] == 'reset' && !empty($_REQUEST['uid'])){ 
        $uid = $_REQUEST['uid'];
        $resetCart = $cart->resetuj($uid); 
        
    }
	
}
?> 	