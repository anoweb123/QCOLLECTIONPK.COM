<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>


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
    <!-- For Contact US -->
    <link rel="stylesheet" href="../css/contactus.css">
    <link rel="stylesheet" href="../css/singleproduct.css">

  

</head>

<body>
    <!-- For header -->
    <?php include './header.php' ?>

<div class="container mt-3">
<h3 style="text-decoration: underline;">Contact Us!</h3>
</div>
  
    <!-- Contact Us -->
    <div class="container mt-3">
        <div class="row">
            <!-- Section Left -->
            <div class="col-lg-6">

                <div class="img">

                </div>


            </div>


            <!-- Section right -->
            <div class="col-lg-6 p-5 right_section">
                <div class="container ">
                    <form action="/action_page.php">
                        <label for="name" class="mt-4 input_label">Name</label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Your name..">

                        <label for="email" class="mt-4 input_label">Email </label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="Your Email..">

                        <label for="number" class="mt-4 input_label">Phone</label>
                        <input type="text" id="phone" class="form-control" name="phone"
                            placeholder="Your Phone Number..">

                        <label for="message" class="mt-4 input_label">Message</label>
                        <textarea id="message" name="message" rows="5" class="form-control"
                            placeholder="Write your message.."></textarea>

                        <input type="submit" class="mt-4 btn btn-lg btn-warning color_white input_label" value="Submit">
                    </form>
                </div>


            </div>

        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-lg-6 mt-4 mb-4">

                <p>Please don't hesitate to get in touch with us if you have any questions about our products or
                    company! Our team is happy to help and try our best to respond to emails within 24hrs.
                    <br><br>
                    Please call us at +92 348 1112 356 (10 AM to 5 PM).
                </p>
                <div class="row">
                    <div class="col-12">
                        <ol class="social_iconss p-0 pt-3">
                            <li class="">
                                <a href="">
                                    <i class="fa fa-twitter twitter fa-lg pr-3" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="">
                                <a href="">
                                    <i class="fa fa-facebook facebook fa-lg pr-3" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="">
                                <a href="">
                                    <i class="fa fa-envelope email pr-3" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-lg-6"></div>
        </div>

    </div>

    <?php include './footer.php' ?>


</body>

</html>