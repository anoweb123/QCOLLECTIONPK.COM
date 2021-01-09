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
    <!-- fa icons cdn -->

    <!-- External CSS -->

    <!-- For header -->
    <link rel="stylesheet" href="../css/header.css">
    <!-- For footer -->
    <link rel="stylesheet" href="../css/footer.css">
    <!-- For Slider -->
    <link rel="stylesheet" href="../css/singleproduct.css">
    <!-- External CSS -->

    <!-- External Js -->
    <script src="../js/header.js"></script>

    <!-- External Js -->



</head>

<body>
    <?php include '../files/header.php' ?>

    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-6">

                <!-- Slider -->

                <div class="row">
                    <div class="col-3">

                        <!-- For small sliders -->
                        <div class="">
                            <img class="demo cursor h-100"
                                src="https://cdn.shopify.com/s/files/1/0671/0621/products/Black_9dbb4b16-11fc-42f4-86d7-58975956eaf5_2000x.jpg?v=1609860541"
                                style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                        </div><br>
                        <div class="">
                            <img class="demo cursor h-100"
                                src="https://cdn.shopify.com/s/files/1/0671/0621/products/Maroon_9339f5c9-723b-4926-bbfe-09f82d86204b_2000x.jpg?v=1609860560"
                                style="width:100%;" onclick="currentSlide(2)" alt="Cinque Terre">
                        </div><br>
                        <div class="">
                            <img class="demo cursor h-100"
                                src="https://cdn.shopify.com/s/files/1/0671/0621/products/1_ef46eda1-1ae8-481c-86d2-e6bd80c66c40_2000x.jpg?v=1609860487"
                                style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                        </div><br>

                        <!-- For small sliders -->


                    </div>
                    <div class="col-9">

                        <div class="mySlides">
                            <img src="https://cdn.shopify.com/s/files/1/0671/0621/products/Black_9dbb4b16-11fc-42f4-86d7-58975956eaf5_2000x.jpg?v=1609860541"
                                style="width:100%; height:400px">
                        </div>

                        <div class="mySlides">
                            <img src="https://cdn.shopify.com/s/files/1/0671/0621/products/Maroon_9339f5c9-723b-4926-bbfe-09f82d86204b_2000x.jpg?v=1609860560"
                                style="width:100%; height:400px">
                        </div>

                        <div class="mySlides">
                            <img src="https://cdn.shopify.com/s/files/1/0671/0621/products/1_ef46eda1-1ae8-481c-86d2-e6bd80c66c40_2000x.jpg?v=1609860487"
                                style="width:100%; height:400px">
                        </div>


                    </div>
                </div>


                <!-- Slider -->



            </div>
            <div class="col-md-6">
                <h4 class="text-uppercase name">MEN'S Lancaster CLASSIC FLEECE JOGGER PANTS</h4>
                <hr>
                <p>Rs <span>899.00</span></p>
                <div>
                    <h6>Color</h6>
                    <div class="select-size">
                        <input type="radio" name="colors" id="color1" checked />
                        <input type="radio" name="colors" id="color2" />
                        <input type="radio" name="colors" id="color3" />
                        <input type="radio" name="colors" id="color4" />

                        <label for="color1" class="label" style="background-color:red;"></label>
                        <label for="color2" class="label" style="background-color:black;"></label>
                        <label for="color3" class="label" style="background-color:white;"></label>
                        <label for="color4" class="label" style="background-color:green;"></label>

                    </div>
                </div>
                <div>
                    <h6>Size</h6>
                    <div class="select-size">
                        <input type="radio" name="s-size" id="small" checked />
                        <input type="radio" name="s-size" id="medium" />
                        <input type="radio" name="s-size" id="large" />
                        <input type="radio" name="s-size" id="x-large" />
                        <input type="radio" name="s-size" id="xx-large" />

                        <label for="small">S</label>
                        <label for="medium">M</label>
                        <label for="large">L</label>
                        <label for="x-large">XL</label>
                        <label for="xx-large">XXL</label>

                    </div>
                </div>
                <div class="row form-inline">
                    <div class="col-6">
                        <div class="input-group ">
                            <input type="button" value="-" class="button-minus" data-field="quantity">
                            <input type="number" style="width: 60% !important" step="1" value="1" name="quantity"
                                class="quantity-field ">
                            <input type="button" value="+" class="button-plus" data-field="quantity">
                        </div>
                    </div>
                    <div class="col-6">
                        <button style="height: 50px;" class="w-100 text-uppercase btn bg-colors"><i
                                class="fa fa-cart-plus"></i> Add to cart</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="line-height: 2;word-spacing: 2px; font-weight: lighter;">
                        <p>Please look at the size guide before completing your order as sizes vary from brand to brand.
                        </p>
                        <ul>
                            <li>Soft brushed fleece fabric</li>
                            <li>Two Side pockets</li>
                            <li>One Back Pocket</li>
                            <li>Elasticated waistband with drawcord</li>
                            <li>Ribbed Bottom</li>
                        </ul>
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
        <div class="row">
            <div class="col-12 text-center mt-3">
                <h4 style="font-weight: bolder">
                    You May Also Like
                </h4>
                <hr style="width: 100px; font-weight: bold">
            </div>

            <div class="col-6 col-md-3">
                <div class="card">
                    <img class="card-img-top" src="../assets/staticassets/nav_logo.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href="" class="card-text hide_flow">Some quick example text to build on the card title and
                            make up a bulk</a>
                        <p class="text-center pt-4">RS 999 <del>RS 1100</del></p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card">
                    <img class="card-img-top" src="../assets/staticassets/nav_logo.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href="" class="card-text hide_flow">Some quick example text to build on the card title and
                            make up a bulk</a>
                        <p class="text-center pt-4">RS 999 <del>RS 1100</del></p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card">
                    <img class="card-img-top" src="../assets/staticassets/nav_logo.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href="" class="card-text hide_flow">Some quick example text to build on the card title and
                            make up a bulk</a>
                        <p class="text-center pt-4">RS 999 <del>RS 1100</del></p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card">
                    <img class="card-img-top" src="../assets/staticassets/nav_logo.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href="" class="card-text hide_flow">Some quick example text to build on the card title and
                            make up a bulk</a>
                        <p class="text-center pt-4">RS 999 <del>RS 1100</del></p>
                    </div>
                </div>
            </div>
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
    <script src="../js/singleproduct.js"></script>
    <script src="../js/header.js"></script>

</body>

</html>