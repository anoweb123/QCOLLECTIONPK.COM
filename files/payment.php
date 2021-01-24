<?php include_once './universalLinks.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Q. Collectionpk</title>


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
    <style>
        .modal-img {
    margin-top: -85px;
    width: 33%;
    border: 5px solid white;
    border-radius: 50%;
    padding: 5px;
    background: #CB934F;
}
.gold-color{
    color: #CB934F !important;
}
.gold-color-btn{
    background-color: #CB934F !important;
}
.font-lighter{
    font-size: 14px
}

    </style>

</head>
<body >
    <div class="container-fluid">
        <div class="row">
            <!-- left side -->
            <div class="col-md-6 borders-right " >
                <!-- logo + Current page  -->
                <div class="pl-5" style="margin-top: 50px">
                    <img src="https://cdn.shopify.com/s/files/1/0059/6856/0210/files/itterhad.png?17449" width="300px" height="50px" alt="logo">
                    <div class="Bodonifont lspace-1 ml-5 pt-3">
                        <small class=" current" >Cart > Information > Shipping > Payment</small>
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
                            <hr class="mx-3 my-1">
                            <div class="row py-2 ">
                                <div class="col-2 pl-4 remove-link">Method</div>
                                <div class="col-10">Shipment Rate . <span>Rs <small>250.0</small></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-5">
                                <h6>Payment</h6>
                                <small>All transactions are secure and encrypted.</small>
                                <div class="border-outer">
                                    <div class="row py-2 pl-3">
                                        
                                        <div class="col-12">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" checked id="customRadio1" name="customRadio" class="custom-control-input ">
                                                <label class="custom-control-label remove-link pt-0" for="customRadio1">Cash On Delivery (COD)</label>
                                            </div>
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
                                    <button type="submit" id="confirmorder" class="btn btn-dull p-3">Confirm Order</button>
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


<!-- thank you Modal -->
<div class="modal fade text-center py-5" style="top:30px" id="thanksModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="<?php echo $baseUrl; ?>assets/staticassets/logo.png" class="modal-img">
                <h3 class="pt-5 mb-0 gold-color">Thanks for Ordering!</h3>
                <p class="pt-1 ">You will received your parcel in 3 to 5 working days.</p>
                <p class="pb-3 text-muted font-lighter"><small>In case of any query whatsapp or call us at 0304 792 8912</small></p>
                <a role="button" class="btn gold-color-btn text-white mb-3" href="<?php echo $baseUrl; ?>">Continue Exploring</a>
            </div>
        </div>
    </div>
</div>
<!-- ./thank you Modal -->


    <!-- for tooltip -->
    <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });

        // To display thank you for ordering message
        $('#confirmorder').on('click', function() {
            $('#thanksModal').modal('show');
        });
    </script>

</body>
</html>