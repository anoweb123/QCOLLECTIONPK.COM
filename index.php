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
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <!-- for mainproductslider -->
    <link rel="stylesheet" href="./css/mainproductslider.css">
    <!-- for mainproductslider -->
    <!-- for animation -->
    <link rel="stylesheet" href="./css/animation.css">
    <!-- for animation -->
    <!-- External CSS -->

    <!-- External Js -->
    <script src="./js/header.js"></script>
    <!-- External Js -->




</head>

<body>
    <div>
        <?php include './files/header.php' ?>
        <!-- for top carousel -->
        <div>
            <?php include './files/slider.php' ?>
        </div>
        <!-- for top carousel -->

        <div class="container-fluid" id="newarrival">
            <div class="row">
                <div class="col-12 text-center mt-3">
                    <h4 style="font-weight: bolder; letter-spacing: 1.5px">
                        New Arrivals
                    </h4>
                    <hr style="width: 125px; font-weight: bold; border-top: 3px inset black;">
                    <?php include './files/mainproductslider.php' ?>
                </div>
            </div>
        </div>

        <div id="styles">
            <?php include './files/sellItem.php' ?>
        </div>

        <div class="container-fluid py-3">

            <div class="row">
                <div class="col-12 text-center mt-3">
                    <h4 style="font-weight: bolder">
                        Hot Products
                    </h4>
                    <hr style="width: 100px; font-weight: bold">
                </div>

                <div class="col-6 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="./assets/staticassets/nav_logo.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="" class="card-text hide_flow">Some quick example text to build on the card title
                                and
                                make up a bulk</a>
                            <p class="text-center pt-4">RS 999 <del>RS 1100</del></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="./assets/staticassets/nav_logo.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="" class="card-text hide_flow">Some quick example text to build on the card title
                                and
                                make up a bulk</a>
                            <p class="text-center pt-4">RS 999 <del>RS 1100</del></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="./assets/staticassets/nav_logo.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="" class="card-text hide_flow">Some quick example text to build on the card title
                                and
                                make up a bulk</a>
                            <p class="text-center pt-4">RS 999 <del>RS 1100</del></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="./assets/staticassets/nav_logo.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="" class="card-text hide_flow">Some quick example text to build on the card title
                                and
                                make up a bulk</a>
                            <p class="text-center pt-4">RS 999 <del>RS 1100</del></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-3">

            <div class="row">
                <div class="col-12 text-center mt-3">
                    <h4 style="font-weight: bolder">
                        Categories
                    </h4>
                    <hr style="width: 100px; font-weight: bold">
                </div>

                <div class="col-6 col-md-4">
                    <div class="card">
                        <img class="card-img-top" height="170px" src="./assets/staticassets/stiched.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <div>Stitched</div>
                            <a href="">
                            <button class="btn btn-primary mt-2">View More</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card">
                        <img class="card-img-top" height="170px" src="./assets/staticassets/unstitched.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <div>Unstitched</div>
                            <a href="">
                            <button class="btn btn-primary mt-2">View More</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card">
                        <img class="card-img-top" height="170px" src="./assets/staticassets/newarrival.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <div>Newest Arrival</div>
                            <a href="">
                            <button class="btn btn-primary mt-2">View More</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <?php include './files/footer.php' ?>
    </div>


    <!-- External js -->
    <script src="./js/singleproduct.js"></script>
    <script src="./js/header.js"></script>
    <script>
    $(window).scroll(function() {
        var hT = $('#newarrival').offset().top,
            hH = $('#newarrival').outerHeight(),
            wH = $(window).height(),
            wS = $(this).scrollTop();
        console.log((hT - wH), wS);
        if (wS > (hT + hH - wH)) {
            $("#styles").addClass("fade-in");
        }
    });
    </script>

</body>

</html>