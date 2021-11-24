function buy() {
  var Qtt = document.getElementById('quantity').textContent;
  
  alert("khlles bach tchri "+Qtt+" diyal maganat -_-");
}
  
function pdctQuantity(method) {
  var NbrProduct = document.getElementById('quantity');
  if (method=="add") {
    NbrProduct.innerHTML = Number(NbrProduct.textContent)+1;
  } else if (method=="minus" && Number(NbrProduct.textContent) != 1) {
    NbrProduct.innerHTML = Number(NbrProduct.textContent)-1;
  }
}
