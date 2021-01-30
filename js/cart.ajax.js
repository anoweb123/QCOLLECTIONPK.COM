$(document).ready(function() {
    
    // Change the item quantity
    $(".addItemBtn").click(function(e) {
        e.preventDefault();
        var $form = $(this).closest(".form-submit");
        var pid = $form.find(".pid").val();
        var quantity = $form.find(".quantity").val();
        var discount = $form.find(".discount").val();
        var session_id = $form.find(".session_id").val();
        var pprice = $form.find(".pprice").val();
        var color = $form.find(".color").val();
        var size = $form.find(".size").val();
        $.ajax({
            url: '../files/includes/cart.include.php',
            method: 'post',
            cache: false,
            data: {
                pid: pid,
                qty: quantity,
                discount: discount,
                session_id: session_id,
                pprice: pprice,
                color: color,
                size: size
            },
            success: function(response) {
                $("#message").html(response);
                window.scrollTo(450, 450);
                load_cart_item_number();
            },
            
        });
    });
    
    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();
    calculateTotal();

    function calculateTotal() {
        total = $('.total').val()    
        discount = $('.discounts').val()
        total = parseInt(total);
        discount = parseInt(discount);
        if(discount == 0){
            discountPrice = total;
            $('#pricefinals').html(discountPrice)
            $('#finals_input').val(discountPrice)
            
        }else {
            discountPrice = total - (discount*total)/100;
            $('#pricefinals').html(discountPrice)
            $('#finals_input').val(discountPrice)
        }
    
    }

    function load_cart_item_number() {
      $.ajax({
        url: '../files/includes/cart.include.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
            $(".items").html(response);
            if(response == 0){
                $('.no-display').css('display', 'block')
                $('.no-displays').css('display', 'none')
            }else {
                $('.no-display').css('display', 'none')
                $('.no-displays').css('display', 'block')
            }
        }
      });
    }
  });

  $("#apply").click(function(e) {
    e.preventDefault();
    coupon = $('#coupon').val();
    $.ajax({
        url: '../files/includes/cart.include.php',
        method: 'post',
        cache: false,
        data: {
            coupon: coupon,
        },
        beforeSend: function(){
            // Show image container
            $("#loader").show();
            $(".sizes").hide();
        },
        success: function(response) {
            if(response.length == 2){
                $(".result").html("Invalid Coupon id!")
            }else{
                test = JSON.parse(response);
                coupon = test[0].coupon_percentage;
                $(".discount").html(coupon);
                $(".discounts").val(coupon);
                $(".S-CLASS").removeClass("d-none")
                $(".result").html("")
                calculateTotalAfterClick();
            }
        },
        complete:function(data){
            // Hide image container
            $("#loader").hide();
            $(".sizes").show();
        }
        
    });
    function calculateTotalAfterClick() {
        total = $('.total').val()    
        discount = $('.discounts').val()
        total = parseInt(total);
        discount = parseInt(discount);
        if(discount == 0){
            discountPrice = total;
            $('#pricefinals').html(discountPrice)
            $('#finals_input').val(discountPrice)
            
        }else {
            discountPrice = total - (discount*total)/100;
            $('#pricefinals').html(discountPrice)
            $('#finals_input').val(discountPrice)
        }
        $.ajax({
            url: '../files/includes/cart.include.php',
            method: 'post',
            cache: false,
            data: {
                couponPercent: discount,
            },
            success: function(response) {
                // alert(response);
            },
         
        })
    }

    // $("#confirmorder").click(function(e) {
    //     e.preventDefault();
    //     var payment_method = $('#p_method').val(); 
    //     $.ajax({
    //         url: '../files/includes/cart.include.php',
    //         method: 'post',
    //         cache: false,
    //         data: {
    //             status: 'ordered',
    //             payment_method : payment_method,
                
    //         },
    //         success:function(response){
    //             alert(response)
    //         } 
    //     })
    // });


    


});
  
document.getElementById("myLink").onclick = function() {
    // do things, and then
    return false;
};