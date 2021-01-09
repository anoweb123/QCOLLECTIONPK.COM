<?php
//index.php
require_once "config.php";
function make_query($link)
{
 $query = "SELECT * FROM baner ORDER BY id ASC";
 $result = mysqli_query($link, $query);
 return $result;
}

function make_slide_indicators($link)
{
 $output = ''; 
 $count = 0;
 $result = make_query($link);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#demo" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#demo" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($link)
{
 $output = '';
 $count = 0;
 $result = make_query($link);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="carousel-item active">';
  }
  else
  {
   $output .= '<div class="carousel-item">';
  }
  $output .= '
   <img width="100%" height="500px" src="'.$row["url"].'" alt="test" />
   
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}

?>
<!DOCTYPE html>
<html>
 <head>
  <!-- <title>How to Make Dynamic Bootstrap Carousel with PHP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  <style>
  /* Make the image fully responsive
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
   */
  </style>
 </head>
 <body style="height: 400px !important">
  <div class="container-fluid p-0" style="">
   <div id="demo" class="carousel slide" data-ride="carousel">
   <ul class="carousel-indicators">
    <?php echo make_slide_indicators($link); ?>
    </ul>

    <div class="carousel-inner">
     <?php echo make_slides($link); ?>
    </div>
    <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
    </a>

   </div>
  </div>
 </body>
</html>