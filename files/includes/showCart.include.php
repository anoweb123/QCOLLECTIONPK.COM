<?php
    session_start();
    include_once "./config.php";
    
    class productByCategory{
        function showCart(){
            $link = new connect;
            $session_id = session_id();
            $stmt = $link->prepare("SELECT *,cart.id AS ID FROM `cart` INNER JOIN products ON products.id = cart.product_id INNER JOIN images ON cart.product_id = images.product_id WHERE cart.`session_id` = '$session_id'");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }
        function userDetails(){
            $link = new connect;
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $address = $_POST['address'];
            $suit = $_POST['suit'];
            $city = $_POST['city'];
            $postal = $_POST['postal'];
            $phone = $_POST['phone'];
            // Query
            $sql = "INSERT INTO `order`(`first_name`, `last_name`, `address`, `suit`, `city`, `postal`, `phone`) VALUES ('$fname', '$lname', '$address', '$suit', '$city', $postal, $phone)";
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $last_id = $link->lastInsertId();;
            $_SESSION['info_status'] = true;
            $_SESSION['phone'] = $phone;
            $_SESSION['address'] = $address;
            $_SESSION['user_id'] = $last_id;
            header("location: ./shipping.php");
            exit();
        }

        function updateAddress(){
            $link = new connect;
            $address = $_POST['address'];
            $id = $_POST['id'];
            $sql = "UPDATE `order` SET `address` = '$address' WHERE id = '$id'"; 
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $_SESSION['address'] = $address;
            echo " <script> location.replace('./shipping.php'); </script>";
        }

        function updatePhone(){
            $link = new connect;
            $phone = $_POST['phone'];
            $id = $_POST['id'];
            $sql = "UPDATE `order` SET `phone` = '$phone' WHERE id = '$id'"; 
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $_SESSION['phone'] = $phone;
            echo " <script> location.replace('./shipping.php'); </script>";
        }

        function hotProduct(){
            $link = new connect;
            $stmt = $link->prepare("SELECT * FROM `products` INNER JOIN images ON products.`id` = images.product_id INNER JOIN order_items ON products.id = order_items.product_id GROUP BY order_items.product_id ORDER BY COUNT(order_items.product_id) DESC LIMIT 4");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

    }
    
    $showType = new productByCategory;
    if(isset($_POST['submit'])){
        $showType->userDetails();
    } 
    if(isset($_POST['phonesubmit'])){
        $showType->updatePhone();
    } 
    if(isset($_POST['addresssubmit'])){
        $showType->updateAddress();
    } 
    