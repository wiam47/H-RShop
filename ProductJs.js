
function buy() {
  var Qtt = document.getElementById('quantity').textContent;
  
  alert("khlles bach tchri "+Qtt+" diyal maganat -_-");
}
  
function pdctQuantity(method) {
  var nbrProduct = document.getElementById('quantity');
  var stockLimitValue = Number(document.getElementById('stock_limit').textContent);
  var nbrProductValue = Number(nbrProduct.textContent);
  if (method=="add" && nbrProductValue != 9) {
    nbrProduct.innerHTML = nbrProductValue+1;
  } else if (method=="minus" && nbrProductValue != 1) {
    nbrProduct.innerHTML = nbrProductValue-1;
  }
}



$(document).ready(function() {
  
  $('.rcmnd-discount').each(function(obj) {
    if ($(this).text() != "0" && $(this).text() != "") {
      $(this).css('display', 'block');
      $(this).siblings('.rcmnd-price').children('.rcmnd-old-price').css('display', 'block');
    };
  });

  
  $(".color .options .option:first-child").addClass("selected-color-option");
  $(".color .options .option").click(function() {
    $(".selected-color-option").addClass("option");
    $(".selected-color-option").removeClass("selected-color-option");
    $(this).removeClass("option");
    $(this).addClass("selected-color-option");
  });
  
  $(".top-size .options .option:first-child").addClass("selected-size-option");
  $(".top-size .option").click(function() {
    $(".top-size .selected-size-option").addClass("option");
    $(".top-size .selected-size-option").removeClass("selected-size-option");
    $(this).removeClass("option");
    $(this).addClass("selected-size-option");
  });

  $(".lowerbody-size .options .option:first-child").addClass("selected-size-option");
  $(".lowerbody-size .option").click(function() {
    $(".lowerbody-size .selected-size-option").addClass("option");
    $(".lowerbody-size .selected-size-option").removeClass("selected-size-option");
    $(this).removeClass("option");
    $(this).addClass("selected-size-option");
  });

  
});

