<?php include_once './universalLinks.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    .highlight {
        font-weight: bold;
        box-shadow: 1px 1px 5px #146eb4;
    }

    .highlighted {
        box-shadow: 1px 1px 5px #CB934F;
        font-weight: bold;
    }
    </style>
</head>

<body>
        <!-- top navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-color py-0">


            <div class="collapse navbar-collapse" id="">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a href="">
                            <i class="fa fa-twitter fa-lg pr-3" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <i class="fa fa-facebook fa-lg pr-3" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="">
                            <i class="fa fa-youtube fa-lg pr-3" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <i class="fa fa-instagram fa-lg pr-3" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <i class="fa fa-envelope pr-3" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <small class="pr-3">0304 792 8912</small>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <small>+92 311 6021101</small>
                        </a>
                    </li>
                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav small">
                        <li class="nav-item">
                            <a href="">
                                <p class="pr-4 pt-2">HELP</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="">
                                <p class="pt-2">RETURN & EXCHANGE</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- middle navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-color sticky-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars color_white" aria-hidden="true"></i>
            </button>

            <a class="navbar-brand ml-3" href="#">
                <img width="130px" height="80px" src="<?php echo $baseUrl; ?>assets/staticassets/logo.png" alt="LOGO">
            </a>


            <!-- Small Screen -->

            <div class="form-inline my-2 my-lg-0 ml-5 sidebar-social d-block d-lg-none d-xl-none">
                <ul class="text-center">
                    <li class="mr-4">
                        <a href="" rel="nofollow">
                            <i class="fa fa-user-circle"></i><span>Login</span>
                        </a>
                    </li>
                    <li class="cart-button">
                        <a href="" title="Cart" class="sub" rel="nofollow">
                            <i class="fa fa-shopping-basket"></i><span>cart</span>
                        </a>
                        <div class="cart-dropdown">
                            <div class="font-weight-bold head-dropdown">Shopping Cart <small>(0)</small></div>
                            <hr>
                            <div class="empty-cart text-center w-100">
                                <div class="">
                                    <div class="cart-icon pt-2">
                                        <i class="fa fa-shopping-basket text-dark"
                                            style="font-size: 50px; height:50px; width:50px" aria-hidden="true"></i>
                                        <p class="font-weight-bold mt-3" style="letter-spacing: 1.5px;">Your Cart is
                                            Empty</p>
                                        <p class="font-weight-bold mt-3" style="letter-spacing: 1.5px;">Continue to Shop
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>



            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="input-group md-form form-sm form-2 pl-3">
                    <input class="form-control my-0 py-1 lime-border d-sm-none d-xl-block d-lg-block" type="text"
                        placeholder="What are you looking for..." aria-label="Search">
                    <div class="input-group-append ">
                        <span class="input-group-text  search_icon d-sm-none d-xl-block d-lg-block" id="basic-text1"><i
                                class="fa fa-search" aria-hidden="true"></i></span>
                    </div>
                </form>
                <div class="form-inline my-2 my-lg-0 ml-5 sidebar-social d-sm-none d-xl-block d-lg-block ">
                    <ul class="text-center">
                        <li class="mr-4">
                            <a href="" rel="nofollow">
                                <i class="fa fa-user-circle"></i><span>Login</span>
                            </a>
                        </li>
                        <li class="cart-button">
                            <a href="" title="Cart" class="sub" rel="nofollow">
                                <i class="fa fa-shopping-basket"></i><span>cart</span>
                            </a>
                            <div class="cart-dropdown">
                                <div class="font-weight-bold head-dropdown">Shopping Cart <small>(0)</small></div>
                                <hr>
                                <div class="empty-cart text-center w-100">
                                    <div class="">
                                        <div class="cart-icon pt-2">
                                            <i class="fa fa-shopping-basket text-dark"
                                                style="font-size: 50px; height:50px; width:50px" aria-hidden="true"></i>
                                            <p class="font-weight-bold mt-3" style="letter-spacing: 1.5px;">Your Cart is
                                                Empty</p>
                                            <p class="font-weight-bold mt-3" style="letter-spacing: 1.5px;">Continue to
                                                Shop</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <!-- bottom Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-color">


            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto white-btn">
                    <li class="nav-item active btn-special" id="btn">
                        <a href="">
                            <input type="text" value="Weekly offers" class="btn ml-1 text-uppercase"
                                style="color: #CB934F">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <input type="text" value="New arrivals" class="btn ml-1 text-uppercase  w-80  white-btn">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <input type="text" value="HOme" class="btn w-60 px-0 ml-1 text-uppercase ml-1  white-btn">
                        </a>
                    </li>
                   
                    <li class="nav-item dropdown men">
                        <a  href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <input type="text" value="men" class="btn w-60 px-0 text-uppercase  white-btn">
                            <i class="fa fa-angle-down" style="font-size: 11px;" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu men-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item color_black" href="#">Comming Soon !</a>
                            <div class="dropdown-divider"></div>
                           
                        </div>
                    </li>

                    <li class="nav-item dropdown women">
                        
                        <a  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <input type="text" value="women" class="btn w-70 text-uppercase  white-btn">
                            <i class="fa fa-angle-down" style="font-size: 11px;" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu women-menu " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item color_black" href="#">Comming Soon !</a>
                            <div class="dropdown-divider"></div>
                           
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <input type="text" value="Kids" class="btn w-60 px-0 text-uppercase  white-btn">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <input type="text" value="big and tall" class="btn w-80 text-uppercase  white-btn">
                        </a>
                    </li>
                </ul>

                <div class="form-inline my-2 my-lg-0">
                    <!-- <ul class="navbar-nav small">
                    <li class="nav-item">
                        <a href="">
                            <p class="pr-4 pt-2">HELP</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <p class="pt-2">RETURN & EXCHANGE</p>
                        </a>
                    </li>
                </ul> -->
                </div>
            </div>
        </nav>



    <script>
    function blink(btn) {
        blink1(btn);
    }

    function blink1(btn1) {
        //document.getElementById(btn1).className = ;
        btn1.removeClass();
        btn1.addClass("highlight");
        setTimeout(function() {
            blink2(btn1);
        }, 750);
    }

    function blink2(btn2) {
        //document.getElementById(btn2).className = "highlighted";
        btn2.removeClass();
        btn2.addClass("highlighted");
        setTimeout(function() {
            blink1(btn2);
        }, 750);
    }

    blink($('#btn'));
    </script>
</body>

</html>