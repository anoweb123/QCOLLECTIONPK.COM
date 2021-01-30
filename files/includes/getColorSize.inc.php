<?php
    session_start();
    require_once '../config.php';
    class singleProduct{
        

        function selectColorsSize($colorCode)
        {
            $link = new connect;
            $code = $colorCode;
            $stmt = $link->prepare("SELECT * FROM size INNER JOIN color_size ON size.id = color_size.size_id WHERE color_size.color = '$code'");
            $stmt->execute();
            $result = $stmt->fetchAll();
            // return $result;
            return json_encode($result);
       
        }


        function getDeliveryCharges(){
            $link = new connect;
            $sql = "SELECT * FROM `delivery_charges` ORDER BY id ASC"; 
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return json_encode($result);
        }

        function getCouponPrice(){
            $link = new connect;
            $id = $_SESSION['user_id'];
            $sql = "SELECT * FROM `order` WHERE `id` = '$id'"; 
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return json_encode($result);
        }

    };
    
    $showProduct = new singleProduct;
    
    if(isset($_POST['functionColor'])){
        $colorSize = $_POST['functionColor'];
        if ($colorSize == 'success') {
            $colorCode = $_POST['colorCode'];
            echo $showProduct->selectColorsSize($colorCode);
        }
    }
    
    if(isset($_POST['getCoupon'])){
        echo $showProduct->getCouponPrice();
    } 
    
    if(isset($_POST['getDelivery'])){
        echo $showProduct->getDeliveryCharges();
    } 