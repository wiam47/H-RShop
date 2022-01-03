var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 6000); 
}


$(document).ready(function(){
  $(".category").mouseenter(function(){
    var component = "#"+$(this).text().toLowerCase();
    $(component).css("visibility", "visible");
    var leftOffset = $(this).innerWidth()+"px";
    $(component).css("left", leftOffset);
  });
  $(".category").mouseleave(function(){
    var component = "#"+$(this).text().toLowerCase();
    $(component).css("visibility", "hidden");
  });
  
  
});