
<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "carrwash");
function make_query($connect)
{
    $query = "SELECT * FROM banner ORDER BY id ASC";
    $result = mysqli_query($connect, $query);
    return $result;
}

function make_slide_indicators($connect)
{
    $output = '';
    $count = 0;
    $result = make_query($connect);
    while ($row = mysqli_fetch_array($result)) {
        if ($count == 0) {
            $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="' . $count . '" class="active"></li>
   ';
        } else {
            $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="' . $count . '"></li>
   ';
        }
        $count = $count + 1;
    }
    return $output;
}

function make_slides($connect)
{
    $output = '';
    $count = 0;
    $result = make_query($connect);
    while ($row = mysqli_fetch_array($result)) {
        if ($count == 0) {
            $output .= '<div class="item active">';
        } else {
            $output .= '<div class="item">';
        }
        $output .= '
   <img src="' . $row["image"] . '" alt="' . $row["id"] . '" />

  </div>
  ';
        $count = $count + 1;
    }
    return $output;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div id="dynamic_slide_show" class="carousel slide" data-ride="carousel" >
    <ol class="carousel-indicators">
    <?php echo make_slide_indicators($connect); ?>
    </ol>

    <div class="carousel-inner">
     <?php echo make_slides($connect); ?>
    </div>
    <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
     <i style="margin-top:200%;" class="fa fa-arrow-left"></i>
     <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
    <i style="margin-top:200%;" class="fa fa-arrow-right"></i>
     <span class="sr-only">Next</span>
    </a>

   </div>






    
</body>
</html>


