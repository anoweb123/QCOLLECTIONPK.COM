<?php 
    include_once './sessionId.php'; 
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
                    <img src="../assets/staticassets/logo-shipping.png" width="300px" height="50px" alt="logo">
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
                                <div class="col-8"><?php echo $_SESSION['phone'] ?></div>
                                <!-- <small class="col-2"><a class="remove-link" data-toggle="modal" data-target="#myModal">Change</a></small> -->
                            </div>
                            <hr class="mx-3 my-1">
                            <div class="row py-2 ">
                                <div class="col-2 pl-4 remove-link">Ship to</div>
                                <div class="col-8"><?php echo $_SESSION['address'] ?></div>
                                <!-- <div class="col-2"><a class="remove-link" data-toggle="modal" data-target="#shipTo">Change</a></div> -->
                            </div>
                            <hr class="mx-3 my-1">
                            <div class="row py-2 ">
                                <div class="col-2 pl-4 remove-link">Method</div>
                                <div class="col-10">Shipment Rate . <span>Rs <small class="shippingcharges"></small></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-5">
                                <h6>Payment</h6>
                                <small>All transactions are secure and encrypted.</small>
                                <div class="border-outer">
                                    <div class="row py-2 px-3">
                                        <div class="col-12">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadioInline1" name="customRadioInline1" checked class="custom-control-input" value="cod">
                                                <label class="custom-control-label" for="customRadioInline1">Cash On Delivery (COD)</label>
                                            </div>
                                            <input type="hidden" value="cod" id="p_method">
                                            <input type="hidden" value="<?php echo $sessionId; ?>" id="session_id">
                                            <div class="custom-control custom-radio mt-2">
                                                <input type="radio" id="customRadioInline2" name="customRadioInline1" value="epay" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline2">EasyPaisa</label>
                                            </div>
                                            <div id="epayed" class="d-none text-center mt-3" style="border: 1px solid grey">
                                                <img width="150" height="100" src="../assets/staticassets/easy-paisa.jpg" alt="">
                                                <p>You can pay in advance through easy paisa. After completing the payment send us the payment receipt on whatsapp</p>
                                                <a href="https://wa.me/+923235295257" target="_blank">
                                                    <i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i>
                                                </a>
                                                
                                                <div class="mt-5"><small>Note: we will not proceed your order until you send the receipt</small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                                <div class="col-6">
                                    <a href="./info.php">
                                    <button  class="btn btn-outline-light text-dark"><i class="fa fa-caret-left" aria-hidden="true"></i> Return to information</button>
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
    <script src="../js/dchargesCoupon.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });

        

        $('input:radio[name="customRadioInline1"]').change(
            
        function(){
            if ($(this).is(':checked') && $(this).val() == 'epay') {
                $('#epayed').removeClass('d-none')
                $('#p_method').val("epay")
            }
            if ($(this).is(':checked') && $(this).val() == 'cod') {
                $('#epayed').addClass('d-none')
                $('#p_method').val("cod")
            }
        });


        // For placing order
        $("#confirmorder").click(function(e) {
        e.preventDefault();
        var payment_method = $('#p_method').val(); 
        var price = $('#finals_input').val();
        var session_id = $('#session_id').val();
        $.ajax({
            url: '../files/includes/cart.include.php',
            method: 'post',
            cache: false,
            data: {
                status: "ordered",
                payment_method : payment_method,
                price: price,
                session_id: session_id
            },
            success:function(response){
                // alert(response)
                $('#thanksModal').modal('show')
                $('#thanksModal').modal({
                    backdrop: 'static',
                    keyboard: false
                })
            } 
        })
    });

    </script>


</body>
</html>