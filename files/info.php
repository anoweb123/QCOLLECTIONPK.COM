<?php 
    include_once './universalLinks.php'; 
    include_once './includes/showCart.include.php';
    if(isset($_SESSION['info_status']) && $_SESSION['info_status'] == true){
        header("location: ./shipping.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information - Q. Collectionpk</title>


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
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- left side -->
            <div class="col-md-6 borders-right " >
                <!-- logo + Current page  -->
                <div class="pl-5" style="margin-top: 50px">
                    <img src="../assets/staticassets/logo-shipping.png" width="300px" height="50px" alt="logo">
                    <div class="Bodonifont lspace-1 ml-5 pt-3">
                        <small class=" current" >Cart > Information</small>
                        <small> > Shipping > Payment</small>
                    </div>
                </div>

                <!-- Shipping Information -->
                <div class="row pl-5">
                    <div class="col-12 mt-5">
                    <small id="emailHelp" class="form-text text-muted text-center">We'll never share your details with anyone else.</small>
                        <h5>Shipping Address</h5>

                        <!-- form -->
                        <form action="" method="post">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" required name="fname" class="form-control"  aria-describedby="name" placeholder="FIRST NAME">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" required name="lname" class="form-control"  aria-describedby="name" placeholder="LAST NAME">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" required name="address" class="form-control"  placeholder="Address">
                            </div>

                            <div class="form-group">
                                <input type="email" required  name="suit" class="form-control"  placeholder="Email example@gmail.com">
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" required name="city" class="form-control"  placeholder="City">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" required name="postal" class="form-control"  placeholder="Postal Address">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" name="phone" class="form-control no-right-border" placeholder="Phone">
                                    <div class="input-group-append">
                                        <i class="input-group-text fa fa-question-circle update-circle" aria-hidden="true" delay="0" data-toggle="tooltip" title="Incase we need to contact you about order" ></i>
                                        <!-- <span class="input-group-text"></span> -->
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-6">
                                    <a href="./shipping.php">
                                        <button  class="btn btn-outline-light text-dark"> <i class="fa fa-caret-left" aria-hidden="true"></i> Return to Shipping</button>
                                    </a>
                                </div>
                                <div class="col-6 text-right"> 
                                    <button type="submit" name="submit" class="btn btn-dull p-3">Continue to Shopping</button>
                                </div>
                            </div>
                            
                        </form>


                    </div>
                </div>

            </div>
            <!-- Right side -->
            <div class="col-md-6 rside">
                <?php include_once './cartrightside.php'; ?>
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