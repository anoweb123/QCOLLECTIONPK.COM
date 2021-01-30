<?php 
    include_once './includes/showCart.include.php';
?>
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
                <?php 
                    $products = $showType->showCart();
                    $purchasing = 0;
                    foreach ($products as $row => $link) { 
                ?>
                <div class="row my-2">
                    <div class="col-12 col-sm-7">
                        <div class="row">
                            <img class="col-4" src="<?php echo $link["image1"] ?>" alt="img1" width="170" height="220">
                            <span class="my-auto col-8">
                                <h6><?php echo $link['name'] ?></h6>
                                <h6><?php echo $link['sub_category'] ?></h6>
                                <div class="row">
                                    <span class="col-1">Color:</span>
                                    <p class=" col-1" ><p style="background-color: 
                                    <?php 
                                        if($link['color'] == "auto"){
                                            echo "white";
                                        }else{
                                            echo $link['color'];
                                        }
                                        
                                    ?>" class="colors"></p>
                                    <span class="col-1 ml">Size:</span>
                                    <p class=" col-1" ><p class="size px-1"><?php
                                        if($link['size'] == "auto"){
                                            echo "-";
                                        }else{
                                            echo $link['size'];
                                        }
                                    ?>
                                    </p>
                                </div>
                                <div class="ml-5">
                                    <a onclick="return confirm('Are you sure want to remove this item?');" href="./includes/cart.include.php?remove=<?php echo $link['ID'] ?>">
                                        <button class="btn btn-outline-secondary">Remove</button>
                                    </a>
                                </div>
                            </span>
                        </div>
                    </div>
                    

                    <div class="col-4 col-sm-2 my-auto">
                        <div class="">Rs. <?php echo number_format($link["price"],2) ?></div>
                        <!-- <input type="hidden" id="pp" > -->
                    </div>

                    <form action="" class="change-submit col-4 col-sm-1 my-auto">
                        <input type="hidden" class="pid" value="<?php echo $link['id']; ?>">
                        <input type="hidden" class="pprice" value="<?php echo $link['price']; ?>">
                    
                        <!-- <div class="col-4 col-sm-1 my-auto"> -->
                            <input type="number" class="form-control itemQty" name="" id="" value="<?php echo $link['quantity'] ?>" min="1">
                        <!-- </div> -->
                    </form>

                    <div class="col-4 col-sm-2 my-auto">
                        <div class="">Rs. <?php echo number_format($link["purchasing_price"],2) ?></div>
                        <input type="hidden" id="pp" >
                    </div>
                
                </div>

                <!-- For Pricing -->
                <?php
                    $purchasing += $link["purchasing_price"];
                ?>

                <?php } ?>
                
                <!-- Black line -->
                <div class="blacksline pt-2"></div>

                <!-- subtotals -->
                <div class="row Bodonifont mt-2">
                    <div class="col-6 col-sm-8"></div>
                    <div class="col-6 col-sm-4">
                        <!-- Total of products -->
                        <div class="row">
                            <div class="col-6">Total</div>
                            <div class="col-6 text-right">Rs <?php echo number_format($purchasing,2)  ?></div>
                            <input type="hidden" id="ppval" value="<?php echo $purchasing;  ?>">
                        </div>
                        <!-- delivery charges -->
                        <div class="row">
                            <div class="col-6">Delivery</div>
                            <div class="col-6 text-right">Rs <span id="delivery"></span></div>
                            <input type="hidden" name="" id="deliverys">
                        </div>
                        <!-- Subtotal -->
                        <div class="row">
                            <div class="col-6">Subtotal</div>
                            <div class="col-6 text-right">Rs <span id="final"></span></div>
                        </div>
                        <!-- next page -->
                        <div class="row">
                            <div class="col-6"></div>
                            <div class="col-6 text-right mt-4">
                                <a href="./info.php"><button class="btn btn-dark px-4 py-2">Check out</button></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        <?php include '../files/footer.php' ?>
    </div>

    <script src="../js/cart.ajax.js"></script>
    <script src="../js/dchargesCoupon.js"></script>
    <script>
        // Change the item quantity
    $(".itemQty").on('change', function() {
        var $el = $(this).closest('.change-submit');
        var pid = $el.find(".pid").val();
        var pprice = $el.find(".pprice").val();
        var qty = $el.find(".itemQty").val();
        location.reload(true);
        $.ajax({
          url: '../files/includes/cart.include.php',
          method: 'post',
          cache: false,
          data: {
            qtys: qty,
            pids: pid,
            pprice: pprice
          },
          success: function(response) {
            console.log(response);
            alert(response);
          }
         });
      });
    </script>

</body>
</html>