/*const bars = document.getElementById('bars')
const close = document.getElementById('close')
const navigation = document.getElementById('navigation')
bars.addEventListener('click', function(){
  navigation.classList.add('active')
})
close.addEventListener('click', function(){
  navigation.classList.remove('active')
})*/





let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}






//When the document is ready (i.e., all HTML elements have been loaded)
document.addEventListener("DOMContentLoaded", function() {
    // Select all h3 elements inside elements with the class "footer-links-holder"
    var h3Elements = document.querySelectorAll(".footer-links-holder h3");
  
    // Loop through each h3 element
    h3Elements.forEach(function(h3Element) {
      // Add an event listener to each h3 element that listens for a click event
      h3Element.addEventListener("click", function() {
        // Get the parent element of the h3 element (i.e., the element with the class "footer-links-holder")
        var parentElement = h3Element.parentNode;
  
        // Toggle the class "active" on the parent element
        parentElement.classList.toggle("active");
      });
    });
  });