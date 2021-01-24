<?php
    include_once './config.php';

    class singleProduct{
        function selectedProduct($productId){
            
            $link = new connect;
            $product = $productId;
            $stmt = $link->prepare("SELECT * FROM `products` INNER JOIN `images` ON products.id = images.product_id WHERE products.`id` = '$product'");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

        function selectColors($productId){
            $link = new connect;
            $product = $productId;
            $stmt = $link->prepare("SELECT DISTINCT * FROM `color_size` WHERE `product_id` = '$product'");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

        function similarProducts($category,$currentProduct){
            $productId = $currentProduct;
            $link = new connect;
            $product = $category;
            $stmt = $link->prepare("SELECT * FROM `products` INNER JOIN `images` ON products.id = images.product_id WHERE `category` = '$product' AND products.`id`!=$productId ORDER BY products.id DESC LIMIT 4 ");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

    
    };
    
    $showProduct = new singleProduct;
    
  