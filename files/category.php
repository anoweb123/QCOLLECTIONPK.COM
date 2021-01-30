<?php 
    include_once './includes/productByCategory.inc.php'; 
    $category = $_GET['categoryName'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>

     <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap CDN -->

    <!-- fa icons cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- fa icons cdn -->

    <!-- External CSS -->

    <!-- For header -->
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/category.css">
    
    <!-- for animation -->
    <link rel="stylesheet" href="../css/animation.css">
    <!-- for animation -->
    <!-- External CSS -->

    <!-- External Js -->
    <script src="../js/header.js"></script>
    <!-- External Js -->

<style>
.list small{
    color:red
}
</style>

</head>
<body>
    <div>
        <!-- on screen loading animation -->
        <!-- <div id="load"></div> -->
        <!-- on screen loading animation -->
        <?php include './header.php' ?>

        <div class="container list">
            <div class="row">
                <div class="col-12 py-3">
                    <h3 class='text-capitalize'><?php echo $category; ?></h3>
                    <hr class="bb-category">
                </div>
                <?php
                if (isset($_GET["page"])) {
                    $page  = $_GET["page"]; 
                } 
                else{ 
                    $page = 1;
                };
                
                $test = $showType->selectedCategory($category, $page);
                foreach ($test as $row => $link) { ?>
                <div class="col-sm-4 py-5">
                    <!-- Card-->
                    <div class="card rounded shadow-sm border-0">
                        <p class="card-body p-0 m-0">
                        <a href='singlepage.php?productId=<?php echo $link['id'] ?>'>
                            <div class="item p-0 m-0">
                                <?php if($link['discount'] != 0) { ?>
                                <span class="notify-badge"><?php echo $link['discount'] ?> %</span>
                                <?php } ?>
                                <img class='images img-rounded w-100' src="<?php echo $link['image1'] ?>" alt="<?php echo $link['name'] ?>" class="img-fluid d-block mx-auto mb-3">
                            </div>
                            <div class="p-2">
                                <!-- Name and Description -->
                                <h5> <a href="#" class="text-dark"><?php echo $link['name'] ?></a></h5>
                                <p class="small text-muted font-italic"><?php echo $link['short_description'] ?></p>
                                <!-- for price -->
                                <?php if($link['discount'] != 0) { ?>
                                    <p class="text-right§">Rs <span><?php $discountedValue=($link['price']*(100-$link['discount']))/100; echo (int)$discountedValue ?></span> <small class='ml-2'> RS <del><?php echo $link['price'] ?></del></small></p>
                                <?php } else { ?>
                                    <p class="text-right">Rs <span><?php echo $link['price'] ?></span> </p>
                                <?php } ?>
                                    <!-- for ratings -->
                                    <ul class="list-inline small">
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                                    </ul>
                                </a>
                            </div>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>

            
            <div class="text-center p-2 bottom-color-border">
                <ul class="pagination modal-5">
                    <li>
                        <a href="" class="prev fa fa-arrow-left"> </a>
                    </li>
                    
                    <?php 
                        if (isset($_GET["page"])) {
                            $page  = $_GET["page"]; 
                        } 
                        else{ 
                            $page = 1;
                        };  
                        echo $showType->pagination($category, $page);  
                    ?>
                    
                    <li>
                        <a href="#" class="next fa fa-arrow-right"></a>
                    </li>   
                </ul>
            </div>

        </div>


       
        <?php include './footer.php' ?>
    </div>


<!-- External js -->
    <script src="../js/singleproduct.js"></script>
    <script src="../js/header.js"></script>
    <script src="../js/cart.ajax.js"></script>
    <script>
            // to animate when page load CSS is in header.css
    document.onreadystatechange = function() {
        var state = document.readyState
        if (state == 'complete') {
            setTimeout(function() {
                document.getElementById('interactive');
                document.getElementById('load').style.visibility = "hidden";
            }, 1000);
        }
    }
        </script>
</body>
</html>