var hotelSlider = new Swiper('.hotel-slider', {
    loop: true,
    navigation: {
      nextEl: '.hotel-slider__button--next',
      prevEl: '.hotel-slider__button--prev',
    },
    keyboard: {
        enabled: true,
        onlyInViewport: false,
      },
  })


  var reviewsSlider = new Swiper('.reviews-slider', {
    loop: true,
    navigation: {
      nextEl: '.reviews-slider__button--next',
      prevEl: '.reviews-slider__button--prev',
    },
    keyboard: {
        enabled: true,
        onlyInViewport: false,
      },
  })

  $(window).scroll(function(){
    $('.newsletter').bgscroll({
      direction: 'top',
    });
  })


var menuButton = document.querySelector(".menu-button")
menuButton.addEventListener("click", function (){
  console.log("Клик по кнопке меню");
  document
    .querySelector(".navbar-bottom")
    .classList.toggle("navbar-bottom--visible");
});
 


