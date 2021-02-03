setTimeout(function () {
  $('.loader').fadeToggle();
},500);

$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  })


  // navbar
  $(document).ready(function() {
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $('.navbar').addClass('color-navbar');

        $('.navbar').fadeIn();
      } else {
        $('.navbar').removeClass('color-navbar');
        $('.navbar').fadeIn();
      }
    });
    $('.navbar').click(function() {
      $('html, body ').animate({
        scrollTop: 0
      }, 100);
    });

      // galeri
      $('.galerys').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
          enabled: true
        },
        mainClass: 'mfp-with-zoom',
        removalDelay: 300,
        zoom: {
          enabled: true,
          duration: 300,
          easing: 'ease-in-out'
        },
         image: {
    // options for image content type
    titleSrc: 'title'
  }
  
      });
    
  });

// toTopButtom
$(document).ready(function() {
    $(window).scroll(function() {
      if ($(this).scrollTop() > 30) {
        $('#topBtn').fadeIn();
      } else {
        $('#topBtn').fadeOut();
      }
    });
    $('#topBtn').click(function() {
      $('html,body').animate({
        scrollTop: 0
      }, 800);
    });


    
  });


//   animate css

function scrollAll(kelas, animasi, durasi=''){

  function scroll(){
    let judulPanel= document.querySelector(`.${kelas}`);
    let judulPosition = judulPanel.getBoundingClientRect().top;
    let judulScreen = window.innerHeight;
    if(judulPosition < judulScreen){
  judulPanel.classList.add(`${animasi}`);
  judulPanel.style.setProperty('--animate-duration', `${durasi}`);
    }
  }
  window,addEventListener('scroll', scroll);
}
  // galeri
let card = scrollAll('submanfaat','animate__backInUp', '1s');

let card2 = scrollAll('submanfaat2','animate__backInUp', '1.5s');
let card3 = scrollAll('submanfaat3','animate__backInUp', '2s');
let judulproker = scrollAll('judulprogram','animate__fadeInUp', '1s');
let divproker = scrollAll('divproker','animate__zoomIn', '1s');
let judulTesti = scrollAll('judultesti','animate__zoomIn', '1s');
let testi = scrollAll('card-testi','animate__zoomIn', '2s');
let judulManfaat = scrollAll('judul-artikel','animate__zoomIn', '1s');
let cardManfaat = scrollAll('content-artikel','animate__backInUp', '1s');
let cardButton = scrollAll('lihat','animate__fadeInUp', '1s');
let tentangKiri = scrollAll('kiri','animate__fadeInUp', '1s');
let tentangKanan = scrollAll('isi-kanan','animate__fadeInUp', '1s');
//   const galeri = document.querySelector('img.galerii');
//   const judulGaleri = document.querySelector('.judul-galeri');
//   const isiTeks = document.querySelector('.tekss');
//   galeri.addEventListener('mouseenter', function(){
//       isiTeks.style.display= 'inline-block';
//       galeri.style.opacity= '0.5';
      
//   });
//   galeri.addEventListener('mouseleave', function(){
//     galeri.style.opacity= '1';
//     isiTeks.style.display= 'none';

// });
