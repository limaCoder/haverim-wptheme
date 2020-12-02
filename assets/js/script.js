 /* Carousel */
$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
      items:1,
      loop:true,
      nav:true,
      dots:true,
      autoplay:true,
      autoplaySpeed:1000,
      smartSpeed:1500,
      autoplayHoverPause:true
  });
});

 /* Navigation Menu */

let mainNav=document.getElementById('main-nav');
let navbarToggle=document.getElementById('navbar-toggle');

navbarToggle.addEventListener('click',function(){
  if(this.classList.contains('active')){
    mainNav.style.display="none";
    this.classList.remove('active');
  }
  else {
    mainNav.style.display="flex";
    this.classList.add('active');
  }
});