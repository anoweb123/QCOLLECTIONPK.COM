<?php 
    session_start();
    include_once './universalLinks.php';
    if(!isset($_SESSION['info_status']) && $_SESSION['info_status'] != true){
        header("location: ./info.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipping - Q. Collectionpk</title>


    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap CDN -->

    <!-- fa icons cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- fa icons cdn -->

    <!-- External Css -->
    <link rel="stylesheet" href="../css/info.css">
    <!-- External Css -->

</head>

<body style="height:auto !important; min-height:100%;">
    <div class="container-fluid">
        <div class="row">
            <!-- left side -->
            <div class="col-md-6 borders-right ">
                <!-- logo + Current page  -->
                <div class="pl-5" style="margin-top: 50px">
                    <img src="../assets/staticassets/logo-shipping.png" width="300px"
                        height="50px" alt="logo">
                    <div class="Bodonifont lspace-1 ml-5 pt-3">
                        <small class=" current">Cart > Information > Shipping</small>
                        <small> > Payment</small>
                    </div>
                </div>

                <!-- Shipping Information -->
                <div class="row pl-5">
                    <div class="col-12 mt-5">

                        <div class="border-outer">
                            <div class="row py-2 ">
                                <div class="col-2 pl-4 remove-link">Contact</div>
                                <div class="col-8"><?php echo $_SESSION['phone'] ?></div>
                                <small class="col-2" data-toggle="modal" data-target="#myModal"><a
                                        class="remove-link">Change</a></small>
                            </div>
                            <hr class="mx-3 my-1">
                            <div class="row py-2 ">
                                <div class="col-2 pl-4 remove-link">Ship to</div>
                                <div class="col-8"><?php echo $_SESSION['address'] ?></div>
                                <div class="col-2" data-toggle="modal" data-target="#shipTo"><a
                                        class="remove-link">Change</a></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-5">
                                <h6>Shipment Method</h6>
                                <div class="border-outer">
                                    <div class="row py-2 pl-3">

                                        <div class="col-10">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" checked id="customRadio1" name="customRadio"
                                                    class="custom-control-input ">
                                                <label class="custom-control-label remove-link pt-0"
                                                    for="customRadio1">Shipment rate</label>
                                            </div>
                                        </div>
                                        <div class="col-2 remove-link">
                                            Rs. <span id="shippingcharges3"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-6">
                                <a href="./cart.php">
                                    <button class="btn btn-outline-light text-dark">
                                       <i class="fa fa-caret-left" aria-hidden="true"></i> Return to cart</button>
                                </a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="./payment.php">
                                    <button type="submit" class="btn btn-dull p-3">Continue to Payment</button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- Right side -->
            <div class="col-md-6 rside ">
                <?php include_once './cartrightside.php' ?>
            </div>
        </div>
    </div>


    <!-- For delivery Charges and Coupon -->

    <!-- for tooltip -->
    <script src="../js/dchargesCoupon.js"></script>
    <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <div class="text-center"><span class="modal-title">Update Number</span></div>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-div">
                        <form action="" method="POST">
                            <div class="form-group">
                                <input type="text" value="<?php echo $_SESSION['phone'] ?>" class="form-control" name="phone" placeholder="Enter Cell">
                                <input type="hidden" value="<?php echo $_SESSION['user_id'] ?>" class="form-control" name="id" placeholder="Enter Cell">
                            </div>
                            <button type="submit" name="phonesubmit" class="btn btn-success btn-block mybtn">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="shipTo">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <div class="text-center"><span class="modal-title">Ship To</span></div>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-div">
                        <form action="" method="POST">
                            <div class="form-group">
                                <input type="text" value="<?php echo $_SESSION['address'] ?>" class="form-control" name="address" placeholder="Address">
                                <input type="hidden" value="<?php echo $_SESSION['user_id'] ?>" class="form-control" name="id" placeholder="Enter Cell">
                            </div>
                            <button type="submit" name="addresssubmit" class="btn btn-success btn-block mybtn">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>

</html>