<?php include_once './universalLinks.php'; ?>
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
            <div class="col-md-6 borders-right " >
                <!-- logo + Current page  -->
                <div class="pl-5" style="margin-top: 50px">
                    <img src="https://cdn.shopify.com/s/files/1/0059/6856/0210/files/itterhad.png?17449" width="300px" height="50px" alt="logo">
                    <div class="Bodonifont lspace-1 ml-5 pt-3">
                        <small class=" current" >Cart > Information > Shipping</small>
                        <small> > Payment</small>
                    </div>
                </div>

                <!-- Shipping Information -->
                <div class="row pl-5">
                    <div class="col-12 mt-5">

                        <div class="border-outer">
                            <div class="row py-2 ">
                                <div class="col-2 pl-4 remove-link">Contact</div>
                                <div class="col-8">03206622487</div>
                                <small class="col-2"><a class="remove-link" href="./info.php">Change</a></small>
                            </div>
                            <hr class="mx-3 my-1">
                            <div class="row py-2 ">
                                <div class="col-2 pl-4 remove-link">Ship to</div>
                                <div class="col-8">1099 Poplar Street, Chicago 60607, Pakistan</div>
                                <div class="col-2"><a class="remove-link" href="./info.php">Change</a></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-5">
                                <h6>Shipment Method</h6>
                                <div class="border-outer">
                                    <div class="row py-2 pl-3">
                                        
                                        <div class="col-10">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" checked id="customRadio1" name="customRadio" class="custom-control-input ">
                                                <label class="custom-control-label remove-link pt-0" for="customRadio1">Shipment rate</label>
                                            </div>
                                        </div>
                                        <div class="col-2 remove-link">
                                            Rs. 250
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                                <div class="col-6">
                                    <a href="./info.php">
                                    <button  class="btn btn-outline-light text-dark">< Return to information</button>
                                    </a>
                                </div>
                                <div class="col-6 text-right"> 
                                    <button type="submit" class="btn btn-dull p-3">Continue to Payment</button>
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


    <!-- for tooltip -->
    <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>

</body>
</html>