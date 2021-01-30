$(document).ready(function() {
    
    $.ajax({
        url: '../files/includes/getColorSize.inc.php',
        method: 'post',
        cache: false,
        data: {
            getCoupon: true,
        },
        beforeSend: function(){
            // Show image container
            $("#loader").show();
            $(".sizes").hide();
        },
        success:function(response){
            test = JSON.parse(response);
            coupon = test[0].coupon;
            $(".discount").html(coupon);
            $(".discounts").val(coupon);
            $(".S-CLASS").removeClass("d-none")
            $(".result").html("")
            calculateTotalAfterClick()
        },
        complete:function(data){
            // Hide image container
            $("#loader").hide();
            $(".sizes").show();
        }
    })

    $.ajax({
        url: '../files/includes/getColorSize.inc.php',
        method: 'post',
        cache: false,
        data: {
            getDelivery: true,
        },
        success:function(response){
            test = JSON.parse(response);
            amount = test[0].amount;
            $("#delivery").html(amount);
            $("#delivery").text(amount);
            $("#shippingcharges3").html(amount);
            $("#deliverys").val(amount);
            calculateTotalAfterClick()
            finalBill()
        },
    })
    function calculateTotalAfterClick() {
        total = $('.total').val()    
        discount = $('.discounts').val()
        dcharges = $('#deliverys').val()
        total = parseInt(total);
        discount = parseInt(discount);
        if(discount == 0){
            discountPrice = total + parseInt(dcharges);
            $('#pricefinals').html(discountPrice)
            $('#finals_input').val(discountPrice)
            
        }else {
            discountPrice = total - (discount*total)/100 + parseInt(dcharges);
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
                finalBill()
            },
         
        })
    }

    function finalBill(){
        var pp = $('#ppval').val();
        var dcharges = $('#deliverys').val();
        total = parseInt(pp) + parseInt(dcharges);
        $('#final').text(total);
    }

})