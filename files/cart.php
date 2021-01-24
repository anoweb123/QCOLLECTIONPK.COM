<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>


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
    <!-- For in page -->
    <link rel="stylesheet" href="../css/cart.css">
    <!-- External CSS -->

    <!-- External Js -->
    <script src="../js/header.js"></script>
    <!-- External Js -->



</head>
<body>
    <div>
        <?php include '../files/header.php' ?>
        
            <div class="container py-5">
                <div class="row">
                    <div style="letter-spacing: 2px" class="col-12 text-center Bodonifont pt-3">
                        <h1 class="font-weight-bold">CART</h1>
                        <a href="#"><small class="cool-link">Continue Shopping</small></a>
                    </div>
                </div>

                <!-- cart heading -->
                <div class="row  mt-3 ">
                    <div class="col-12 ">
                        <div class="row">
                        <div class="col-12 col-sm-7">
                        
                        </div>
    
                        <div class="col-4 col-sm-2  d-none d-sm-block">
                            Price 
                        </div>
    
                        <div class="col-4 col-sm-1 d-none d-sm-block">
                            Quantity
                        </div>
                        
                        <div class="col-4 col-sm-2 d-none d-sm-block">
                            Total
                        </div>
                        </div>
                    <hr>
                    </div>
                </div>

                <!-- cart details -->
                <div class="row mt-1">
                    <div class="col-12 col-sm-7">
                        <div class="row">
                            <img class="col-4" src="https://cdn.shopify.com/s/files/1/0059/6856/0210/products/1622A_1_180x.jpg?v=1603524081" alt="img1" width="170" height="220">
                            <span class="my-auto col-8">
                                <h6>LF - JN - 1622</h6>
                                <h6>3 Piece Unstitched / Peach</h6>
                                <div class="row">
                                    <span class="col-1">Color:</span>
                                    <p class=" col-1" ><p style="background-color: red" class="colors"></p></p>
                                    <span class="col-1 ml">Size:</span>
                                    <p class=" col-1" ><p class="size px-1">XL</p></p>
                                </div>
                                <div class="ml-5">
                                    <button class="btn btn-outline-secondary">Remove</button>
                                </div>
                            </span>
                        </div>
                    </div>

                    <div class="col-4 col-sm-2 my-auto">
                        <div class="">Rs. 1,469</div>
                    </div>

                    <div class="col-4 col-sm-1 my-auto">
                        <input type="number" class="form-control" name="" id="" value="1" min="1">
                    </div>
                    

                    <div class="col-4 col-sm-2 my-auto">
                        <div class="">Rs. 1,469</div>
                    </div>
                
                </div>

                <!-- cart details 2 -->
                <div class="row mt-1">
                    <div class="col-12 col-sm-7">
                        <div class="row">
                            <img class="col-4" src="https://cdn.shopify.com/s/files/1/0059/6856/0210/products/A10-SHAWLCOLORGREY_180x.jpg?v=1605264105" alt="img1" width="170" height="220">
                            <span class="my-auto col-8">
                                <h6>LF - JN - 1622</h6>
                                <h6>3 Piece Unstitched / Peach</h6>
                                <div class="row">
                                    <span class="col-1">Color:</span>
                                    <p class=" col-1" ><p style="background-color: #4E4C67" class="colors"></p></p>
                                    <span class="col-1 ml">Size:</span>
                                    <p class=" col-1" ><p class="size px-1">L</p></p>
                                </div>
                                <div class="ml-5">
                                    <button class="btn btn-outline-secondary">Remove</button>
                                </div>
                            </span>
                        </div>
                    </div>

                    <div class="col-4 col-sm-2 my-auto">
                        <div class="">Rs. 1,469</div>
                    </div>

                    <div class="col-4 col-sm-1 my-auto">
                        <input type="number" class="form-control" name="" id="" value="1" min="1">
                    </div>
                    

                    <div class="col-4 col-sm-2 my-auto">
                        <div class="">Rs. 1,469</div>
                    </div>
                
                </div>

                <!-- Black line -->
                <div class="blacksline pt-2"></div>

                <!-- subtotals -->
                <div class="row Bodonifont mt-2">
                    <div class="col-6 col-sm-8"></div>
                    <div class="col-6 col-sm-4">
                        <!-- Total of products -->
                        <div class="row">
                            <div class="col-6">Total</div>
                            <div class="col-6 text-right">Rs 2938</div>
                        </div>
                        <!-- delivery charges -->
                        <div class="row">
                            <div class="col-6">Delivery</div>
                            <div class="col-6 text-right">Rs 199</div>
                        </div>
                        <!-- Subtotal -->
                        <div class="row">
                            <div class="col-6">Subtotal</div>
                            <div class="col-6 text-right">Rs 3137</div>
                        </div>
                        <!-- next page -->
                        <div class="row">
                            <div class="col-6"></div>
                            <div class="col-6 text-right mt-4">
                                <a href=""><button class="btn btn-dark px-4 py-2">Check out</button></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        <?php include '../files/footer.php' ?>
    </div>
</body>
</html>