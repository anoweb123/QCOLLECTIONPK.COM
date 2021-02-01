<?php 
    include_once './includes/singleProduct.inc.php'; 
    $productId = $_GET['productId'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Online Shopping Store</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap CDN -->

    <!-- fa icons cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/js-image-zoom@0.4.1/js-image-zoom.js" type="application/javascript"></script>
    <!-- fa icons cdn -->

    <!-- External CSS -->

    <!-- For header -->
    <link rel="stylesheet" href="../css/header.css">
    <!-- For footer -->
    <link rel="stylesheet" href="../css/footer.css">
    <!-- For Slider -->
    <link rel="stylesheet" href="../css/singleproduct.css">
    <link rel="stylesheet" href="../css/category.css">
    <!-- External CSS -->

    <!-- External Js -->
    <script src="../js/header.js"></script>

    <!-- External Js -->




</head>

<body>
    <?php include '../files/header.php' ?>

    <div class="container-fluid my-3">
    <?php
    $products = $showProduct->selectedProduct($productId);
    foreach ($products as $row => $link) {
        ?>
        <div class="row">
            <div class="col-md-6">

                <!-- Slider -->

                <div class="row">
                    <div class="col-md-3 order-last order-md-first">

                        <!-- For small sliders -->
                        <div class="row">
                            <!-- image 1 -->
                            <div class="col-4 col-md-12">
                                <div class="" style="overflow: hidden; height: 80px">
                                <img class="demo cursor h-100 img-thumbnail"
                                    src="<?php echo $link['image1'] ?>"
                                    style="width:90%" onclick="currentSlide(1)" alt="The Woods">
                                </div><br>
                            </div>
                             <!-- image 2 -->
                            <div class="col-4 col-md-12">
                                <div class="" style="overflow: hidden; height: 80px">
                                <img class="demo cursor h-100 img-thumbnail"
                                    src="<?php echo $link['image2'] ?>"
                                    style="width:90%" onclick="currentSlide(2)" alt="The Woods">
                                </div><br>
                            </div>
                             <!-- image 3 -->
                            <div class="col-4 col-md-12">
                                <div class="" style="overflow: hidden; height: 80px">
                                <img class="demo cursor h-100 img-thumbnail"
                                    src="<?php echo $link['image3'] ?>"
                                    style="width:90%" onclick="currentSlide(3)" alt="The Woods">
                                </div><br>
                            </div>
                        </div>
                        <!-- For small sliders -->
                    </div>
                    <!-- for big image -->
                    <div class="col-md-9">
                         <!-- image 1 -->
                        <div class="mySlides img-thumbnail h-300">
                            <img  src="<?php echo $link['image1'] ?>" alt="" style="width:100%;" />
                        </div>
                         <!-- image 2 -->
                        <div  class="mySlides img-thumbnail h-300">
                            <img src="<?php echo $link['image2'] ?>" alt="" style="width:100%" />
                        </div>
                         <!-- image 3 -->
                        <div class="mySlides img-thumbnail h-300">
                            <img src="<?php echo $link['image3'] ?>" alt="" style="width:100%" />
                        </div>
                    </div>
                </div>


                <!-- Slider -->



            </div>
            <div class="col-md-6">
                <h4 class="text-uppercase name"><?php echo $link['name'] ?></h4>
                <hr>
                <p>Rs <span><?php $discountedValue=($link['price']*(100-$link['discount']))/100; echo (int)$discountedValue ?></span> <small class='ml-2'> RS <del><?php echo $link['price'] ?></del></small></p>
                <div>
                    <h6>Color</h6>
                        <div class="select-size">
                        <?php
                        $products = $showProduct->selectColors($productId);
                        foreach ($products as $row => $links) { ?>
                            <input type="radio" name="colors" value="<?php echo $links['color'] ?>" id="color<?php echo $links['id'] ?>" checked />
                            <label for="color<?php echo $links['id'] ?>" class="label" style="background-color:<?php echo $links['color'] ?>;"></label>
                        <?php } ?>
                        </div>
                    
                </div>
                <div id='loader' style='display: none;'>
                    <img src='https://i.pinimg.com/originals/a5/56/09/a55609061c5f24331405610fbf59203d.gif' width='70px' height='50px'>
                    <small>Please Wait while the product sizes are loading</small>
                </div>
                <div class="sizes">
                    <h6>Size</h6>
                    <div class="select-size">
                        <input class='ss' type="radio" value="s" name="s-size" id="small" required />
                        <input class='ms' type="radio" value="m" name="s-size" id="medium"  />
                        <input class='ls' type="radio" value="l" name="s-size" id="large" />
                        <input class='xls' type="radio" value="xl" name="s-size" id="x-large" />
                        <input class='xlls' type="radio" value="xll" name="s-size" id="xx-large" />

                        <label class='s' for="small">S</label>
                        <label class='m' for="medium">M</label>
                        <label class='l' for="large">L</label>
                        <label class='xl' for="x-large">XL</label>
                        <label class='xll' for="xx-large">XXL</label>

                    </div>
                    <small class="quantity"></small>
                </div>
                <div class="row form-inline">
                    <div class="col-6">
                        <div class="input-group w-100">
                            <input type="button" value="-" class="button-minus" data-field="quantity">
                            <input type="number" step="1" value="1" name="quantity"
                                class="quantity-field ">
                            <input type="button" value="+" class="button-plus" data-field="quantity">
                        </div>
                    </div>
                    <div class="col-6">
                        <!-- form -->
                        <form action="" class="form-submit">
                            <!-- For add to cart values -->
                            <input type="hidden" class="pid" value="<?php echo $link['id'] ?>">
                            <input type="hidden" class="quantity" id="quantity" value="1">
                            <input type="hidden" class="discount" value="<?php echo $link['discount'] ?>">
                            <input type="hidden" class="session_id" value="<?php echo $sessionId; ?>">
                            <input type="hidden" class="color" id="color" value="auto">
                            <input type="hidden" class="size" id="size" value="auto">

                            <?php if($link['discount'] != 0) { ?>
                                <input type="hidden" class="pprice" value="<?php $discountedValue=($link['price']*(100-$link['discount']))/100; echo (int)$discountedValue ?>">
                            <?php } else { ?>
                                <input type="hidden" class="pprice" value="<?php echo $link['price'] ?>">
                            <?php } ?>
                            <!-- For add to cart values -->
                            <button style="height: 50px;" class="w-100 text-uppercase btn bg-colors  addItemBtn"><i class="fa fa-cart-plus"></i> Add to cart</button>
                        </form>
                        <!-- form -->

                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="line-height: 2;word-spacing: 2px; font-weight: lighter;">
                        <?php echo $link['description'] ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <ol class="social_iconss p-0 pt-3">
                            <li class="">
                                <a href="">
                                    <i class="fa fa-twitter twitter fa-lg pr-3" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="">
                                <a href="">
                                    <i class="fa fa-facebook facebook fa-lg pr-3" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="">
                                <a href="">
                                    <i class="fa fa-envelope email pr-3" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>

            </div>
        </div>
    <?php } ?>

    <!-- You may also like Section -->
        <div class="row">
            <div class="col-12 text-center mt-3">
                <h4 style="font-weight: bolder">
                    You May Also Like
                </h4>
                <hr style="width: 100px; font-weight: bold">
            </div>
            <?php
            $products = $showProduct->similarProducts('stitched', $productId);
            foreach ($products as $row => $link) { ?>
                <div class="col-6 col-md-3 ">
                    <div>
                        <div class="card" style="min-height: 441px">
                            <!-- card image -->
                            <div  style="height: 250px; overflow: hidden;">
                                <img class="card-img-top img-thumbnail images" style="height: 100%" src="<?php echo $link['image1'] ?>" alt="Card image cap">
                            </div>
                            <!-- card body -->
                            <div class="card-body no-border">
                                <a href="?productId=<?php echo $link['id'] ?>" class="card-text">
                                    <!-- name -->
                                    <h5 class="text-black"><?php echo $link['name'] ?></h5>
                                    <!-- price -->
                                    <?php if($link['discount'] != 0) { ?>
                                    <p class="text-left text-black pb-2">Rs <span><?php $discountedValue=($link['price']*(100-$link['discount']))/100; echo (int)$discountedValue ?></span> <small class='ml-2'>  <del>RS <?php echo $link['price'] ?></del></small></p>
                                <?php } else { ?>
                                    <p class="text-left text-black pb-2">Rs <span><?php echo $link['price'] ?></span> </p>
                                <?php } ?>
                                    <!-- description -->
                                    <small class=""><?php echo $link['short_description'] ?></small>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

<hr class="my-5">
<div class="container-fluid mb-5">
  <div class="row">
    <div class="col-12 text-center">
      <a href="">
        <button onclick="goback()" class="btn btn-success">
          Continue Shopping
        </button>
      </a>
    </div>
  </div>
</div>

    <?php include '../files/footer.php' ?>
    <!-- External js -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../js/singleproduct.js"></script>
    <script src="../js/header.js"></script>
    <script src="../js/ajax.js"></script>
    <script src="../js/cart.ajax.js"></script>
    

</body>

</html>