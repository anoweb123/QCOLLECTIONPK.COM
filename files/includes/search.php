<?php

//Including Database configuration file.

include "../config.php";

//Getting value of "search" variable from "script.js".

if (isset($_POST['search'])) {

//Search box value assigning to $Name variable.

   $Name = $_POST['search'];

//Search query.

   $Query = "SELECT * FROM products INNER JOIN images ON images.product_id = products.id WHERE products.name LIKE '%$Name%' LIMIT 5";

//Query execution

   $ExecQuery = MySQLi_query($link, $Query);

//Creating unordered list to display result.

   echo '

   <div class="container-fluid w-100">
   <div class="row w-100">
       <div class="col-12 p-0 m-0 w-100">
           <p class="top-product pr-2 text-right">Products</p>
       </div>

   ';

   //Fetching result from database.

   while ($Result = MySQLi_fetch_array($ExecQuery)) {

       ?>


   <div class="col-1 p-2 my-auto">
      <img style="border: 1px solid grey" src="<?php echo $Result['image1']; ?>" alt="" width="60" height="60">
   </div>
   <div class="col-11 p-2">
      <a class="search-header" href="./singlepage.php?productId=<?php echo $Result['id']; ?>"><?php echo $Result['name']; ?></a>
      <p class="search-detail">
      <?php echo $Result['short_description']; ?>
      </p>
      <p>Rs. <?php echo $Result['price']; ?></p>
   </div>



   <?php

}}


?>



      </div>
</div>