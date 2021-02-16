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
