<?php
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
    };
    
    $showProduct = new singleProduct;
    
    $colorSize = $_POST['functionColor'];
    if($colorSize == 'success'){
        $colorCode = $_POST['colorCode'];
        echo $showProduct->selectColorsSize($colorCode);
    }