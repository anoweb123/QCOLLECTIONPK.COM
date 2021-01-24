
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
    <link rel="stylesheet" href="../css/footer.css">
    <!-- for mainproductslider -->
    <link rel="stylesheet" href="../css/mainproductslider.css">
    <!-- for mainproductslider -->
    <!-- for animation -->
    <link rel="stylesheet" href="../css/animation.css">
    <!-- for animation -->
    <!-- External CSS -->

    <!-- External Js -->
    <script src="../js/header.js"></script>
    <!-- External Js -->




</head>

<body>
    <div>
        <!-- on screen loading animation -->
        <div id="load"></div>
        <!-- on screen loading animation -->
        <?php include './header.php' ?>
        <!-- for top carousel -->
        <div>
            <?php include './slider.php' ?>
        </div>
        <!-- for top carousel -->

        <div class="container-fluid" id="newarrival">
            <div class="row">
                <div class="col-12 text-center mt-3">
                    <h4 style="font-weight: bolder; letter-spacing: 1.5px">
                        New Arrivals
                    </h4>
                    <hr style="width: 125px; font-weight: bold; border-top: 3px inset black;">
                </div>
                <?php include './mainproductslider.php' ?>
            </div>
        </div>
        <!-- Show small banner -->
        <div
            style="height: 150px;background-size: cover;background-position: center;width: 100%;background-image: url(https://image.shutterstock.com/image-vector/grand-opening-long-horizontal-banner-260nw-390041581.jpg);">
        </div>
        <!-- Show small banner -->
        <div id="styles mt-5">
            <?php include './sellItem.php' ?>
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
                        <img class="card-img-top" src="../assets/staticassets/nav_logo.jpg" alt="Card image cap">
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
                        <img class="card-img-top" src="../assets/staticassets/nav_logo.jpg" alt="Card image cap">
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
                        <img class="card-img-top" src="../assets/staticassets/nav_logo.jpg" alt="Card image cap">
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
                        <img class="card-img-top" src="../assets/staticassets/nav_logo.jpg" alt="Card image cap">
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

        <!-- Show Ads -->
        <a href="" target="_blank">

            <div style="background-image: url(../assets/staticassets/ad.png);height: 120px !important; background-repeat: no-repeat !important; width: 100% !important; background-size: 100% 100%; "
                class="col-12 my-2"></div>
            <div class="py-1 d-flex flex-row-reverse mr-3">
                <i class="fas fa-ad pl-2">&#xf641; Ad</i>
            </div>
        </a>
        <!-- Show Ads -->

        <div class="container-fluid py-3">
            <div class="row image-hover">
                <div class="col-12 text-center mt-3">
                    <h4 style="font-weight: bolder">
                        Categories
                    </h4>
                    <hr style="width: 100px; font-weight: bold">
                </div>

                <div class="col-6 col-md-4">
                    <div class="card">
                        <img class="card-img-top" height="170px" src="../assets/staticassets/stiched.jpg"
                            alt="Card image cap">
                        <div class="card-body text-center">
                            <div>Stitched</div>
                            <a href="category.php?categoryName=stitched">
                                <button class="btn btn-primary mt-2">View More</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card">
                        <img class="card-img-top" height="170px" src="../assets/staticassets/unstitched.jpg"
                            alt="Card image cap">

                        <div class="card-body text-center">
                            <div>Unstitched</div>
                            <a href="category.php?categoryName=unstitched">
                                <button class="btn btn-primary mt-2">View More</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card">
                        <img class="card-img-top" height="170px" src="../assets/staticassets/newarrival.jpg"
                            alt="Card image cap">
                        <div class="card-body text-center">
                            <div>Newest Arrival</div>
                            <a href="category.php?categoryName=newestarrival">
                                <button class="btn btn-primary mt-2">View More</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <div style='background: url("../assets/staticassets/contact-us-bg.jpg") !important;  background-repeat: no-repeat'>
    <div class="container py-5">
        <div class="col-6 py-5 text-center" style="color: white; background-color:black; opacity: 0.4; border-radius: 10px;">
            <h3 class="font-weight-bold">Subscribe us</h3>
            <div class="pt-3">
                <form action="">
                <div class="input-group m-0">
                    <input type="email" class="form-control rounded" placeholder="example@gmail.com" aria-label="Search"
                        aria-describedby="search-addon" />
                    <button type="button" class="btn btn-primary w-25">Send</button>
                </div>
                </form>
                <small>*to get update with our latest design send us your email</small>
            </div>
        </div>
    </div>
    </div>

    <?php include './footer.php' ?>
    </div>


    <!-- External js -->
    <script src="../js/singleproduct.js"></script>
    <script src="../js/header.js"></script>
    <script>
    // to load and animate sell single item item
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
    // to animate when page load CSS is in header.css
    document.onreadystatechange = function() {
        var state = document.readyState
        if (state == 'complete') {
            setTimeout(function() {
                document.getElementById('interactive');
                document.getElementById('load').style.visibility = "hidden";
            }, 1000);
        }
    }
    </script>

</body>

</html>