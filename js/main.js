$(document).ready(function(){
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
  document
    .querySelector(".navbar-bottom")
    .classList.toggle("navbar-bottom--visible");
});
 
var modalButton = $('[data-toggle=modal]');
var closeModalButton = $(".modal__close");
modalButton.on('click', openModal);
closeModalButton.on('click', closeModal)

function closeModal(event) {
  event.preventDefault();
  var modalOverlay = $('.modal__overlay');
  var modalDialog = $('.modal__dialog');
  modalOverlay.removeClass('modal__overlay--visible');
  modalDialog.removeClass('modal__dialog--visible');
}


function openModal() {
  var modalOverlay = $('.modal__overlay');
  var modalDialog = $('.modal__dialog');
  modalOverlay.addClass('modal__overlay--visible');
  modalDialog.addClass('modal__dialog--visible');
}



$('.form').each(function() {
  $(this).validate({
    errorClass: "invalid",
    messages: {
      name: {
        required: "Please specify your name",
        minlength: "Name must be at least 2 characters long",
      },
      email: {
        required: "We need your email address to contact you",
        email: "Your email address must be in the format of name@domain.com"
      },
      phone: {
        required: "Input Your phone number",
        minlength: "your phone number must be 11 characters",
      },
    },
  });
})
});

