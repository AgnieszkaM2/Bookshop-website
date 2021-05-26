<?php 

require_once 'cartclass.php'; 
$cart = new Cart; 
  
require_once 'config.php'; 
 
 
// Process request based on the specified action 
if(isset($_REQUEST['action']) && !empty($_REQUEST['action']) && !empty($_REQUEST['action'])){ 
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id']) && !empty($_REQUEST['uid'])){ 
        $productID = $_REQUEST['id']; 
        $userID = $_REQUEST['uid'];
        // Get product details 
        $query = $link->query("SELECT * FROM ksiazka WHERE id_ksiazka = ".$productID);
		
        $row = $query->fetch_assoc(); 
        $itemData = array( 
            'id' => $row['id'],
			'cover' => $row['okl'], 
            'name' => $row['tytul'], 
            'autor' => $row['autor'], 
			'price' => $row['cena'],
            'qty' => 1 
			
        ); 
         
        // Insert item to cart 
        $insertItem = $cart->insert($itemData); 
        $insertItem = $cart->insert($userID); 
        
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){ 
        // Update item data in cart 
        $itemData = array( 
            'rowid' => $_REQUEST['id'], 
            'qty' => $_REQUEST['qty'] 
        ); 
        $updateItem = $cart->update($itemData); 
         
        // Return status 
        echo $updateItem?'ok':'err';die; 
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){ 
        // Remove item from cart 
        $deleteItem = $cart->remove($_REQUEST['id']); 
         
        header("Location: koszyk.php"); 
    } 
     $_SESSION['sessData'] = $sessData; 
    } 
} 