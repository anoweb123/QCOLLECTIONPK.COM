<?php
	session_start();
	require '../config.php';
	if (isset($_POST['pid'])) {
	  $pid = $_POST['pid'];
	  $quantity = $_POST['qty'];
	  $discount = $_POST['discount'];
	  $session_id = $_POST['session_id'];
	  $color = $_POST['color'];
	  $size = $_POST['size'];
	  $pprice = $_POST['pprice'];
	  $order_id = 1;
	  $stmt = $link->prepare('SELECT `product_id` FROM `cart` WHERE `product_id` = ?');
	  $stmt->bind_param('s',$pid);
	  $stmt->execute();
	  $res = $stmt->get_result();
	  $r = $res->fetch_assoc();
	  $code = $r['product_id'] ?? '';

	  if (!$code) {
	    $query = $link->prepare("INSERT INTO `cart`( `order_id`, `product_id`, `quantity`, `purchasing_price`, `discount`, `session_id`, `color`, `size`) VALUES (?,?,?,?,?,?,?,?)");
		$query->bind_param('ssssssss',$order_id,$pid,$quantity,$pprice, $discount,$session_id, $color, $size);
	    $query->execute();
		
		
	    echo '<div class="alert alert-success alert-dismissible mt-2">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Item added to your cart!</strong>
						</div>';
	  } else {
	    echo '<div class="alert alert-danger alert-dismissible mt-2">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Item already added to your cart!</strong>
						</div>';
	  }
	}

	// Get no.of items available in the cart table
	if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item') {
	  $stmt = $link->prepare('SELECT * FROM cart');
	  $stmt->execute();
	  $stmt->store_result();
	  $rows = $stmt->num_rows;
	  echo $rows;
	}

	// Remove single items from cart
	if (isset($_GET['remove'])) {
	  $id = $_GET['remove'];

	  $stmt = $link->prepare("DELETE FROM cart WHERE id=$id");
	  echo "DELETE FROM cart WHERE id=$id";
	  $stmt->execute();
	//   echo $id;
	//   $_SESSION['showAlert'] = 'block';
	//   $_SESSION['message'] = 'Item removed from the cart!';
	  header('location: ../cart.php');
	}

	// Remove all items at once from cart
	if (isset($_GET['clear'])) {
	  $stmt = $link->prepare('DELETE FROM cart');
	  $stmt->execute();
	//   $_SESSION['showAlert'] = 'block';
	//   $_SESSION['message'] = 'All Item removed from the cart!';
	  header('location: index.php');
	}



    if(isset($_POST['coupon'])){
		$link = new connect;
		$code = $_POST['coupon'];
		$stmt = $link->prepare("SELECT * FROM coupon WHERE code = '$code'");
            $stmt->execute();
            $result = $stmt->fetchAll();
			$r = json_encode($result);
			print_r($r);
	}


    if(isset($_POST['couponPercent'])){
		$link = new connect;
		$code = $_POST['couponPercent'];
		$id = $_SESSION['user_id'];
		$stmt = $link->prepare("UPDATE `order` SET `coupon`='$code' WHERE `id` = '$id'");
		$stmt->execute();
		echo "success";
            
	}
	// For submission order
    if(isset($_POST['status'])){
		$link = new connect;
		$status = $_POST['status'];
		$p_method = $_POST['payment_method'];
		$session_id = $_POST['session_id'];
		$price = $_POST['price'];
		$id = $_SESSION['user_id'];
		$stmt = $link->prepare("UPDATE `order` SET `status`='$status',`payment_method` = '$p_method', `total_bill` = '$price' WHERE `id` = '$id'");
		$stmt->execute();
		
		$stmt = $link->prepare("UPDATE `cart` SET `order_id`= '$id' WHERE `session_id` = '$session_id'");
		$stmt->execute();
		
		

		$stmt1 = $link->prepare("INSERT INTO order_items  SELECT * FROM cart WHERE `session_id` = '$session_id'");
        $stmt3 = $link->prepare('DELETE FROM cart');
        $link->beginTransaction();
        if ($stmt1->execute() && $stmt3->execute()) {
            $link->commit();

        } else {
            $link->rollBack();
        }

		session_destroy();
            
	}

	// Set total price of the product in the cart table
	if (isset($_POST['qtys'])) {
		$qty = $_POST['qtys'];
		$pid = $_POST['pids'];
		$pprice = $_POST['pprice'];
  
		$tprice = $qty * $pprice;
  
		$stmt = $link->prepare('UPDATE cart SET quantity=?, purchasing_price=? WHERE product_id=?');
		$stmt->bind_param('sss',$qty,$tprice,$pid);
		$stmt->execute();
	  }