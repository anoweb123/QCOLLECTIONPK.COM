<?php
    require_once './config.php';

    class productByCategory{
        function selectedCategory($categoryName, $pages){
            
            $category = $categoryName;
            $link = new connect;
            $limit = 9;
            $page = $pages;
            $start_from = ($page-1) * $limit; 
            $stmt = $link->prepare("SELECT * FROM `products` INNER JOIN `images` ON products.id = images.product_id WHERE `category` = '$category' ORDER BY products.id ASC LIMIT $start_from, $limit");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }
        
        function pagination($categoryName, $pages){
            $category = $categoryName;
            $limit = 9; 
            $page = $pages;
            $start_from = ($page-1) * $limit; 
            $link = new connect;
            $stmt = $link->prepare("SELECT COUNT(id) AS number FROM products WHERE `category` = '$category' ");
            $stmt->execute();
            $row_db = $stmt->fetchColumn();
            $total_records = $row_db;
            $total_pages = ceil($total_records / $limit);
            for ($i=1; $i<=$total_pages; $i++) {
                echo $pagLink = "<li><a class='' href='?categoryName=$category&page=".$i."'>".$i."</a></li>";	
            }
        }

        function latestProducts($categoryName, $pages){
            
            $category = $categoryName;
            $link = new connect;
            $limit = 9;
            $page = $pages;
            $start_from = ($page-1) * $limit; 
            $stmt = $link->prepare("SELECT * FROM `products` INNER JOIN `images` ON products.id = images.product_id ORDER BY products.id DESC LIMIT $start_from, $limit");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

        function paginationAll($categoryName, $pages){
            $category = $categoryName;
            $limit = 9; 
            $page = $pages;
            $start_from = ($page-1) * $limit; 
            $link = new connect;
            $stmt = $link->prepare("SELECT COUNT(id) AS number FROM products");
            $stmt->execute();
            $row_db = $stmt->fetchColumn();
            $total_records = $row_db;
            $total_pages = ceil($total_records / $limit);
            for ($i=1; $i<=$total_pages; $i++) {
                echo $pagLink = "<li><a class='' href='?categoryName=$category&page=".$i."'>".$i."</a></li>";	
            }
        }

    };

    $showType = new productByCategory;

?>