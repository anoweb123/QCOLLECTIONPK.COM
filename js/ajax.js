$("input[type=radio][name=colors]").change(function () {
  color = this.value;
  $.ajax({
    url: "./includes/getColorSize.inc.php",
    type: "POST",
    beforeSend: function(){
      // Show image container
      $("#loader").show();
      $(".sizes").hide();
     },
    data: { colorCode: color, functionColor: "success" },
    success: function (result) {
      console.log(result);
      test = JSON.parse(result);
      size_s = test[0].size_s;
      size_m = test[0].size_m;
      size_l = test[0].size_l;
      size_xl = test[0].size_xl;
      size_xll = test[0].size_xxl;
      quantity_s = test[0].quantity_s;
      quantity_m = test[0].quantity_m;
      quantity_l = test[0].quantity_l;
      quantity_xl = test[0].quantity_xl;
      quantity_xxl = test[0].quantity_xxl;
      // alert(quantity_l)
      if (size_s == "d-none") {
        $(".s").addClass("d-none");
        $(".s").removeClass("d-inline-block");
        $(".ss").attr("checked","false");
      } else {
        $(".s").addClass("d-inline-block");
        $(".ss").attr("checked","true");
      }
      if (size_m == "d-none") {
        $(".m").addClass("d-none");
        $(".m").removeClass("d-inline-block");
        $(".ms").attr("checked","false");
      } else {
        $(".m").addClass("d-inline-block");
        $(".ms").attr("checked","true");
      }
      if (size_l == "d-none") {
        $(".l").addClass("d-none");
        $(".l").removeClass("d-inline-block");
        $(".ls").attr("checked","false");
      } else {
        $(".l").addClass("d-inline-block");
        $(".ls").attr("checked","true");
      }
      if (size_xl == "d-none") {
        $(".xl").addClass("d-none");
        $(".xl").removeClass("d-inline-block");
        $(".xls").attr("checked","false");
      } else {
        $(".xl").addClass("d-inline-block");
        $(".xls").attr("checked","true");
      }
      if (size_xll == "d-none") {
        $(".xll").addClass("d-none");
        $(".xll").removeClass("d-inline-block");
        $(".xlls").attr("checked","false");
      } else {
        $(".xll").addClass("d-inline-block");
        $(".xlls").attr("checked","true");
      }
      
    },
    complete:function(data){
      // Hide image container
      $("#loader").hide();
      $(".sizes").show();
     }
  });
  // alert(this.value)
});
$(document).ready(function () {
  color = $("input[type=radio][name=colors]").val();
  $.ajax({
    url: "./includes/getColorSize.inc.php",
    type: "POST",
    beforeSend: function(){
      // Show image container
      $("#loader").show();
      $(".sizes").hide();
     },
    data: { colorCode: color, functionColor: "success" },
    success: function (result) {
      test = JSON.parse(result);
      size_s = test[0].size_s;
      size_m = test[0].size_m;
      size_l = test[0].size_l;
      size_xl = test[0].size_xl;
      size_xll = test[0].size_xxl;
      quantity_s = test[0].quantity_s;
      quantity_m = test[0].quantity_m;
      quantity_l = test[0].quantity_l;
      quantity_xl = test[0].quantity_xl;
      quantity_xxl = test[0].quantity_xxl;
      // alert(quantity_l)
      if (size_s == "d-none") {
        $(".s").addClass("d-none");
        $(".s").attr("checked","false");
      } else {
        $(".s").addClass("d-inline-block");
        $(".s").attr("checked","true");
      }
      if (size_m == "d-none") {
        $(".m").addClass("d-none");
        $(".m").attr("checked","false");
      } else {
        $(".m").addClass("d-inline-block");
        $(".m").attr("checked","true");
      }
      if (size_l == "d-none") {
        $(".l").addClass("d-none");
        $(".l").attr("checked","false");
      } else {
        $(".l").addClass("d-inline-block");
        $(".l").attr("checked","true");
      }
      if (size_xl == "d-none") {
        $(".xl").addClass("d-none");
        $(".xl").attr("checked","false");
      } else {
        $(".xl").addClass("d-inline-block");
        $(".xl").attr("checked","true");
      }
      if (size_xll == "d-none") {
        $(".xll").addClass("d-none");
        $(".xll").attr("checked","false");
      } else {
        $(".xll").addClass("d-inline-block");
        $(".xll").attr("checked","true");
      }
    },
    complete:function(data){
      // Hide image container
      $("#loader").hide();
      $(".sizes").show();
     }
  });
  
});


$("input[type=radio][name=colors]").change(function () {
  $(".quantity").addClass('d-none');
  $(".quantity").removeClass('d-block');
})
$("input[type=radio][name=s-size]").change(function () {
  // $(".quantity").addClass('d-block');
  // $(".quantity").removeClass('d-none');
  var size = $("[name=s-size]:checked").val();
  if(size == 's'){
    $(".quantity").html("Maximum available quantities are " + quantity_s);
  }
  if(size == 'm'){
    $(".quantity").html("Maximum available quantities are " + quantity_m);
  }
  if(size == 'l'){
    $(".quantity").html("Maximum available quantities are " + quantity_l);
  }
  if(size == 'xl'){
    $(".quantity").html("Maximum available quantities are " + quantity_xl);
  }
  if(size == 'xll'){
    $(".quantity").html("Maximum available quantities are " + quantity_xll);
  }
})

$("input[type=radio][name=s-size]").click(function() {
  $(".quantity").addClass('d-block');
  $(".quantity").removeClass('d-none');
});