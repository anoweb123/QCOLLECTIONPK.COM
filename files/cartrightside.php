<?php 
    include_once './includes/showCart.include.php';
?>
<div class="row pl-5" style="margin-top: 50px">
    <!-- 1st row -->
    <?php 
        $products = $showType->showCart();
        $purchasing = 0;
        foreach ($products as $row => $link) { 
    ?>
    <div class="col-md-2 pt-2">
        <div class="item">
            <a href="#">
                <span class="notify-badge"><?php echo $link['quantity']; ?></span>
                <img src="<?php echo $link['image1']; ?>" width="60px" height="60px" class="borders" alt="" />
            </a>
        </div>
    </div>
    <div class="col-md-6 mt-2 pt-2">
        <div class="row mt-4 size-10">
            <div class="col-6 p-0">
                <p class="mb-0"><?php echo $link['name']; ?></p>
                <p>Size: <?php echo $link['size']; ?></p>
            </div>
            <div class="col-6 text-right font-weight-bold">
                <?php echo number_format($link["purchasing_price"],2); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4 pt-2"></div>

    <!-- For total -->
    <?php 
        $purchasing += $link['purchasing_price'];
    } ?>

</div>

<hr class="mx-4">
<form class="row my-4">
    <!-- <form action=""> -->
        <div class="col-9 pl-5">
            <input type="text" id="coupon" class="form-control" placeholder="Gift card">
        </div>
        <div class="col-3 pl-0">
            <button type="submit" id="apply" class="btn btn-secondary px-4">Apply</button>
        </div>
        <div class="col-12">
            <div id='loader' style='display: none;'>
                <img src='https://i.pinimg.com/originals/a5/56/09/a55609061c5f24331405610fbf59203d.gif' width='70px' height='50px'>
                <small>Please Wait while Coupon is being verified</small>
            </div>
        </div>
        <small class="col-12 text-danger result pl-5"></small>
    <!-- </form> -->
</form>
<hr class="mx-4">

<div class="row px-5 font-14">
    <div class="col-6">Subtotal</div>
    <div class="col-6 text-right">Rs <?php echo number_format($purchasing,2); ?></div>
    <input type="hidden" name="" class="total" value="<?php echo $purchasing; ?>">
</div>

<div class="row px-5 font-14 S-CLASS d-none">
    <div class="col-6">Coupon Discount</div>
    <div class="col-6 text-right"><span class="discount"></span> %</div>
    <input type="hidden" name="" class="discounts" value="0">
</div>

<div class="row px-5 font-14">
    <div class="col-6">Delivery <span data-toggle="modal" data-target=".bd-example-modal-lg" class="ml-3"><i class="fa fa-question-circle" aria-hidden="true"></i></span></div>
    <div class="col-6 text-right"><small id="delivery">will be calculated at the time of shipment</small> <input type="hidden" name="" id="deliverys"> </div>
</div>
<hr class="mx-4">

<div class="row px-5">
    <p class="col-6">Total </p>
    <p class="col-6 text-right"><small>Pkr </small><span style="font-size: 24px" id="pricefinals"></span> <input type="hidden" name="" id="finals_input"> </p>
</div>

<script src="../js/cart.ajax.js"></script>