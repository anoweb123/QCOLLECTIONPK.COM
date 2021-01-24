<?php
    include_once './config.php';

    class landingPage{
        function newArrivals(){
            $link = new connect;
            $stmt = $link->prepare("SELECT * FROM `products` INNER JOIN `images` ON products.id = images.product_id ORDER BY products.id DESC LIMIT 4");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

        function newArrivals2($startingPoint){
            $startingPoint = $startingPoint;
            $link = new connect;
            $stmt = $link->prepare("SELECT * FROM `products` INNER JOIN `images` ON products.id = images.product_id WHERE products.id < $startingPoint ORDER BY products.id DESC LIMIT 4 ");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

    
    };
    
    $showProduct = new landingPage;
    
  