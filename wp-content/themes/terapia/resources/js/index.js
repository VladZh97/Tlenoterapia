import "../scss/style.scss";


const loader = document.querySelector('.loader__container');
const html = document.querySelector('html');


window.addEventListener('load', function() {
  loader.parentElement.removeChild(loader);
  html.style.overflow = 'auto';
})

const menuBtn = document.querySelector('.menu-btn');
const menuTop = document.querySelector('.header__right')
let menuOpen = false;
menuBtn.addEventListener('click', () => {
    if(!menuOpen) {
        menuBtn.classList.add('open');
        menuTop.classList.add('active')
        menuOpen = true;
    } else {
        menuBtn.classList.remove('open');
        menuTop.classList.remove('active')
        menuOpen = false;
    }
});

const menuBtnBurger = document.querySelector('.menu-btn__burger');



$(".slide").owlCarousel({
  loop: true,
  margin: 5,
  nav: true,
  dots: true,
  smartSpeed: 1500,
  autoplay: true,
  autoplaySpeed: 2000,
  autoplayTimeout: 8000,
  responsive: {
    0: {
      items: 1,
    },
  },

  navText: [
    '<button type="button" class="slick-arrow slick-prev"><i class="fas fa-angle-left"></button>',
    '<button type="button" class="slick-arrow slick-next"><i class="fas fa-angle-right"></button>',
  ],
});

$(".news-page__content").owlCarousel({
  loop: true,
  margin: 15,
  nav: true,
  dots: true,
  smartSpeed: 1500,
  autoplay: true,
  autoplaySpeed: 2000,
  autoplayTimeout: 6000,
  dotsClass: "news-page__dots",
  dotClass: "news-page__dot",
  smartSpeed: 1000,
  responsive: {
    0:{
      items:1,
  },
  576: {
      items:2
  },
  768:{
      items:3
  },
  992:{
      items:4
  }
  },

  navText: [
    '<button type="button" class="news-page__prew news-page__arrow"><i class="fas fa-angle-left"></i></button>',
    '<button type="button" class="news-page__next news-page__arrow"><i class="fas fa-angle-right"></i></button>',
  ],
});



if(document.body.classList.contains('page-template-page-contact-php')) {

  // MAP
  var mapCenter = [20.239666, 50.175713];
  
  
  
  
  mapboxgl.accessToken =
    "pk.eyJ1IjoidmxhZHpoIiwiYSI6ImNrZzBxcHpoMDB1ZmsydG9iMHE0YnJ6NDYifQ._kSahmQ3wNJverVwR7NxgA";
  var map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/vladzh/ckg9tw9l02mkz19nwaem18kkd",
    center: mapCenter,
    zoom: 11,
  });
  
  
  map.scrollZoom.disable();
  map.boxZoom.disable();
  map.dragRotate.disable();
  map.keyboard.disable();
  map.doubleClickZoom.disable();
  map.touchZoomRotate.disable();
  
  var point = document.createElement("div");
  point.className = "marker";
  point.innerHTML = '<i class="fas fa-map-marker-alt"></i>';
  point.style.fontSize = "30px";
  point.style.color = "#0054A3";
  
  var marker = new mapboxgl.Marker(point)
      .setLngLat([20.239666, 50.175713])
      .addTo(map);
  
}


$.fn.accordion = function() {
  const trigger = $(this).find('.accordion-trigger');
  const collapse = $(this).find('.accordion-collapse');

  $(trigger).each(function(){
    $(this).on('click', function(){
      $(this).siblings('.accordion-collapse').slideToggle();
      $(this).toggleClass('accordion-open');
      $(this).parent().siblings('.accordion-item').find('.accordion-trigger').removeClass('accordion-open');
      $(this).parent().siblings('.accordion-item').find('.accordion-collapse').slideUp();
    });
  });
}

$('.accordion').accordion();
$('.accordion2').accordion();


  AOS.init();

if(document.body.classList.contains('page-template-page-contact')) {
  document.querySelector('.contact__bottom').style.display = 'none';
}