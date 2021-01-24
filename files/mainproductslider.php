
<?php 
    include_once './includes/index.inc.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> -->
<!-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>  -->
<link rel="stylesheet" href="../css/category.css">
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mb-5">
    <div class="row">
            <div class="col-md-9">
            </div>
            <div class="col-md-3 py-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-success c-color" href="#carousel-example"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success  c-color" href="#carousel-example"
                            data-slide="next"></a>
                </div>
            </div>
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                    <?php
                        $products = $showProduct->newArrivals();
                        foreach ($products as $row => $link) { 
                            $lastItem = $link['id'];
                            ?>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo" style="height: 200px; overflow: hidden;">
                                    <img src="<?php echo $link['image1'] ?>" class="images img-responsive" alt="a" />
                                </div>
                                <div class="info" >
                                        <div class="price  my-3" style="min-height: 150px;">
                                            <h5><?php echo $link['name'] ?></h5>
                                            
                                            <h5 class="price-text-color">
                                            <?php if($link['discount'] != 0) { ?>
                                                    <small class="text-left text-black pb-2">Rs <span><?php $discountedValue=($link['price']*(100-$link['discount']))/100; echo (int)$discountedValue ?></span> <small class='ml-2'>  <del>RS <?php echo $link['price'] ?></del></small></small>
                                                <?php } else { ?>
                                                    <small class="text-left text-black pb-4">Rs <span><?php echo $link['price'] ?></span> </small>
                                                <?php } ?>
                                            </h5>
                                            <p class="mt-2 description"><?php echo $link['short_description'] ?></p>
                                        </div>
                                        
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="singlepage.php?productId=<?php echo $link['id'] ?>" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="">
                <div class="carousel-item">
                    <div class="row">
                    <?php
                        $products = $showProduct->newArrivals2($lastItem);
                        foreach ($products as $row => $link) { ?>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo" style="height: 200px; overflow: hidden;">
                                    <img src="<?php echo $link['image1'] ?>" class="images img-responsive" alt="a" />
                                </div>
                                <div class="info" >
                                        <div class="price  my-3" style="min-height: 150px;">
                                            <h5><?php echo $link['name'] ?></h5>
                                           
                                            <h5 class="price-text-color">
                                            <?php if($link['discount'] != 0) { ?>
                                                    <small class="text-left text-black pb-2">Rs <span><?php $discountedValue=($link['price']*(100-$link['discount']))/100; echo (int)$discountedValue ?></span> <small class='ml-2'>  <del>RS <?php echo $link['price'] ?></del></small></small>
                                                <?php } else { ?>
                                                    <small class="text-left text-black pb-4">Rs <span><?php echo $link['price'] ?></span> </small>
                                                <?php } ?>
                                            </h5>
                                            <p class="mt-2  description"><?php echo $link['short_description'] ?></p>
                                        </div>
                                        
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="singlepage.php?productId=<?php echo $link['id'] ?>" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>